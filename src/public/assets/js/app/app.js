//
// |--------------------------------------------------------------------------
// | Exon App Global Configuration
// |--------------------------------------------------------------------------
//



/* Toggle Class Functions */
$(document).ready(function()
{
	$("[data-toggle='class']").on("click", function(e)
	{
		e.preventDefault() ;
	
		let target = $(this).data("target") || $(this).attr("href") ;
	
		if( ! target || target == "self" )
		{
			target = $(this) ;
		}
		else if( target == "parent" )
		{
			target = $(this).parent() ;
		}
		else 
		{
			target = $( $(this).data("target") || $(this).attr("href") ) ;
		}
	
		target.toggleClass( $(this).data("class") ) ;
		target.trigger("toggled.class", [ $(this).data("class") ] ) ;
	}) ;
}) ;
/* / Toggle Class Functions */



/* Table Checkbox All */
$(document).ready(function()
{
	$(".table-checkbox-all").on("change", function(e)
	{
		const checkboxesInTableBody = $(this).closest("table").find("td .custom-checkbox") ;
	
		if( $(this).is(":checked") )
		{
			checkboxesInTableBody.checkboxes('check') ;
		}
		else
		{
			checkboxesInTableBody.checkboxes('uncheck') ;
		}
		checkboxesInTableBody.find('input').trigger("change") ;
	}) ;
	
	$(".table-checklist-toggler>tbody>tr").on("click", function(e)
	{
		e.preventDefault() ;
	
		const target = $(this).find("input[type='checkbox']") ;
	
		if( target.is(":checked") )
		{
			target.prop("checked", false) ;
		}
		else
		{
			target.prop("checked", true) ;
		}
	
		target.trigger("change") ;
		
	}) ;
	
	$(".table-checklist-toggler>tbody>tr input[type='checkbox']").on("change", function(e)
	{
		
		if( $(this).is(":checked") )
		{
			$(this).closest("tr").addClass("row-selected") ;
		}
		else
		{
			$(this).closest("tr").removeClass("row-selected") ;
		}
	}) ;
	
	$("[data-toggle='checkbox']").on("click", function(e)
	{
		if( ! $(this).is("input") )
		{
			e.preventDefault() ;
		}
	
		const targets = $( $(this).data("target") ) ;
		let value = $(this).data("value") ;
	
	
		if( value == "toggle" )
		{
			targets.checkboxes('toggle') ;
		}
		else
		{
			value = typeof( value ) === "undefined" ? $(this).is(":checked") : value ;
			targets.find("input").prop("checked", value) ;
		}
		targets.find('input').trigger("change") ;
	}) ;
}) ;
/* / Table Checkbox All */



/* Accordion Effect On Tables */
$(document).ready(function()
{
	$('.table-accordion .accordian-body').on('show.bs.collapse', function (e)
	{
		$(this).closest("table")
			.find(".collapse.show")
			.not(this)
			.collapse('toggle') ;
	}) ;
}) ;
/* / Accordion Effect On Tables */



/* Smooth Link */
$(document).ready(function()
{
	$(".smooth-link").on("click", function(e)
	{
		const target = $( $(this).attr("href") ) ;
	
		$("html, body").animate({
			scrollTop: target.offset().top,
		}, 500) ;
	}) ;
}) ;
/* / Smooth Link */



/* Password Toggle */
$(document).ready(function()
{
	$(".input-group-password-toggle .btn-password-toggle").on("click", function(e)
	{
		var inputGroup = $(this).closest(".input-group-password-toggle") ;
	
		if( $(this).hasClass("seeing") )
		{
			inputGroup.find("input").attr("type", "password") ;
			$(this).removeClass("seeing") ;
		}
		else 
		{
			inputGroup.find("input").attr("type", "text") ;
			$(this).addClass("seeing") ;
		}
	}) ;
}) ;
/* / Password Toggle */



/* Material Design Fields */
$(document).ready(function()
{
	$(".form-group-material .form-control").on("blur", function(e)
	{
		var group = $(this).closest(".form-group-material") ;
	
		if( $(this).val().length > 0 )
		{
			group.addClass("filled") ;
		}
		else if( group.hasClass("filled") )
		{
			group.removeClass("filled") ;
		}
	}).trigger("blur") ;
}) ;
/* / Material Design Fields */



