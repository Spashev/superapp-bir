/*
|--------------------------------------------------------------------------
| Exon Global Plugins
|--------------------------------------------------------------------------
|
| Here is where all the plugins used in the template is initiated and configured.
|
*/



// Bootstrap Custom File Input
$(document).ready(function () {
	
	if( $(".custom-file").length )
	{
		bsCustomFileInput.init() ;
	}
	
}) ;
// / Bootstrap Custom File Input



// Bootstrap Tooltips
$(document).ready(function () {
	$('[data-toggle="tooltip"]').each(function()
	{
		const el = $(this) ;
		let options = {} ;

		if( el.data("position") )
		{
			options.placement = el.data("position") ;
		}

		if( el.data("type") )
		{
			options.template = `<div class="tooltip tooltip-${el.data("type")}" role="tooltip"><div class="arrow"></div><div class="tooltip-inner bg-${el.data("type")}"></div></div>` ;
		}

		el.tooltip( options ) ;
	}) ;

	const positions = [ "top", "bottom", "left", "right", ] ;

	for( let i = 0 ; i < positions.length ; i++ )
	{
		const pos = positions[ i ] ;

		if( $(`.tooltip-${pos}`).length )
		{
			$(`.tooltip-${pos}`).tooltip(
			{
				placement: pos,
			}) ;
		}
	}

}) ;
// / Bootstrap Tooltips



// Bootstrap Popovers
$(document).ready(function () {
	$('[data-toggle="popover"]').each(function()
	{
		const el = $(this) ;
		let options = {} ;

		if( el.data("type") )
		{
			options.template = `<div class="popover bg-${el.data("type")}" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>` ;
		}

		el.popover( options ) ;
	}) ;

}) ;
// / Bootstrap Popovers



// Bootstrap Toast
$(document).ready(function () {
	
	if( $(".toast").length )
	{
		$('.toast').toast() ;
	}

}) ;
// / Bootstrap Toast



// Animate CSS

/**
 * Helper function for handling animate.css animations.
 * 
 * @param {jQueryElement} el Jquery instace holding the to-be-animated element.
 * @param {String} animationName Name of Animate.css animation.
 * @param {Function} callback Callback set to be called after the animation ends.
 */
window.animateCSS = function(el, animationName, callback)
{
    el[0].classList.add('animated', animationName)

    function handleAnimationEnd() {
		
        this.classList.remove('animated', animationName)
        this.removeEventListener('animationend', handleAnimationEnd)

        if (typeof callback === 'function') callback( $(this) ) ;
    }

	el[0].addEventListener('animationend', handleAnimationEnd)
} ;
// / Animate CSS



// TinyMCE jQuery Custom Integration
jQuery.fn.extend({
	tinymce: function( options )
	{
		options.target = this[0] ;
		return tinymce.init( options ) ;
	},
});
// / TinyMCE jQuery Custom Integration



// Bootstrap Notify

window.exonNotify = function( title, message, options )
{
	const defaultOptions = {
		type: "primary",
		icon: "fas fa-exclamation",
		title: title,
		message: message,
		allow_dismiss: "on",
		mouse_over: "on",
		newest_on_top: false,
		progressbar: false,
		spacing: 10,
		'offset-x': 20,
		'offset-y': 20,
		delay: 10000,
		'z-index': 1031,
		position: "top-right",
	} ;

	const config = getConfig( options, defaultOptions ) ;

	$.notify({
		icon: config.icon,
		title: config.title,
		message: config.message,
		url: '',
		target: '_blank'
	},{
		type: config.type,
		allow_dismiss: config.allow_dismiss == "on",
		newest_on_top: config.newest_on_top == "on",
		placement: {
			from: config.position.split("-")[0],
			align: config.position.split("-")[1]
		},
		offset: {
			x: config['offset-x'],
			y: config['offset-y'],
		},
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutUp'
		},
		showProgressbar: config.progressbar == "on",
		spacing: config.spacing,
		z_index: config['z_index'],
		delay: config.delay,
		mouse_over: ["on", "pause"].indexOf( config.mouse_over ) !== false ? "pause" : null ,
		icon_type: 'class',
		
		template: '<div data-notify="container" class="col-xs-12 col-sm-8 alert alert-{0} animated fadeInDown" role="alert"> \n' +
			'	<div class="row no-gutters"> \n' +
			' \n' +
			'		<div class="col col-icon"> \n' +
			'			<span class="notification-icon"> \n' +
			'				<i data-notify="icon"></i> \n' +
			'			</span> \n' +
			'		</div> \n' +
			' \n' +
			'		<div class="col col-content"> \n' +
			'			<button type="button" aria-hidden="true" class="close" data-notify="dismiss"> \n' +
			'				<svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"></path></svg> \n' +
			'			</button> \n' +
			'			<h5 data-notify="title">{1}</h5> \n' +
			'			<p data-notify="message">{2}</p> \n' +
			'			<a href="{3}" target="{4}" data-notify="url"></a> \n' +
			'			<div class="progress squared" data-notify="progressbar"> \n' +
			'				<div class="progress-bar bg-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div> \n' +
			'			</div> \n' +
			'		</div> \n' +
			' \n' +
			'	</div> \n' +
			'		 \n' +
			'</div> \n',
	});
}

$(document).ready(() => {
	
	let el = $("notification") ;

	var optionNames = [
		"type",
		"icon",
		"title",
		"message",
		"allow_dismiss",
		"mouse_over",
		"newest_on_top",
		"progressbar",
		"spacing",
		"offset-x",
		"offset-y",
		"delay",
		"z-index",
		"position",
	] ;
	
	el.each( function(k, v )
	{
		const el = $(v) ;
		const titleEl = el.find("title"),
			  messageEl = el.find("message"),
			  iconEl = el.find("i") ;

		let config = {} ;

		if( titleEl.length > 0 )
		{
			config.title = titleEl.text() ;
		}

		if( messageEl.length > 0 )
		{
			config.message = messageEl.text() ;
		}

		if( iconEl.length > 0 )
		{
			config.icon = iconEl.attr("class") ;
		}

		const type = el.attr("type") ;

		if( typeof type !== "undefined" )
		{
			config.type = type ;
		}

		for( let i = 0 ; i < optionNames.length ; i++ )
		{
			const optionName = optionNames[ i ] ; 
			const override = el.data( optionName ) ;

			if( typeof override !== "undefined" )
			{
				config[ optionName ] = override ;
			}
		}

		exonNotify( "", "", config ) ;

		el.detach() ;

	}) ;


}) ;
// / Bootstrap Notify





/* Notification element examples : */

/*
<notification type="primary" data-icon="fas fa-exclamation" data-delay="1000">
	<i class="fa fa-check"></i>
	<title>Primary!</title>
	<message>An error ocurred while trying to save this form, please try again later.</message>
</notification>
<notification type="primary">
	<i class="fa fa-check"></i>
	<title>Primary!</title>
	<message>An error ocurred while trying to save this form, please try again later.</message>
</notification>

<notification type="secondary">
	<i class="fa fa-exclamation"></i>
	<title>Secondary!</title>
	<message>An error ocurred while trying to save this form, please try again later.</message>
</notification>

<notification type="success">
	<i class="fa fa-check"></i>
	<title>Success!</title>
	<message>An error ocurred while trying to save this form, please try again later.</message>
</notification>

<notification type="warning">
	<i class="fa fa-ban"></i>
	<title>Warning!</title>
	<message>An error ocurred while trying to save this form, please try again later.</message>
</notification>

<notification type="danger">
	<i class="fa fa-times"></i>
	<title>Danger!</title>
	<message>An error ocurred while trying to save this form, please try again later.</message>
</notification>

<notification type="light">
	<i class="fa fa-sun"></i>
	<title>Light!</title>
	<message>An error ocurred while trying to save this form, please try again later.</message>
</notification>

<notification type="dark">
	<i class="fa fa-moon"></i>
	<title>Dark!</title>
	<message>An error ocurred while trying to save this form, please try again later.</message>
</notification>
*/



// Switchery
$(document).ready(function () {

	$(".switchery").each( function()
	{
		new Switchery( this, {
			color: '#64bd63',
			secondaryColor: '#dfdfdf',
			className: $(this).attr("class"),
			jackColor: '#fff',
			speed: '0.5s',
		} ) ;
	}) ;

		
	$(".switchery-small").each( function()
	{
		new Switchery( this, {
			color: '#64bd63',
			secondaryColor: '#dfdfdf',
			jackColor: '#fff',
			size: 'small'
		} ) ;
	}) ;

		
	$(".switchery-large").each( function()
	{
		new Switchery( this, {
			color: '#64bd63',
			secondaryColor: '#dfdfdf',
			jackColor: '#fff',
			size: 'large'
		} ) ;
	}) ;
}) ;

// Switchery Color Variations
$(document).ready(function () {
	
	$(".switchery-primary").each( function()
	{
		new Switchery( this, {
			color: '#5780f7',
			secondaryColor: '#dfdfdf',
			className: $(this).attr("class") + " switchery",
			jackColor: '#fff',
			speed: '0.5s',
		} ) ;
	}) ;

		
	$(".switchery-secondary").each( function()
	{
		new Switchery( this, {
			color: '#efefef',
			secondaryColor: '#dfdfdf',
			className: $(this).attr("class") + " switchery",
			jackColor: '#fff',
			speed: '0.5s',
		} ) ;
	}) ;

		
	$(".switchery-success").each( function()
	{
		new Switchery( this, {
			color: '#06c48c',
			secondaryColor: '#dfdfdf',
			className: $(this).attr("class") + " switchery",
			jackColor: '#fff',
			speed: '0.5s',
		} ) ;
	}) ;

		
	$(".switchery-danger").each( function()
	{
		new Switchery( this, {
			color: '#ed3472',
			secondaryColor: '#dfdfdf',
			className: $(this).attr("class") + " switchery",
			jackColor: '#fff',
			speed: '0.5s',
		} ) ;
	}) ;

		
	$(".switchery-warning").each( function()
	{
		new Switchery( this, {
			color: '#fab72b',
			secondaryColor: '#dfdfdf',
			className: $(this).attr("class") + " switchery",
			jackColor: '#fff',
			speed: '0.5s',
		} ) ;
	}) ;

		
	$(".switchery-info").each( function()
	{
		new Switchery( this, {
			color: '#4cacff',
			secondaryColor: '#dfdfdf',
			className: $(this).attr("class") + " switchery",
			jackColor: '#fff',
			speed: '0.5s',
		} ) ;
	}) ;

		
	$(".switchery-light").each( function()
	{
		new Switchery( this, {
			color: '#fafafa',
			secondaryColor: '#dfdfdf',
			className: $(this).attr("class") + " switchery",
			jackColor: '#fff',
			speed: '0.5s',
		} ) ;
	}) ;

		
	$(".switchery-dark").each( function()
	{
		new Switchery( this, {
			color: '#393b51',
			secondaryColor: '#dfdfdf',
			className: $(this).attr("class") + " switchery",
			jackColor: '#fff',
			speed: '0.5s',
		} ) ;
	}) ;
}) ;

// / Switchery



// Input Spinners
$(document).ready(function () {
	
	if( $("input.input-spinner").length )
	{
		$("input.input-spinner").inputSpinner() ;
	}

}) ;
// / Input Spinners



// Custom Selectors
$(document).ready(function () {

	if( $("[data-toggle='selector']").length )
	{
		$("[data-toggle='selector']").selector() ;
	}

}) ;
// / Custom Selectors



// jQuery CounterUp
$(document).ready(function($)
{
	if( $('.counter').length )
	{
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	}
});
// / jQuery CounterUp



// Bootstrap Colorpicker Sliders

// Vertical
$(document).ready(function () {

	if( $(".colorpicker-sliders").length )
	{
	
		var resultElement = document.querySelector('.colorpicker-sliders .result');
		var sliders = document.querySelectorAll('.colorpicker-sliders .red,.colorpicker-sliders .blue,.colorpicker-sliders .green');
		var colors = [0, 0, 0];

		[].slice.call(sliders).forEach(function (slider, index) {

			noUiSlider.create(slider, {
				start: 127,
				connect: [true, false],
				orientation: "vertical",
				range: {
					'min': 0,
					'max': 255
				},
			});

			// Bind the color changing function to the update event.
			slider.noUiSlider.on('update', function () {

				colors[index] = slider.noUiSlider.get();

				var color = 'rgb(' + colors.join(',') + ')';

				resultElement.style.background = color;
				resultElement.style.color = color;
			});
		});

	}

}) ;

// Horizontal
$(document).ready(function () {

	if( $(".colorpicker-sliders-hor").length )
	{

		var resultElement = document.querySelector('.colorpicker-sliders-hor .result');
		var sliders = document.querySelectorAll('.colorpicker-sliders-hor .red,.colorpicker-sliders-hor .blue,.colorpicker-sliders-hor .green');
		var colors = [0, 0, 0];

		[].slice.call(sliders).forEach(function (slider, index) {

			noUiSlider.create(slider, {
				start: 127,
				connect: [true, false],
				range: {
					'min': 0,
					'max': 255
				},
			});

			// Bind the color changing function to the update event.
			slider.noUiSlider.on('update', function () {

				colors[index] = slider.noUiSlider.get();

				var color = 'rgb(' + colors.join(',') + ')';

				resultElement.style.background = color;
				resultElement.style.color = color;
			});
		});

	}

}) ;

// / Bootstrap Colorpicker Sliders
