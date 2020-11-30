function checkCampos(obj) {
    var camposRellenados = true;
    obj.find("input").each(function() {
    var $this = $(this);
        if( $this.val().length <= 0 ) {
            camposRellenados = false;
            return false;
        }
    });
    if(camposRellenados == false) {
        return false;
    }
    else {
        return true;
    }
}
$.noConflict();

jQuery(document).ready(function($) {
	

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	});

	jQuery('.selectpicker').selectpicker;


	

	$('.search-trigger').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});

	$('.search-close').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});

	$('.equal-height').matchHeight({
		property: 'max-height'
	});

	// var chartsheight = $('.flotRealtime2').height();
	// $('.traffic-chart').css('height', chartsheight-122);


	// Counter Number
	$('.count').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 3000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});


	 
	 
	// Menu Trigger
	$('#menuToggle').on('click', function(event) {
		var windowWidth = $(window).width();   		 
		if (windowWidth<1010) { 
			$('body').removeClass('open'); 
			if (windowWidth<760){ 
				$('#left-panel').slideToggle(); 
			} else {
				$('#left-panel').toggleClass('open-menu');  
			} 
		} else {
			$('body').toggleClass('open');
			$('#left-panel').removeClass('open-menu');  
		} 
			 
	}); 

	 
	$(".menu-item-has-children.dropdown").each(function() {
		$(this).on('click', function() {
			var $temp_text = $(this).children('.dropdown-toggle').html();
			$(this).children('.sub-menu').prepend('<li class="subtitle">' + $temp_text + '</li>'); 
		});
	});
	$(".FormA").submit(function(e){
		e.preventDefault();
		var form=$(this);
	
		var accion=form.attr('action');
		var metodo=form.attr('method');
		var respuesta=form.children('.RespuestaAjax');
		var formdata = new FormData(this);
	
		$.ajax({
			type: metodo,
			url: accion,
			data: formdata ? formdata : form.serialize(),
			cache: false,
			contentType: false,
			processData: false,
			
			success: function (data) {
			
				console.log(data);
				respuesta.html(data);
			},
			error: function(msjError) {
				
				console.log(msjError);
				respuesta.html(msjError);
			}
		});
		return false;
	
	
	});

	$(".FormLogin").submit(function(e){
		e.preventDefault();
		var form=$(this);
	
		var accion=form.attr('action');
		var metodo=form.attr('method');
		var respuesta=form.children('.RespuestaAjax');
		var formdata = new FormData(this);
		var val = checkCampos(form);
		console.log(form);
		if(val){
		$.ajax({
			type: metodo,
			url: accion,
			data: formdata ? formdata : form.serialize(),
			cache: false,
			contentType: false,
			processData: false,
			
			success: function (data) {
			
				console.log(data);
				respuesta.html(data);
			},
			error: function(msjError) {
				
				console.log(msjError);
				respuesta.html(msjError);
			}
		});
		return false;
	}else{
		console.log('vacio');
        e.preventDefault();

		}
	
	});

	
	// Load Resize 
	$(window).on("load resize", function(event) { 
		var windowWidth = $(window).width();  		 
		if (windowWidth<1010) {
			$('body').addClass('small-device'); 
		} else {
			$('body').removeClass('small-device');  
		} 
		
	});
  
 
});