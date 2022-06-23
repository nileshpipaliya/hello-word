<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dr_tan
 */

?>

<footer class="WFwrap">
	<div class="container">
	    <div class="row footer_row">
	        <div class="col col-lg-6 col-md-5 col-12">
	            <div class="footer_logo_section">
	                <div class="footer_logo">
	                    <a href="<?php echo get_site_url(); ?>"><img src="<?php the_field('footer_logo','option'); ?>" alt=""></a>
	                </div>
					<div class="copyright d-md-block d-none m-0">
	                    <p><?php the_field('copyright','option'); ?></p>
	                </div>
	            </div>
	        </div>
	        <div class="col col-lg-6 col-md-7 col-12">
	            <div class="row">
	                <div class="col col-xl-5 col-sm-6 col-12 offset-xl-2">
						<div class="footer_menu_wrap footer_link_menu_wrap">
	                        <h6>Quick Links</h6>
	                        <?php wp_nav_menu( array('menu' => 'Quick-Links', 'container' => false, 'items_wrap' => '<ul class="" >%3$s</ul>', 'depth' => 0, 'walker' => '')); ?>
	                    </div>
	                </div>
	                <div class="col col-xl-5 col-sm-6 col-12">
	                    <div class="footer_menu_wrap footer_call_menu_wrap">
							<h6>Location</h6>
	                        <ul>
	                            <li class="address">
	                                <?php the_field('address_location','option'); ?>
	                            </li>
	                           
	                            <?php 
			                    $email_location = get_field('email_location','option');
			                    $tel_location = get_field('tel_location','option');
			                    $mobile_location = get_field('mobile_location','option');
			                    ?>
	                            <li class="contact_mail">
	                                <a href="<?php echo $email_location['url']; ?>"><?php echo $email_location['title']; ?></a>
	                            </li>
	                            <li class="contact_num contact_num_1">
	                                <span>T:</span> <a href="<?php echo $tel_location['url']; ?>"><?php echo $tel_location['title']; ?></a>
	                            </li>
	                            <li class="contact_num contact_num_2">
	                                <span>M:</span> <a href="<?php echo $mobile_location['url']; ?>"><?php echo $mobile_location['title']; ?></a>
	                            </li>
	                            <li class="contact_num fax_num">
	                                <span>F:</span> <?php the_field('fax_location','option'); ?>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="whatsapp_icon">
	        <a href="https://api.whatsapp.com/send?phone= +00 0000 0000">
	            <img src="<?php echo get_template_directory_uri(); ?>/image/whatsapp1.svg">
	        </a>
	    </div>
	    <div class="social_icon_section" id="social_icon_section">
	        <div class="d-flex">
	            <a href="https://api.whatsapp.com/send?phone= +00 0000 0000" class="wp_icon">
	                <img src="<?php echo get_template_directory_uri(); ?>/image/whatsapp1.svg" alt="">
	                <span>WhatsApp Us</span>
	            </a>
	            <a href="tel:+65 6471 1233" class="call_icon">
	                <figure>
	                    <img src="<?php echo get_template_directory_uri(); ?>/image/Drsim-enquiry.svg">
	                </figure>
	                
	                <span>Call Us</span>
	            </a>
	            <a href="<?php echo get_site_url(); ?>/contact-us" class="mail_icon">
	                <img src="<?php echo get_template_directory_uri(); ?>/image/Drsim-enquiry.svg" alt="">
	                <span>Make An Enquiry</span>
	            </a>
	        </div>
	    </div>
	    <div class="copyright d-md-none d-block">
	        <p><?php the_field('copyright','option'); ?></p>	
	    </div>
		<div class="backtotop_btn_wrap">
		    <a href="#" class="backtotop_btn">back to top</a>
		</div>
	</div>
</footer><?php
if ( is_page( 824 ) ) { ?>
  <script type="text/javascript">
	if(localStorage.getItem("ChangeLanguage") === null) {
    	doGTranslate('en|id');
    	localStorage.setItem("ChangeLanguage", true);
	}
</script>  
<?php } ?>
<style type="text/css">
	.faq_grid h4 { color: #ff838f; }
	.medilogo_section figure { padding-right: 0 !important }
	.footer_menu_wrap ul li a { color: #666 !important; }
	.footer_menu_wrap ul li a:hover { color: #6ad387 !important; }
	.last_address { margin-top:45px; }
	.map_part { margin-top:30px; }
	.map_part.remove_top { margin-top:0 !important }
	.card-content { border-radius:none }
	.medisave_section .container { padding:0 }
	.clinic_main_row:last-child .last_address .card-content {     border-bottom-right-radius: 10px;    border-bottom-left-radius: 10px;}
	@media (max-width: 767px){
		.call-btn a span { padding-left:0;line-height: 23px; }
		.call-btn a.icon_click + span { margin-bottom: -5px; }
		.our-clinics-box .card-content { border-radius:0 }
		.medisave_section .container { padding:0 20px !important }
	}
	@media (max-width: 991px){
		.medilogo_section figure { margin-bottom:0;padding:0 }
		.common_condition { flex-wrap: wrap !important; }
	}
	@media (max-width: 575px){
		.medilogo_section figure , .medilogo_section figure img { max-width: 110px !important; }
		.medisave_section { padding: 50px 0 50px !important; }
		.last_address { margin-top:0; }
		.map_part.remove_top iframe { border-radius:0 }
	}
</style>

<?php wp_footer(); ?>

</body>
</html>
