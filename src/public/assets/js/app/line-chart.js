/*
|--------------------------------------------------------------------------
| Line Chart
|--------------------------------------------------------------------------
|
| Createss a simple svg linear chart.
|
*/

class LineChart {
	
	constructor( el, data, options )
	{
		this.options = {
			height: "200px",
			width: "100%",
			circle_fill: "red",
			stroke_color: "rgb(255, 0, 0)",
			stroke_width: "2px",
			circle_radius: "3px",
		} ;

		this.el = el ;
		this.data = data ;
		this.builtData = [] ;
		this.svgData = [] ;


		for( let option in this.options )
		{
			if( typeof options[ option ] !== "undefined" )
			{
				this.options[ option ] = options[ option ] ;
			}
		}

		this.buildData() ;
		this.buildSvg() ;
		
	}


	buildData()
	{
		const maximumNumber = Math.max.apply(Math, this.data ) ;
		const minimumNumber = Math.min.apply(Math, this.data ) * .8 ;

		const maximum = maximumNumber + ( maximumNumber - minimumNumber ) * .05 ;
		const minimum = minimumNumber - ( maximumNumber - minimumNumber ) * .05 ;

		const verticalStep = ( 100 / ( maximum - minimum ) ).toFixed( 2 ) ;
		const horizontalStep = ( 100 / ( this.data.length - 1 ) ).toFixed( 2 ) ;

		for( let i = 0 ; i < this.data.length ; i++ )
		{
			const value = this.data[ i ] - minimum ;

			const path = {
				x: ( i * horizontalStep ).toFixed( 2 ),
				y: ( value * verticalStep ).toFixed( 2 ),
			} ;

			this.builtData.push( path ) ;
		}
	}


	buildSvg()
	{
		this.lines = [] ;
		this.circles = [] ;
		let path = {} ;

		for( let i = 0 ; i < this.builtData.length - 1 ; i++ )
		{
			const value = this.builtData[ i ] ;

			path = {
				cx: value.x,
				cy: value.y,
				x1: value.x,
				y1: value.y,
				x2: this.builtData[ i + 1 ].x,
				y2: this.builtData[ i + 1 ].y,
			} ;

			this.svgData.push( path ) ;
			
			// First line is the visible line, 
			// Second one is a thick line for the purpose high area the user can hover over to see the tooltip.

			this.lines.push([
				`<line x1="${path.x1}%" y1="${path.y1}%" x2="${path.x2}%" y2="${path.y2}%" style="stroke: ${this.options.stroke_color} ; stroke-width: ${this.options.stroke_width} ;" />`
			]) ;
			this.circles.push([
				`<circle cx="${path.cx}%" cy="${path.cy}%" r="${this.options.circle_radius}" fill="${this.options.circle_fill}"/>
				 <circle cx="${path.cx}%" cy="${path.cy}%" r="15px" fill="transparent" title="` + this.data[ i ] + `"/>`
			]) ;
		}

		this.circles.push([
			`<circle cx="${path.x2}%" cy="${path.y2}%" r="${this.options.circle_radius}" fill="${this.options.circle_fill}"/>
			 <circle cx="${path.cx}%" cy="${path.cy}%" r="15px" fill="transparent" title="` + this.data[ this.builtData.length - 1 ] + `"/>`
		]) ;

		this.svg = this.lines.concat( this.circles ) ;

	}


	build()
	{
		this.el.html(`
		<svg height="${this.options.height}" width="${this.options.width}" style="transform: scaleY(-1);">
			` + this.svg.join("") + `
		</svg>
		`) ;

		
		this.el.find("circle,line").tooltip() ;
	}



} ;

/* / Line Chart */


/* ---END--- line-chart.js */