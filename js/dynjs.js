jQuery(document).ready(function(){
	jQuery("button.btnSend").click(function(){
	
	var form = jQuery(this).closest('form');
	
	jQuery.ajax({type:'POST', url: 'http://www.urban.middlemen.com.au/wp-content/themes/brazil-wp/inc/contactus/contact2.php', data:jQuery(form).serialize(), success: function(response) {
		 
		 if(parseInt(response)>0)
		   {
			 if(jQuery(form).find("#spanMessage").length)
			 jQuery(form).find("#spanMessage").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Well done!</strong> Your message has been sent.</div>');
			 else
			 alert('Your message has been sent.');
		   }
		   else{
			 if(jQuery(form).find("#spanMessage").length)
			 jQuery(form).find("#spanMessage").html('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Error! </strong> Something Wrong</div>');
			 else
			 alert('Something wrong!');
		   }   
			 
	}});
	});
	});
