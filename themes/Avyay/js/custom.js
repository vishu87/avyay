
    
jQuery(document).ready(function(){

   	/*------------- Top Fixed Menu  ------------------*/

    jQuery(window).scroll(function(){
      	if(jQuery(window).scrollTop() > 100) {
        	jQuery('header').css({
        		"position":"fixed",
        		"top":"0",
	            "background":"#fff"
        	});
        	jQuery('.header-menu ul li a').css({
        		"padding":"16px 0"
        	});
            jQuery('header .logo').css({
                "padding":"16px 0"
            });
            jQuery('header .search').css({
                "padding":"16px 0"
            });
      	} else {	
	        jQuery('header').css({
	        	"position":"absolute",
                "top":"10px",
	            "background":"none"
	        });
            jQuery('.header-menu ul li a').css({
                "padding":"35px 0"
            });
            jQuery('header .logo').css({
                "padding":"30px 0"
            });
            jQuery('header .search').css({
                "padding":"35px 0"
            });
      	}
    });

    /* Search Form */

    jQuery("header #search-icon").click(function(){
        jQuery(".search-div .form-div input#s").focus();
        jQuery(".search-div").fadeToggle();
    });

	/* Home Slider */
	jQuery(".home-slider").owlCarousel({
        items : 1,
        singleItem : true,
        loop:true,
        autoPlay:true,
        navigation:true,
        navigationText: ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"]
    });

    jQuery(".home-clients").owlCarousel({
        items : 5,
        // singleItem : true,
        loop:true,
        autoPlay:true,
        navigation:true,
        navigationText: ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"]
    });

    jQuery(".check-form").validate();
    jQuery(".searchform").validate();
    
});

