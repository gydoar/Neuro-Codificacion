$(function() { 
	var emailreg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;	
	$(".boton").click(function(){  
		$(".error").fadeOut().remove();
		
        if ($(".nombre").val() == "") {  
			$(".nombre").focus().after('<span class="error">Ingrese su nombre</span>');  
			return false;  
		}  
		
		if ($(".apellido").val() == "") {  
			$(".apellido").focus().after('<span class="error">Ingrese su apellido</span>');  
			return false;  
		} 
		
        if ($(".email").val() == "" || !emailreg.test($(".email").val())) {
			$(".email").focus().after('<span class="error">Ingrese un email correcto</span>');  
			return false;  
		}  
		
        if ($(".telefono").val() == "") {  
			$(".telefono").focus().after('<span class="error">Ingrese un teléfono</span>');  
			return false;  
		}  
		
        if ($(".ciudad").val() == "") {  
			$(".ciudad").focus().after('<span class="error">Ingrese una ciudad</span>');   
			return false;  
		}  
		
    });  
    
	$(".nombre, .apellido, .telefono, .ciudad").bind('blur keyup', function(){  
        if ($(this).val() != "") {  			
			$('.error').fadeOut();
			return false;  
		}  
	});	
	
	$(".email").bind('blur keyup', function(){  
        if ($(".email").val() != "" && emailreg.test($(".email").val())) {	
			$('.error').fadeOut();  
			return false;  
		}  
	});

	$(".boton1").click(function(){  
		$(".error1").fadeOut().remove();
		
        if ($(".nombre1").val() == "") {  
			$(".nombre1").focus().after('<span class="error">Ingrese su nombre</span>');  
			return false;  
		}  
		
		if ($(".apellido1").val() == "") {  
			$(".apellido1").focus().after('<span class="error">Ingrese su apellido</span>');  
			return false;  
		} 
		
        if ($(".email1").val() == "" || !emailreg.test($(".email1").val())) {
			$(".email1").focus().after('<span class="error">Ingrese un email correcto</span>');  
			return false;  
		}  
		
        if ($(".telefono1").val() == "") {  
			$(".telefono1").focus().after('<span class="error">Ingrese un teléfono</span>');  
			return false;  
		}  
		
        if ($(".ciudad1").val() == "") {  
			$(".ciudad1").focus().after('<span class="error">Ingrese una ciudad</span>');   
			return false;  
		}  
		
    });
    $(".nombre1, .apellido1, .telefono1, .ciudad1").bind('blur keyup', function(){  
        if ($(this).val() != "") {  			
			$('.error1').fadeOut();
			return false;  
		}  
	});	
	
	$(".email1").bind('blur keyup', function(){  
        if ($(".email1").val() != "" && emailreg.test($(".email1").val())) {	
			$('.error1').fadeOut();  
			return false;  
		}  
	});

});