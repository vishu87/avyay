
    
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
    jQuery("header #search-icon a").click(function(){
      var btn = jQuery(this);
      var dataVal = btn.attr('data-value');
  
      if(dataVal == 1){
        btn.attr('data-value',2);
        btn.html("<i class='fa fa-search'></i>");
      } else {
        btn.attr('data-value',1);
        btn.html("<i class='fa fa-close'></i>");
      }

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


    jQuery("#option_select").on("change",function(){
      var option_value = jQuery(this).val();
      console.log(option_value);
      window.location.href = "?val="+option_value+"#option_div";

      jQuery("#option_select").find("option[value=" + option_value +"]").attr('selected', true);
    });
    
});

