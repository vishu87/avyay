
   	/*------------- Top Fixed Menu  ------------------*/

    // jQuery(window).scroll(function(){
    //   	if(jQuery(window).scrollTop() > 200) {
    //     	jQuery('header').css({
    //     		"position":"fixed",
    //     		"top":"0",
	   //          "background":"#fff",
    //     	});
    //     	jQuery('.header-menu ul li a').css({
    //     		"padding":"16px 0"
    //     	});
    //     	jQuery('.header-menu ul li a').css({
    //     		"padding":"16px 0"
    //     	});
    //   	} else {	
	   //      jQuery('header').css({
	   //      	"position":"initial",
	   //          "background":"none"
	   //      });
    //   	}
    // });
    
jQuery(document).ready(function(){

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

});