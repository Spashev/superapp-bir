//
// |--------------------------------------------------------------------------
// | Exon Datetimepicker
// |--------------------------------------------------------------------------
//



$(".input-datepicker").datepicker({
	autoclose: true,
	templates: {
		leftArrow: '<i class="fas fa-angle-left"></i>',
		rightArrow: '<i class="fas fa-angle-right"></i>'
	},
	format: "yyyy-mm-dd"
}) ;

$(".input-timepicker").clockpicker() ;
$(".clockpicker").clockpicker() ;

		
$(".date-timepicker .input-datepicker").on("change", function(e)
{
	$(this).closest(".date-timepicker").find(".input-timepicker").focus() ;
}) ;


$(".input-datetimepicker").each(function(e)
{
	const value = $(this).val() ;

	let date = "",
		time = "" ;

	if( value.split(" ").length > 1 )
	{
		date = value.split(" ")[0] ;
		time = value.split(" ")[1] ;
	}

	const position = $(this).data("placement") || "bottom" ;
	const align = $(this).data("align") || "left" ;

	$(this).parent().append(`
		<input type="text" class="form-control input-datetimepicker-date" value="${date}">
		<input type="text" class="form-control input-datetimepicker-time" data-placement="${position}" data-align="${align}" data-autoclose="true" value="${time}">
	`) ;

	const hiddenDatepicker = $(this).parent().find(".input-datetimepicker-date") ;
	const hiddenTimepicker = $(this).parent().find(".input-datetimepicker-time") ;

	hiddenDatepicker.datepicker({
		autoclose: true,
		templates: {
			leftArrow: '<i class="fas fa-angle-left"></i>',
			rightArrow: '<i class="fas fa-angle-right"></i>'
		},
		format: hiddenDatepicker.data("format") || "yyyy-mm-dd",
	});

	hiddenTimepicker.clockpicker();
}) ;

$(".input-datetimepicker").each( function(e)
{
	const el = $(this) ;
	const hiddenDatepicker = el.parent().find(".input-datetimepicker-date") ;
	const hiddenTimepicker = el.parent().find(".input-datetimepicker-time") ;
		
	hiddenDatepicker
		.on("change", function()
		{
			el.val( hiddenDatepicker.val() + " " + hiddenTimepicker.val() ) ;
			hiddenTimepicker
				.clockpicker("show") ;
		}) ;
		
	hiddenTimepicker
		.on("change", function()
		{
			el.val( hiddenDatepicker.val() + " " + hiddenTimepicker.val() ) ;
		}) ;

	el.on("focus", function(e)
	{
		hiddenDatepicker
			.datepicker("show") ;
	}) ;

	el.on("change", function(e)
	{
		const value = $(this).val() ;

		let date = "",
			time = "" ;

		if( value.split(" ").length > 1 )
		{
			date = value.split(" ")[0] ;
			time = value.split(" ")[1] ;
		
			hiddenTimepicker.val( time ) ;
			hiddenDatepicker.val( date ).datepicker("setDate", date) ;
		}
	}) ;
}) ;