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
});