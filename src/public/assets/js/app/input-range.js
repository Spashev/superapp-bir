/*
|--------------------------------------------------------------------------
| Range Input
|--------------------------------------------------------------------------
|
| Configuring range input to have a text field by it to show the actual value
| set by the field. It is also changable so user can type in the number and
| the range indicator will be set to it.
|
*/

const el = $('.custom-range') ;
	

/**
 * Listen for change in helper input and respond to it.
 * 
 * @param input Input element.
 * @param el Slider element.
 */
window.listenForChangeInHelperInput = function( input, el )
{
	let lastValue = parseInt( input.val() ) ;

	input.on("input", function(e)
	{
		e.stopPropagation() ;
		let originalValue = input.val(),
			val = originalValue ;
		const max = el.attr("max") ;
		const min = el.attr("min") ;
		
		val = parseInt( originalValue ) ;

		if( isNaN( val ) )
		{
			val = 0 ;
		}
		else if( val > max )
		{
			val = max ;
		}
		else if( val < min )
		{
			val = min ;
		}
		
		if( val !== lastValue )
		{
			el.val( val ) ;
			input.parent().trigger("input") ;
		}

		lastValue = val ;

	}) ;
} ;

el.each( function()
{
	const el = $(this) ;
	const counterEl = el.parent().find(".range-value>input") ;

	el.on("input", function(e)
	{
		counterEl.val( $(this).val() ) ;
	}) ;
	listenForChangeInHelperInput( counterEl, el ) ;

}) ;

/* / Range Input */



/* ---END--- input-range.js */
