//
// |--------------------------------------------------------------------------
// | Exon TaskManager Application
// |--------------------------------------------------------------------------
//

const windowWidth = $(window).width() ;


class TaskManager
{

	constructor( options )
	{
		const defaultOptions = {
			container: null,
			data: null,
			searchables: null,
			perPage: 10,
			pageIndex: 0,
		} ;

		this.setOptions( options, defaultOptions ) ;

		this.container = this.options.container ;
		this.setLayout( this.container ) ;

		this.originalData = _.clone( this.options.data ) ;
		this.data = _.clone( this.options.data ) ;
		this.paginatedData = this.paginateData( this.data ) ;
		this.selectedTasks = [] ;
	}

	setLayout( container )
	{
		this.tasksContainer = container.append(`
			<div class="task-manager-content"></div>
		`).children().last() ;
		
		this.paginationContainer = container.append(`
			<div class="task-manager-pagination"></div>
		`).children().last() ;
	}

	setOptions( options, defaultOptions )
	{
		for( let i in defaultOptions )
		{
			if( typeof options[i] == "undefined" )
			{
				options[i] = defaultOptions[i] ;
			}
		}

		this.options = options ;
	}



	build()
	{
		this.data = _.orderBy( this.data, ['deadline'], ['desc']);

		this.tasksContainer.html( this.toolbarView() ) ;
		this.tasksContainer.append( this.view() ) ;
		this.paginationContainer.html( this.pagination() ) ;

		this.setEventListeners() ;
		this.setUpPaginationEventListeners() ;

		this.container.trigger("update.task-manager") ;
	}

	pagination()
	{
		const paginationInstance = new Pagination({
			per_page: this.options.perPage,
			offset: this.options.pageIndex * this.options.perPage,
			page: this.options.pageIndex + 1,
			limit: this.options.perPage,
			total_items: this.data.length,
		}) ;

		const paginationView = this.paginationView( paginationInstance ) ;

		return paginationView ;
	}

	view()
	{
		this.paginatedData = this.paginateData( this.data ) ;
		
		const data = _.groupBy( this.paginatedData , (item) => item.deadlineDate ) ;
		
		let views = [] ;
		let paginationView = '' ;

		for( let date in data )
		{
			const daysData = data[ date ] ;

			views.push( this.dayView( date, daysData ) ) ;
		}

		const paginationInstance = new Pagination({
			per_page: this.options.perPage,
			offset: this.options.pageIndex * this.options.perPage,
			page: this.options.pageIndex + 1,
			limit: this.options.perPage,
			total_items: data.length,
		}) ;

		paginationView = this.paginationView( paginationInstance ) ;

		return views.join("\n") + "\n" + paginationView ;
	}

	dayView( date, daysTasks )
	{
		let views = [] ;

		views.push(`

		<div class="task-group active" id="task-group-today">

			<div class="task-group-label">
				<button class="btn" data-toggle="class">
					<i class="fas fa-caret-down"></i>
					<h6>${moment( date ).calendar().split(" ")[0]} </h6><small>(${daysTasks.length})</small>
				</button>
			</div>

			<div class="tasks show">
				
				<table class="table table-responsive">
					<thead>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
					</thead>
					<tbody>
			`) ;

		for( let i = 0 ; i < daysTasks.length ; i++ )
		{
			const task = daysTasks[ i ] ;

			views.push( this.taskView( task ) ) ;
		}

		views.push(`
					</tbody>
				</table>
			</div>
		</div>`) ;

		return views.join("\n") ;
	}

	taskView( task )
	{
		let membersView = [] ;

		for( let i = 0 ; i < task.members.length ; i++ )
		{
			const member = task.members[ i ] ;

			membersView.push(`
				<a href="#" class="member-link" data-id="${member.id}"><img src="${ROOT_URL}/${member.image}" data-toggle="tooltip" title="${member.name}" alt="${member.name} image"></a>
			`) ;
		}

		let status = '' ;

		if( task.status > 0 )
		{
			status = this.translateStatus( task.status ) + " At " + moment( task.updated_at ).calendar() ;
		}
		else 
		{
			status = this.translateStatus( task.status ) ;
		}

		let statusToggler = '' ;

		if( task.status < 3 )
		{
			statusToggler = `<button data-id="${task.id}" class="btn btn-sm btn-primary-light btn-update-status">Mark As ${this.translateStatus( parseInt( task.status ) + 1 )}</span>` ;
		}
		else 
		{
			statusToggler = '' ;
		}

		let deadLineFromNow = moment( task.deadline ).fromNow() ;

		if( moment( task.deadline ).diff( moment() ) < 0 )
		{
			deadLineFromNow = "Passed" ;
		}

		return `
		<tr>
			<td style="width: 20px;">
				<div class="custom-control custom-checkbox custom-checkbox-2">
					<input type="checkbox" class="custom-control-input" data-id="${task.id}" id="table-checkbox-${task.id}">
					<label class="custom-control-label" for="table-checkbox-${task.id}"></label>
				</div>
			</td>
			<td class="text-blue">
				${task.id}
			</td>
			<td class="text-blue">
				${task.name}
			</td>
			<td class="not-selectable">
				<div class="img-stack">
					${membersView.join("\n")}
				</div>
			</td>
			<td>
				<span class="badge badge-${this.statusColor( task.status )}-light">${status}</span>
			</td>
			<td>
				${statusToggler}
			</td>
			<td>
				<span class="text-blue">
					<i class="far fa-clock"></i>
					${moment( task.deadline ).format("HH:mm:ss")} <small class="text-muted">(${deadLineFromNow})</small>
				</span>
			</td>
			<td class="operations">
				<a href="#" class="btn-edit btn-icon btn btn-primary-light p-2" data-id="${task.id}">
					<svg fill="#5780f7" viewBox="0 0 1024 1024"><path d="M978.101 45.898c-28.77-28.768-67.018-44.611-107.701-44.611-40.685 0-78.933 15.843-107.701 44.611l-652.8 652.8c-2.645 2.645-4.678 5.837-5.957 9.354l-102.4 281.6c-3.4 9.347-1.077 19.818 5.957 26.85 4.885 4.888 11.43 7.499 18.104 7.499 2.933 0 5.891-0.502 8.744-1.541l281.6-102.4c3.515-1.28 6.709-3.312 9.354-5.958l652.8-652.8c28.768-28.768 44.613-67.018 44.613-107.702s-15.843-78.933-44.613-107.701zM293.114 873.883l-224.709 81.71 81.712-224.707 566.683-566.683 142.997 142.997-566.683 566.683zM941.899 225.098l-45.899 45.899-142.997-142.997 45.899-45.899c19.098-19.098 44.49-29.614 71.498-29.614s52.4 10.518 71.499 29.616c19.098 19.098 29.616 44.49 29.616 71.498s-10.52 52.4-29.616 71.498z"></path></svg>
				</a>
				<a href="#" class="btn-delete btn-icon btn btn-danger-light p-2" data-id="${task.id}">
					<svg fill="#ed3472" viewBox="0 0 1024 1024">
						<path d="M793.6 102.4h-179.2v-25.6c0-42.347-34.453-76.8-76.8-76.8h-102.4c-42.347 0-76.8 34.453-76.8 76.8v25.6h-179.2c-42.347 0-76.8 34.453-76.8 76.8v51.2c0 33.373 21.403 61.829 51.2 72.397v644.403c0 42.349 34.453 76.8 76.8 76.8h512c42.349 0 76.8-34.451 76.8-76.8v-644.403c29.797-10.568 51.2-39.024 51.2-72.397v-51.2c0-42.347-34.451-76.8-76.8-76.8zM409.6 76.8c0-14.115 11.485-25.6 25.6-25.6h102.4c14.115 0 25.6 11.485 25.6 25.6v25.6h-153.6v-25.6zM742.4 972.8h-512c-14.115 0-25.6-11.485-25.6-25.6v-640h563.2v640c0 14.115-11.485 25.6-25.6 25.6zM819.2 230.4c0 14.115-11.485 25.6-25.6 25.6h-614.4c-14.115 0-25.6-11.485-25.6-25.6v-51.2c0-14.115 11.485-25.6 25.6-25.6h614.4c14.115 0 25.6 11.485 25.6 25.6v51.2z"></path><path class="path2" d="M640 358.4c-14.139 0-25.6 11.462-25.6 25.6v512c0 14.139 11.461 25.6 25.6 25.6s25.6-11.461 25.6-25.6v-512c0-14.138-11.461-25.6-25.6-25.6z"></path><path class="path3" d="M486.4 358.4c-14.138 0-25.6 11.462-25.6 25.6v512c0 14.139 11.462 25.6 25.6 25.6s25.6-11.461 25.6-25.6v-512c0-14.138-11.462-25.6-25.6-25.6z"></path><path class="path4" d="M332.8 358.4c-14.138 0-25.6 11.462-25.6 25.6v512c0 14.139 11.462 25.6 25.6 25.6s25.6-11.461 25.6-25.6v-512c0-14.138-11.462-25.6-25.6-25.6z"></path>
					</svg>
				</a>
			</td>
		</tr>` ;
	}

	toolbarView()
	{
		return `
		<div class="btn-toolbar task-manager-toolbar my-4" role="toolbar" aria-label="Toolbar with button groups">
			<div class="btn-group mr-2" role="group" aria-label="First group">
				<button type="button" class="btn-finish-all btn btn-sm btn-primary">Mark As Finished</button>
			</div>
			<div class="btn-group mr-2" role="group" aria-label="Second group">
				<button type="button" class="btn-delete-all btn btn-sm btn-danger">Delete</button>
			</div>
		</div>
			` ;
	}

	paginationView( pagination )
	{
        let html = [] ;

        let maxPaginationSize = 7 ;

        if( ! pagination.hasPages() )
        {
            return "" ;
		}

		html.push( `
		<nav aria-label="Page navigation example">
			<ul class="pagination pagination-inverse pagination-round pagination-hard-square">
		`) ;

        if( pagination.onFirstPage() )
        {
            html.push( `
						<li class="page-item disabled">
							<span class="page-link" aria-label="Previous">
								<i class="fas fa-angle-left"></i>
							</span>
						</li>
						`) ;
        } else
        {
            let previousPage = pagination.currentPage() - 1 ;

            html.push( `
						<li class="page-item">
							<a class="page-link" data-page="${previousPage}" href="javascript:void(0)" rel="prev" aria-label="Previous">
								<i class="fas fa-angle-left"></i>
							</a>
						</li>
						`) ;
		}
		

		if( windowWidth < 500 )
		{
			maxPaginationSize = 5 ;
		}
		
		
		if( pagination.totalPages() > maxPaginationSize )
		{
			html.push( this.createPaginationLink( pagination, 1 ) ) ;

			let paginationFrom = 2 ;
			let paginationTo = pagination.totalPages() - 1 ;

			if( windowWidth < 500 )
			{

				if( pagination.currentPage() <= 3 )
				{
					paginationFrom = 2 ;
					paginationTo = 3 ;
				} else
				{
					paginationFrom = paginationTo = pagination.currentPage() ;
				}
	
				if( pagination.totalPages() - pagination.currentPage() < 3 )
				{
					paginationFrom = pagination.totalPages() - 2 ;
					paginationTo = pagination.totalPages() - 1 ;
				}
			}
			else 
			{
				if( pagination.currentPage() < 5 )
				{
					paginationFrom = 2 ;
					paginationTo = 5 ;
				} else
				{
					paginationFrom = pagination.currentPage() - 1 ;
					paginationTo = pagination.currentPage() + 1 ;
				}
	
				if( pagination.totalPages() - pagination.currentPage() < 5 )
				{
					paginationFrom = pagination.totalPages() - 4 ;
					paginationTo = pagination.totalPages() - 1 ;
				}
			}

			
			if( paginationFrom > 2 )
			{
				html.push( `<li class="page-item disabled" aria-current="page"><span class="page-link">...</span></li>`) ;
			}

			for ( let page_number = paginationFrom ; page_number <= paginationTo ; page_number++ )
			{
				html.push( this.createPaginationLink( pagination, page_number ) ) ;
			}

			if( pagination.totalPages() - paginationTo > 2 )
			{
				html.push( `<li class="page-item disabled" aria-current="page"><span class="page-link">...</span></li>`) ;
			}

			html.push( this.createPaginationLink( pagination, pagination.totalPages() ) ) ;
		}
		else 
		{
			for ( let page_number = 1 ; page_number <= pagination.totalPages() ; page_number++ )
			{
				html.push( this.createPaginationLink( pagination, page_number ) ) ;
			}
		}


        if( pagination.hasMorePages() )
        {
            let nextPage = pagination.currentPage() + 1 ;

            html.push( `
						<li class="page-item">
							<a class="page-link" data-page="${nextPage}" href="javascript:void(0)" rel="next" aria-label="Next">
								<i class="fas fa-angle-right"></i>
							</a>
						</li>
						`) ;
        } else
        {
            html.push( `
						<li class="page-item disabled" aria-disabled="true" aria-label="Next">
							<span class="page-link">
								<i class="fas fa-angle-right"></i>
							</span>
						</li>
						`) ;
        }

        html.push( `
			</ul>
		</nav>
		`) ;

        return html.join("\n") ;
	}

	createPaginationLink( paginationInstance, page_number )
	{
		if( page_number == paginationInstance.currentPage() )
		{
			return `
					<li class="page-item active" aria-current="page"><span class="page-link">${page_number}</span></li>
			` ;
		}
		else
		{
			return `
					<li class="page-item" aria-current="page"><a data-page="${page_number}" href="javascript:void(0)" class="page-link">${page_number}</a></li>
			` ;
		}
	}

	translateStatus( status )
	{
		switch( parseInt( status ) )
		{
			case 1 :
				return "Seen" ;
					
			case 2 :
				return "Started" ;
					
			case 3 :
				return "Finished" ;

			default:
				return "Not Yet Seen" ;
		}
	}

	statusColor( status )
	{
		switch( parseInt( status ) )
		{
			case 1 :
				return "warning" ;
					
			case 2 :
				return "primary" ;
					
			case 3 :
				return "success" ;

			default:
				return "danger" ;
		}
	}

	search( query )
	{
		query = query.trim() ;

		this.data = _.filter(this.originalData, (item) => 
		{
			for( let i = 0 ; i < this.options.searchables.length ; i++ )
			{
				const propertyName = this.options.searchables[ i ] ;

				if( item[ propertyName ].toString().toLowerCase().search( query.toLowerCase() ) !== -1 )
				{
					return true ;
				}
			}
		}) ;
		this.build() ;
	}

	filterByMembers( membersIds )
	{
		this.data = _.filter( this.originalData, ( item ) => 
		{
			for( let i = 0 ; i < membersIds.length ; i++ )
			{
				const id = membersIds[ i ] ;

				if( _.find(item.members, { 'id': parseInt( id ) }) )
				{
					return true ;
				}
			}
		}) ;
		
		this.build() ;
	}

	newTask( task )
	{
		this.originalData.push( task ) ;
		this.data = this.originalData ;

		this.build() ;
	}

	updateTask( id, newTask )
	{
		const task = _.find(this.originalData, { 'id': id }) ;
		const taskIndexInData = this.originalData.indexOf( task ) ;

		if( task )
		{
			for( let i in newTask )
			{
				this.originalData[ taskIndexInData ][ i ] = newTask[ i ] ;
			}
	
			this.build() ;
		}
		
		this.data = this.originalData ;
	}

	updateTasks( ids, updateableValues )
	{
		this.originalData = _.map(this.originalData, (item) => 
		{
			for( let i = 0 ; i < ids.length ; i++ )
			{
				const id = ids[ i ] ;

				if( item.id == id )
				{
					for( let property in updateableValues )
					{
						item[ property ] = updateableValues[ property ] ;
					}
				}
			}
			return item ;
		}) ;

		this.data = this.originalData ;

		this.build() ;
	}

	deleteTask( id )
	{
		this.originalData = _.reject(this.originalData, { 'id': id }) ;
		this.data = this.originalData ;

		this.build() ;
	}

	deleteTasks( ids )
	{
		this.originalData = _.reject(this.originalData, (item) => 
		{
			for( let i = 0 ; i < ids.length ; i++ )
			{
				const id = ids[ i ] ;

				if( item.id == id )
				{
					return true ;
				}
			}
			return false ;
		}) ;
		this.data = this.originalData ;

		this.build() ;
	}

	paginateData( data )
	{
		const paginatedData = _.chunk( data, this.options.perPage ) ;

		if( ! paginatedData[ this.options.pageIndex ] )
		{
			this.options.pageIndex = 0 ;
		}
		return paginatedData[ this.options.pageIndex ] ;
	}

	pageCount()
	{
		return Math.ceil( this.data.length / this.options.perPage ) ;
	}

	goToPage( pageNumber )
	{
		this.options.pageIndex = pageNumber - 1 ;

		if( this.options.pageIndex >= this.pageCount() )
		{
			this.options.pageIndex = 0 ;
		}
		else if( this.options.pageIndex < 0 )
		{
			this.options.pageIndex = this.pageCount() - 1 ;
		}
		this.build() ;
	}

	nextPage()
	{
		this.goToPage( this.options.pageIndex + 1 ) ;
	}

	prevPage()
	{
		this.goToPage( this.options.pageIndex - 1 ) ;
	}

	showAll()
	{
		this.options.perPage = this.data.length ;
		this.build() ;
	}

	setEventListeners()
	{
		const self = this ;
		
		this.container.find("table tr>td:not(.not-selectable,.operations)").on('click', function(e)
		{
			const checkBox = $(this).closest("tr").find("input[type='checkbox']").first() ;
			checkBox.prop("checked", ! checkBox.prop("checked") ) ;
			checkBox.trigger("change")
		}) ;

		this.container.find("table tr>td input[type='checkbox']").on('change', function(e)
		{
			const id = $(this).data("id") ;

			if( $(this).is(":checked") )
			{
				self.selectedTasks.push( _.find(self.data, { 'id': id }) ) ;
			}
			else 
			{
				self.selectedTasks = _.reject(self.selectedTasks, { 'id': id }) ;
			}

			self.container.trigger("selected.task-manager", [ self.selectedTasks ]) ;
			
		}) ;

		this.container.find("[data-toggle='class']").on("click", function(e)
		{
			$(this).closest(".task-group").toggleClass("active") ;
		}) ;

		this.container.on("selected.task-manager", function(e, selectedTasks )
		{
			const toolbar = self.container.find(".task-manager-toolbar") ;

			if( selectedTasks.length > 0 && ! toolbar.hasClass("active") )
			{
				toolbar.addClass("active") ;
			}
			else if( selectedTasks.length == 0 && toolbar.hasClass("active"))
			{
				toolbar.removeClass("active") ;
			}
		}) ;

		this.container.find("table tr>td .btn-update-status").on('click', function(e)
		{
			const id = $(this).data("id") ;
			const task = _.find(self.data, { 'id': id }) ;

			self.updateTask( id, {
				status: parseInt( task.status ) + 1,
				updated_at: moment().format("YYYY-MM-DD hh:mm:ss"),
			}) ;
			
		}) ;
		
		this.container.find("table tr>td.operations .btn-delete").on("click", function(e)
		{
			e.preventDefault() ;

			self.deleteTask( parseInt( $(this).data("id") ) ) ;
		}) ;
		
		this.container.find(".task-manager-toolbar .btn-delete-all").on("click", function(e)
		{
			e.preventDefault() ;

			self.deleteTasks( _.map(self.selectedTasks, (item) => item.id ) ) ;
		}) ;
		
		this.container.find(".task-manager-toolbar .btn-finish-all").on("click", function(e)
		{
			e.preventDefault() ;

			self.updateTasks( _.map(self.selectedTasks, (item) => item.id ), {
				status: 3,
				updated_at: moment().format("YYYY-MM-DD HH:mm:ss"),
			} ) ;
		}) ;
		
		this.container.find("table tr>td .member-link").on("click", function(e)
		{
			e.preventDefault() ;

			const id = parseInt( $(this).data("id") ) ;

			$("#staff-filter").find(`option[value="${id}"]`).prop("selected", true) ;
			$("#staff-filter").trigger("change") ;
			
			// self.filterByMembers( [ id ] ) ;
		}) ;
	}

	setUpPaginationEventListeners()
	{
		const self = this ;

		this.paginationContainer.find("[data-page]").on("click", function(e)
		{
			self.goToPage( $(this).data("page") ) ;
		}) ;
	}

	removeAllFilters()
	{
		this.data = this.originalData ;
		this.build() ;
	}



}



$("#task-manager").on("update.task-manager", function(e)
{
	$(".tooltip.show").detach() ;

	$(this).find("table tr>td").find('[data-toggle="tooltip"], .tooltip-top, .tooltip-bottom, .tooltip-left, .tooltip-right').each(function()
	{
		const el = $(this) ;
		let options = {} ;

		if( el.data("position") )
		{
			options.position = el.data("position") ;
		}

		if( el.data("type") )
		{
			options.template = `<div class="tooltip tooltip-${el.data("type")}" role="tooltip"><div class="arrow"></div><div class="tooltip-inner bg-${el.data("type")}"></div></div>` ;
		}

		el.tooltip( options ) ;
	}) ;
}) ;



window.TaskManager = TaskManager ;



