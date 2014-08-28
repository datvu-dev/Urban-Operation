jQuery(document).ready(function() {
	/* Sticky menu on the top */
	var nav = jQuery('#header');
    
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 130) {
            nav.addClass("mainnav-wrap-scroll");
        } else {
            nav.removeClass("mainnav-wrap-scroll");
        }
    });
  
	/* Duplicate the navigation menu and move to bottom */
	jQuery('ul#nav').clone().appendTo('.footbot .floatright');
	//jQuery('.footbot .floatright ul#nav').append("<li class='menu-item menu-item-type-post_type menu-item-object-page'><a href='/privacy-policy'>Privacy Policy</a></li>");

	/* Insert placeholder to contact dropdown list */
	jQuery('#contact-dropdown').attr('placeholder','Direct enquiry to ---');

	/* Move all the Check-list content to inside the toggle content */
	jQuery('.toggle-content-outside ul.check').each(function() {		
		jQuery(this).parent().prev().find('.simnor-shortcode-toggle').find('.simnor-shortcode-toggle-content').append(jQuery(this));		
	});

	/* Change the Symbol on the heading of toggle box */
	jQuery('h3.simnor-shortcode-toggle-heading').on('click', function() {
		if (jQuery(this).parent().hasClass('simnor-shortcode-toggle-active')) {
			jQuery(this).find('.fa-icon-plus-sign').removeClass('fa-icon-plus-sign').addClass('fa-icon-minus-sign');			
		}
		else {
			jQuery(this).find('.fa-icon-minus-sign').removeClass('fa-icon-minus-sign').addClass('fa-icon-plus-sign');						
		}		
	});
	
	/* Assign smooth scrolling to anchor */
	var headerHeight = jQuery('#header').outerHeight();

	jQuery('a[href*=#]:not([href=#])').on('click',function() {
		//alert(headerHeight);
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
	    if (jQuery(window).width() > 767) {
	        jQuery('html,body').animate({
	          scrollTop: target.offset().top - headerHeight*2
	        }, 1000);
	        return false;
	    }
	    else {
	    	jQuery('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	    }
      }
    }
  	});

  /* Adjust height of oversized title */  
  adjustTitleHeight();

	/* Showo and Hide the enquiry form */
	jQuery('.pallet-enquiry-button a').on('click', function() {			
		var productTitle = jQuery(this).parent().prev('h2').text();  		
		jQuery('#enquiry-container').show();
		jQuery('#enquiry-container form input.enquiry-subject').val(productTitle);

	});
	jQuery('.pallet-enquiry-button-service a').on('click', function() {		
		var serviceTitle = jQuery(this).parent().parent().find('h1').css('text-transform','none').text();			
		jQuery('#enquiry-container').show();
		jQuery('#enquiry-container form input.enquiry-subject').val(serviceTitle);

	});
	jQuery('.recycling-enquiry-button-service a').on('click', function() {		
		var serviceTitle = 'Timber Waste Recycling Enquiry';			
		jQuery('#enquiry-container').show();
		jQuery('#enquiry-container form input.enquiry-subject').val(serviceTitle);

	});
	jQuery('.mulch-enquiry-button a').on('click', function() {		
		var productTitle = jQuery(this).parent().prev('h2').text();			
		jQuery('#enquiry-container').show();
		jQuery('#enquiry-container form input.enquiry-subject').val(productTitle);

	});
	jQuery('#close-form').on('click', function() {
		jQuery('#enquiry-container form').trigger('reset');	
		jQuery('#enquiry-container div.wpcf7-validation-errors').hide();
		jQuery('div.wpcf7-mail-sent-ok').hide();
		jQuery("#enquiry-container form input, #enquiry-container form textarea").css('cssText','1px solid #9c9c9b !important');
		jQuery('#enquiry-container').hide();
		jQuery('#enquiry-container form input.enquiry-subject').val('');
	});
});

jQuery(window).resize(function() {
    adjustTitleHeight();
});

function adjustTitleHeight() {
    jQuery('.custom-iconbox h4').each(function() {
      jQuery(this).removeClass('oversized');
      if (jQuery(this).height() > 48) {
        jQuery(this).addClass('oversized');
      }      
    });
  
}
