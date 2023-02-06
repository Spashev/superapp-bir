/*
|--------------------------------------------------------------------------
| Exon Custom Selector
|--------------------------------------------------------------------------
*/


let PRETTY_SELECTORS = [] ;

class PrettySelector
{

	constructor( el, options, instanceNumber )
	{
		this.el = el ;
		this.original_el = this.el.prev() ;
		this.original_options = options ;
		this.options = this.setOptions( this.original_el, options ) ;

		this.triggerChangeAtInit = false ;

		this.instanceNumber = instanceNumber ;

		this.selectedItems = {} ;

		this.original_el.hide() ;
		
		this.prepareOriginalSelectBox() ;
		this.build() ;
		this.setEventListeners() ;

		this.update() ;
	}

	setOptions( el, options )
	{
		return $.extend( {
			el: el,
			template: false,
			name: el.attr("name") || "selector",
			items: (function()
			{
				const options = el.find("option") ;

				let items = [] ;

				for( let i = 0 ; i < options.length ; i++ )
				{
					const option = $( options[ i ] ) ;

					items.push({
						originalOption: option,
						value: option.attr("value") ? option.attr("value") : option.text().trim(),
						label: option.text().trim(),
						isSelected: option.prop("selected") || option.attr("selected") ? true : false ,
						isDisabled: option.prop("disabled"),
						image: option.attr("image"),
						icon: option.attr("icon"),
					}) ;
				}

				return items ;
			})(),
			separator: el.attr("separator") || ", ",
			placeholder: el.attr("placeholder") || "Select one",
			color: el.data("color") || 'light',
			multiple: typeof( el.attr("multiple") ) !== "undefined",
		}, options ) ;
	}

	prepareOriginalSelectBox()
	{
		this.original_el.find("option").each( function()
		{
			const option = $(this) ;

			if( ! option.attr("value") )
			{
				option.attr("value", option.text() ) ;
			}

			if( option.attr("selected") )
			{
				option.removeAttr("selected").prop("selected", true) ;
			}
		} ) ;
	}

	build()
	{
		let selectOptions ;
		
		selectOptions = this.buildOptions() ;

		const html = `
			<div class="dropdown dropdown-select dropdown-select-${this.options.color} btn-block p-0">
				<button class="btn btn-${this.options.color} dropdown-toggle" id="customSelectorDropdown-${this.instanceNumber}-${this.options.name}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					${this.options.placeholder}
				</button>
				<div class="dropdown-menu" aria-labelledby="customSelectorDropdown-${this.options.name}">
					${selectOptions.join("\n")}
				</div>
			</div>` ;

		this.el.html( html ) ;
	}

	buildOptions()
	{
		let items = [] ;

		for( let i = 0 ; i < this.options.items.length ; i++ )
		{
			const item = this.options.items[i] ;

			items.push( this.template( item ) ) ;
		}
		
		return items ;
	}

	template( item )
	{
		if( this.options.template )
		{
			return this.options.template( item ) ;
		}
		
		return `
		<div class="dropdown-item">
			<button type="button" data-value="${item.value}" data-label="${item.label}" ${item.isDisabled ? "disabled" : ""} class="button btn btn-block${item.isSelected && ! item.isDisabled ? " active" : ""}">
				${this.image( item )}
				${this.icon( item )}
				<span class="content">${item.label}</span>
			</button>
		</div>` ;
	}

	image( item )
	{
		if( typeof item.image !== "undefined" )
		{
			return `
						<div class="avatar-group select-thumbnail">
							<a href="#" class="avatar avatar-sm">
								<img alt="Option image" src="${item.image}" class="rounded-circle">
							</a>
						</div>` ;
		}

		return "" ;
	}

	icon( item )
	{
		if( typeof item.icon !== "undefined" )
		{
			return `<i class="${item.icon}"></i>` ;
		}

		return "" ;
	}

	update()
	{
		const self = this ;
		
		let originalSelectedOptions = this.original_el.find(`option:selected, option[selected]`) ;

		this.el.find(`.dropdown-item .button.active`).removeClass("active") ;
		
		this.selectedItems = {} ;

		if( ! self.options.multiple )
		{
			originalSelectedOptions = this.original_el.find(`option:selected, option[selected]`).prop("selected", false).last().prop("selected", true) ;
		}

		originalSelectedOptions.each( function()
		{
			const option = $(this) ;
			const value = option.attr("value") ;
			const label = option.text().trim() ;

			self.el.find(`.dropdown-item .button[data-value="${value}"]`).addClass("active") ;

			if( ! self.options.multiple )
			{
				self.el.find(`.dropdown-item .button[data-value="${value}"]`).addClass("active") ;
				self.selectedItems = {} ;
			}
			self.selectedItems[ value ] = label ;
		})

		var labels = [] ;
		var values = [] ;

		for( const val in this.selectedItems )
		{
			const label = this.selectedItems[ val ] ;

			if( label !== false )
			{
				labels.push( label.trim() ) ;
				values.push( val ) ;
			}
		}

		var btn = this.el.find(".dropdown-toggle") ;

		btn.text( labels.length == 0 ? this.options.placeholder : labels.join( this.options.separator ) ) ;
		this.original_el.trigger("change.customselect", [ this.options.multiple ? values : values[0] ] ) ;
	}

	setEventListeners()
	{
		const self = this ;
		
		this.original_el.on("change", function(e)
		{
			self.update() ;
		}) ;
		
		this.el.find(".dropdown-select .dropdown-item>.button").on("click", function(e)
		{
			const button = $(this) ;
			const value = button.data("value") ;
			const originalOption = self.original_el.find(`option[value='${value}']`) ;

			if( self.options.multiple )
			{
				if( button.hasClass("active") )
				{
					originalOption.prop("selected", false) ; // .removeAttr("selected") ;
				}
				else 
				{
					originalOption.prop("selected", true) ; // .attr("selected", "selected") ;
				}
			}
			else 
			{
				self.original_el.find(`option:selected`).prop("selected", false) ; // .removeAttr("selected", "selected") ;
				originalOption.prop("selected", true) ; // .attr("selected", "selected") ;
			}

			self.original_el.trigger("change") ;

			self.update() ;
		}) ;
	
		if( self.options.multiple )
		{
			this.el.find(".dropdown-menu").on('click', (e) => e.stopPropagation() ) ;
		}

		if( this.triggerChangeAtInit )
		{
			this.original_el.trigger("change") ;
		}

	}

	dispose()
	{
		this.original_el.show() ;
		PRETTY_SELECTORS[ this.original_el.data("instance-index") ] = undefined ;

		PRETTY_SELECTORS = PRETTY_SELECTORS.filter( (item) => typeof(item) !== "undefined" ) ;

		this.el.detach() ;
	}

	static init( el, options )
	{
		el.after(`<div class="pretty-selector-el"></div>`) ;

		el.data("instance-index", PRETTY_SELECTORS.length) ;

		const prettySelector = new PrettySelector( el.next(), options || {}, PRETTY_SELECTORS.length ) ;

		PRETTY_SELECTORS.push( prettySelector ) ;

		// prettySelector.dispose() ;
	}

	reset()
	{
		const instanceIndex = this.original_el.data("instance-index") ;
		this.el.detach() ;
		this.original_el.after(`<div class="pretty-selector-el"></div>`) ;

		PRETTY_SELECTORS[ instanceIndex ] = new PrettySelector( this.original_el.next(), this.original_options|| {}, instanceIndex ) ;
	}
}

let prettySelectorElements = $("[data-toggle='selector']") ;
 
(function( $ ){

    var availabeMethods = {
        update : true,
        dispose : true,
        reset : true,
    };

	$.fn.selector = function( methodOrOptions, args )
	{
		const self = this ;

		return this.each( ( k, v ) =>
		{
			const el = $(v) ;

			if( availabeMethods[ methodOrOptions ] )
			{
				const methodName = methodOrOptions ;
				const instance = PRETTY_SELECTORS[ el.data("instance-index") ] ;

				if( instance )
				{
					instance[ methodName ]( args ) ;
				}
				return this ;
			}
			else if ( typeof methodOrOptions === 'object' || ! methodOrOptions )
			{
				PrettySelector.init( el, methodOrOptions ) ;
				return this ;
			}
			else
			{
				throw new TypeError(`Method named "${methodOrOptions}" does not exist on jQuery.prettySelector`)
			}    
		} ) ;
    };


})( jQuery );
