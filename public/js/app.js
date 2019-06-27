$(document).ready(function(){

	

	function showForm () {

		$('.form-toggle').click(function(){
			$('.form-inner').removeClass('is-disable').addClass('is-active');
		});
		$('.close-support').click(function(){
			$('.form-inner').removeClass('is-active').addClass('is-disable');
		});

	}

	showForm();



	function slider (velocidad) {

		var numImg = $('.slider-width img').length;

		$('.slider-width').slick({
			// dots: true,
	  	fade: true,
			autoplay: true,
			autoplaySpeed: 4000,
			infinite: true,
	  	speed: 500,
			cssEase: 'linear',
		});
	}

	slider(500);

	function menuMobile () {

		var x = 1;

		$('.fa-bars').click(function(){

			if(x == 1){
				$('ul').fadeIn();
				x = 2;

			}else{
				$('ul').fadeOut();
				x = 1;
			}

		});
	}

	menuMobile();



});

	function validateForm () {

		var nombre = $('#nombre');
		var email = $('#email');
		var asunto = $('#asunto');
		var mensaje = $('#mensaje');
		var reString = /[a-zA-Z]/;
		var re = /\w+@\w+\.+[a-z]/; // \w = cualquier numero, letra o guion bajo, primero cualquier texto o un numero, luego debe haber un arroba, luego quiero que haya letras o numeros, luego un punto y luego cualquier letra de la a a la z
		var error = 0;
		const Toast = Swal.mixin({
		  toast: true,
		  position: 'bottom-start',
			grow: 'column',
		  showConfirmButton: false,
		  timer: 3000
		});



	      if(!nombre.val() || !isNaN(nombre.val())){
	        $(nombre).css({ 'border-color': '#ffdada', 'box-shadow': '0 0 0 3px rgba(254, 3, 44, 0.25)'}).focus();
					Toast.fire({
					  type: 'error',
					  title: 'El nombre es obligatorio y solo debe contener letras',
					})
					error++;
	      }else{
					$(nombre).css({ 'border-color': '#f5f5f5', 'box-shadow': '0 0 0 3px rgba(90,68,255,.25)'}).focus();

				}

				if(!email.val() || !re.test(email.val())){
	        $(email).css({ 'border-color': '#ffdada', 'box-shadow': '0 0 0 3px rgba(254, 3, 44, 0.25)'}).focus();
					Toast.fire({
					  type: 'error',
					  title: 'El email es obligatorio y debe ser válido'
					})
					error++;
	      }else{
					$(email).css({ 'border-color': '#f5f5f5', 'box-shadow': '0 0 0 3px rgba(90,68,255,.25)'}).focus();

				}

				if(!asunto.val() || !isNaN(asunto.val())){
	        $(asunto).css({ 'border-color': '#ffdada', 'box-shadow': '0 0 0 3px rgba(254, 3, 44, 0.25)'}).focus();
					Toast.fire({
					  type: 'error',
					  title: 'El asunto es obligatorio',
					})
					error++;
	      }else{
					$(asunto).css({ 'border-color': '#f5f5f5', 'box-shadow': '0 0 0 3px rgba(90,68,255,.25)'}).focus();

				}

				if(!mensaje.val() || !isNaN(mensaje.val())||mensaje.val().length>150){
	        $(mensaje).css({ 'border-color': '#ffdada', 'box-shadow': '0 0 0 3px rgba(254, 3, 44, 0.25)'}).focus();
					Toast.fire({
					  type: 'error',
					  title: 'El mensaje es obligatorio',
					})
					error++;
	      }else{
					$(mensaje).css({ 'border-color': '#f5f5f5', 'box-shadow': '0 0 0 3px rgba(90,68,255,.25)'}).focus();

				}

			if(error > 0 ){return false;}
			else if (error == 0){

			var c = 0;

			if(c == 0){
				document.getElementById('boxita').style.display = "block";
				c = 1;
			}else{
				document.getElementById('boxita').style.display = "none";
				c = 0;
			}

			return true;
		}


	}
