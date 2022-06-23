jQuery(document).ready(function(){
    // Header jquery
   	jQuery('.grecaptcha-badge').hide();
    jQuery('.sub-menu').addClass('submenu metismenu');
    jQuery("a.btn").on("click", function(){
        var hrf =jQuery(this).attr("href");
        if (jQuery("header").hasClass("stickyHeader")){
            jQuery('html, body').animate({
                scrollTop: jQuery(hrf).offset().top - HeaderHeight
            }, 1000);
        }
        else{
            jQuery('html, body').animate({
                scrollTop: jQuery(hrf).offset().top - THeight
            }, 1000);
        }
        return false;
    });
    var HeaderHeight = jQuery("header").innerHeight();
    var scrollHeight = HeaderHeight + 100;
  
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() >= scrollHeight){
            jQuery("header").addClass('stickyHeader');
        }
        else{
            jQuery("header").removeClass('stickyHeader');
        }
    });
    jQuery(document).on("click", "span.triggerBtn", function(){
        var setHeight = jQuery(this).siblings("a.has-arrow").innerHeight();
        jQuery(this).height(setHeight);
    });
    

    //toggle nav menu

    jQuery(".navbar_expand_toggle, .close_nav").on("click", function(){
        jQuery(".app-container").toggleClass("active_navbar");
        jQuery('body').toggleClass('body_toogle_menu');
        return false;
    });

    jQuery('body').click(function(e){
        var menu_contain = jQuery(".side-menu");
        // if the target of the click isn't the container nor a descendant of the container
        if (!menu_contain.is(e.target) && menu_contain.has(e.target).length === 0)
        {
            jQuery('body').removeClass("body_toogle_menu");
            jQuery('.app-container').removeClass("active_navbar");
        }
    });
    
    if (jQuery(window).width() < 576){
        jQuery(window).scroll(function(){
            if(jQuery(this).scrollTop() > 100){
                jQuery("#social_icon_section").fadeIn();    
            }else{
                jQuery("#social_icon_section").fadeOut();
            }
        });
    }
    jQuery(window).scroll(function(){
        if(jQuery(this).width() > 575){
            if(jQuery(this).scrollTop() > 100){
              jQuery(".whatsapp_icon").fadeIn();    
            }else{
                jQuery(".whatsapp_icon").fadeOut();
            }
        }
    });

    jQuery('.scroll_btna').click(function() {
        var hrf = $(this).attr("href");
        $('html, body').animate({
          scrollTop: $(hrf).offset().top - HeaderHeight
        }, 1000);
        return false;
    });
    
    var THeight = HeaderHeight + HeaderHeight;
    jQuery('.view_btn').click(function() {
        var hrf =jQuery(this).attr("href");
        if (jQuery("header").hasClass("stickyHeader")){
            jQuery('html, body').animate({
                scrollTop: jQuery(hrf).offset().top - HeaderHeight
            }, 500);
        }
        else{
            jQuery('html, body').animate({
                scrollTop: jQuery(hrf).offset().top - THeight
            }, 500);
        }
        return false;
    });

    jQuery('ul.news_gallery').slick({
        slidesToShow: 1,
        dots:false,
        arrows:true,
        slide: 'li',
        focusOnSelect: false,
        infinite: true,
        draggable: true,
        /*adaptiveHeight: true,*/
        swipeToSlide: true,
        draggable: false,
        speed: 1000,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots:true,
            }
          }
        ]
    });
	setTimeout(function(){ 	jQuery('.grecaptcha-badge').hide(); }, 5000);
    setTimeout(function(){ 
    jQuery('.new_clinic_slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        autoplaySpeed:3000,
        centerMode: true,
        centerPadding: '0px',
        infinite: true,
        focusOnSelect: true,
        cssEase: 'linear',
        touchMove: true,
        speed: 800,
        responsive: [

          {

            breakpoint: 768,
            settings: {
              arrows: true,
              dots: true,
            }

          },

          {

            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '0px',
                arrows: true,
                dots: true,
                speed: 700,
            }

          }

        ]

    });
}, 2000);

    jQuery('.common_condition li h6').matchHeight({
        property: 'height'
    });
    jQuery('.service_text h5').matchHeight({
        property: 'height'
    });
    jQuery('.popup_grid_content .popup_grid h4').matchHeight({
        property: 'height'
    });
});

jQuery(window).on("load",function() { 

    // $('.menu-item-has-children > a').addClass('has-arrow');

    if (jQuery(window).width() <= 991) {
        jQuery('.menu-item-has-children > a').before('<span class="triggerBtn"></span>');
        jQuery('.menu-item-has-children > h6').before('<span class="triggerBtn"></span>');
    }

    jQuery('#side-menu').metisMenu({
        toggle: true,
        triggerElement: '.triggerBtn',
        parentTrigger: '.menu-item.menu-item-has-children',
        subMenu: '.submenu'
    });
	
    //jQuery('.new_clinic_slider').slick('refresh');
});

var HeaderHeight = jQuery("header").innerHeight();
var scrollHeight = HeaderHeight + 100;
jQuery(window).scroll(function(){
    if (jQuery(this).scrollTop() >= scrollHeight){
        jQuery(".backtotop_btn").show();
    }
    else{
        jQuery(".backtotop_btn").hide();
    }
});
jQuery(".backtotop_btn").on('click',function(e){
    e.preventDefault();
    jQuery('html, body').animate({scrollTop:0},'500');
});

jQuery(document).ready(function(){
    jQuery(".page-id-845 header .head_box a.scroll_down_btn ").attr("href", "#");
	jQuery(".page-id-845 header .head_box a.scroll_down_btn ").click(function() {
    jQuery('html,body').animate({
        scrollTop: jQuery("#contact_form").offset().top},
        'slow');
	});
	jQuery(".page-id-829 header .head_box a.scroll_down_btn ").attr("href", "#");
	jQuery(".page-id-829 header .head_box a.scroll_down_btn ").click(function() {
    jQuery('html,body').animate({
        scrollTop: jQuery("#contact_form").offset().top},
        'slow');
	});
	jQuery(".page-id-1086 header .head_box a.scroll_down_btn ").attr("href", "#");
	jQuery(".page-id-1086 header .head_box a.scroll_down_btn ").click(function() {
    jQuery('html,body').animate({
        scrollTop: jQuery("#contact_form").offset().top},
        'slow');
	});
	jQuery(".page-id-1082 header .head_box a.scroll_down_btn ").attr("href", "#");
	jQuery(".page-id-1082 header .head_box a.scroll_down_btn ").click(function() {
    jQuery('html,body').animate({
        scrollTop: jQuery("#contact_form").offset().top},
        'slow');
	});
});

jQuery(document).ready(function(){
jQuery("body.page-id-818").addClass("notranslate");
jQuery(".page-id-824 .switcher .option a").removeClass("selected");
jQuery(".page-id-824 .switcher .option a:nth-child(2)").addClass("selected");	
jQuery(".page-id-824 .switcher .option a:first-child").attr("href","https://cctansurgery.com.sg/what-is-breast-cancer/");
	
jQuery(".page-id-824  .switcher .option a:first-child").attr("onclick","#");
	
jQuery(".page-id-824 .switcher .option a:nth-child(2)").attr("href","https://cctansurgery.com.sg/what-is-breast-cancer-bahasa/");
	
jQuery(".page-id-824  .switcher .option a:nth-child(2)").attr("onclick","#");
	
	
/* for english page */
jQuery(".page-id-818 .switcher .option a").removeClass("selected");
jQuery(".page-id-818 .switcher .option a:nth-child(1)").addClass("selected");	
jQuery(".page-id-818 .switcher .option a:first-child").attr("href","https://cctansurgery.com.sg/what-is-breast-cancer/");
	
jQuery(".page-id-818  .switcher .option a:first-child").attr("onclick","#");
	
jQuery(".page-id-818 .switcher .option a:nth-child(2)").attr("href","https://cctansurgery.com.sg/what-is-breast-cancer-bahasa/");
	
jQuery(".page-id-818  .switcher .option a:nth-child(2)").attr("onclick","#");
	
jQuery (".page-id-818 .switcher .selected a").html("<img src='//cctansurgery.com.sg/wp-content/plugins/gtranslate/flags/24/en.png' height='24' width='24'> English");
	
jQuery (".page-id-824 .switcher .selected a").html("<img src='//cctansurgery.com.sg/wp-content/plugins/gtranslate/flags/24/id.png' height='24' width='24'>  Indonesian");
});
