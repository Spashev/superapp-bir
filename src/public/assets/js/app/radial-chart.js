/*
|--------------------------------------------------------------------------
| Exon Custom Donut Progress
|--------------------------------------------------------------------------
*/


window.setRadialProgreeBarValue = function( elements )
{
	elements.each( function() 
	{
		const el = $(this) ;

		var path = el.find('svg path:last-child') ;

		let pathLength = path[0].getTotalLength() ;

		let value = parseFloat( el.attr('data-value') ) ;

		value = isNaN( value ) || value > 100 || value < 0 ? 0 : value ;

		let precentage = pathLength * ( (100 - value ) / 100 ) ;

		path[0].getBoundingClientRect() ;
		
		path.css({
			strokeDashoffset: precentage
		}) ;
	}) ;
} ;