jQuery(document).ready(function () {
     
     $("#namber").mask("+380 (99) 999-99-99"); 
    
   
    jQuery('.button-form').click( function() {
    	var form = jQuery(this).closest('form');
    	
    	if ( form.valid() ) {
    		// form.css('opacity','.5');
    		var actUrl = form.attr('action');

    		jQuery.ajax({
    			url: actUrl,
    			type: 'post',
    			dataType: 'html',
    			data: form.serialize(),
    			success: function(data) {
    				form.html(data);
    				// form.css('opacity','1');
                    form.find('.status').html('Ви залишили заявку, протягом 30 хвилин менеджер зателефонує вам!');
                    //$('#myModal').modal('show') // для бутстрапа
    			},
    			error:	 function() {
    			     form.find('.status').html('Виникла помилка, зверніться до менеджера за допомогою!');
    			}
    		});
    	}
    });
});