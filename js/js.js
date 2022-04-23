$(document).ready(function() {
	 
	  $('.inv').editable('ajax_inv.php', { 
		 type     : 'number',
	 });
	   $('.folio').editable('ajax_up_folio.php', { 
		 type     : 'folio',
	 });
	 $('.inv2').editable('ajax_inv2.php', { 
		 type     : 'number',
	 });  
	  $('.letras').editable('ajax_up_otro.php', { 
		 type     : 'letras',
	 }); 	 
	   $('.pago').editable('ajax_pago_anual.php', { 
		 type     : 'number',
	 });
	    $('.pagom').editable('ajax_pago_mensual.php', { 
		 type     : 'number',
	 });
 });