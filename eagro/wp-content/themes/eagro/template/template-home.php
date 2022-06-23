<?php 

/**

 * Template Name: Home Page

 *

 **/ 



get_header();

?>
<div class="reorder-divs">
<?php $hide_hero_section = get_field('hide_hero_section');
if($hide_hero_section != 1){ ?>
<section class="WFwrap hero_banner_section" style="order: <?php echo get_field('order_hero_section'); ?>">

    <div class="container">

        <div class="row align-items-center">

            <div class="col col-md-6 order-md-1 order-2">

                <div class="hero_banner_text_content">

                    <h4><?php the_field('tag_title_hero'); ?></h4>

                    <h1><?php the_field('title_hero'); ?></h1>

                    <p><?php the_field('text_hero'); ?></p>

                    <div class="btn_wrapper">

                    	<?php $cta_1 = get_field('cta_1'); $cta_2 = get_field('cta_2'); ?>

                        <a href="<?php echo $cta_1['url']; ?>" class="btn primary_btn"><?php echo $cta_1['title']; ?></a>

                        <a href="<?php echo $cta_2['url']; ?>" class="btn view_btn"><?php echo $cta_2['title']; ?></a>

                    </div>

                </div>

            </div>

            <div class="col col-md-6 col-12 order-md-2 order-1">

                <div class="hero_banner_img_content">

                    <figure><img src="<?php the_field('hero_image'); ?>" alt=""></figure>

                </div>

            </div>

        </div>

    </div>

</section>
<?php } 
$hide_why_choose_us = get_field('hide_why_choose_us');
if($hide_why_choose_us != 1){ 
?>
<section class="WFwrap whyChooseDoctor_section" style="order: <?php echo get_field('order_why_choose_us'); ?>">

    <div class="container">

        <div class="popup_grid_content">

            <div class="row no-gutters">

            	<?php 

            	if( have_rows('icons','option') ):

            		while( have_rows('icons','option') ) : the_row(); ?>

                		<div class="col col-md-3 col-sm-6 col-12">

                            <div class="popup_grid text-center">

                                <figure>

                                    <img src="<?php echo get_sub_field('icon_image'); ?>" alt="">

                                </figure>

                                <h4><?php echo get_sub_field('icon_title'); ?></h4>

                                <p><?php echo get_sub_field('icon_text'); ?></p>

                            </div>

                        </div>

            			<?php

					endwhile;

            	endif;

				?>

                

            </div>

        </div>

    </div>

</section>
<?php } 
$hide_about_dr = get_field('hide_about_dr');
if($hide_about_dr != 1){ 
?>
<div class="WFwrap " style="order: <?php echo get_field('order_about_dr'); ?>">
<?php include 'about.php' ?>
</div>
<?php } 
$hide_services = get_field('hide_services');
if($hide_services != 1){ 
?>
<section class="WFwrap common_condition_section" id="common_condition_section" style="order: <?php echo get_field('order_services'); ?>">

    <div class="container">

        <div class="heading_text text-center">

            <h5><?php the_field('tag_line_services'); ?></h5>

            <h2><?php the_field('title_line_services'); ?></h2>

        </div>

        <?php 

    	if( have_rows('services_list') ): echo '<ul class="row common_condition">';

    		while( have_rows('services_list') ) : the_row(); ?>

    			<li class="col col-md-4 col-sm-6 col-12">
                    <?php  if(get_sub_field('services_link')){ ?>
                        <h6><a href="<?php echo get_sub_field('services_link'); ?>"><?php echo get_sub_field('services'); ?></a></h6>
                    <?php } else { ?> 
                        <h6><?php echo get_sub_field('services'); ?></h6>
                    <?php } ?>
	                

	            </li>

        		<?php

			endwhile; echo'</ul>';

    	endif;

		?>

    </div>

</section>
<?php } 
$hide_key_philosophies = get_field('hide_key_philosophies');
if($hide_key_philosophies != 1){ 
?>
<div class="WFwrap " style="order: <?php echo get_field('order_key_philosophies'); ?>">
<?php include 'key_philosophies.php' ?>
</div>
<?php } 

$hide_special_interests = get_field('hide_special_interests');
if($hide_special_interests != 1){ 
?>
<section class="WFwrap specialInterest_section" style="order: <?php echo get_field('order_special_interests'); ?>">

    <div class="row align-items-center no-gutters">

        <div class="col col-sm-6 col-12">

            <div class="specialInteres_image_content">

                <figure><img src="<?php the_field('image_special_interests','option'); ?>" alt=""></figure>

            </div>

        </div>

        <div class="col col-md-6 col-12">

            <div class="specialInteres_text_content_wrap">

                <div class="specialInteres_text_content">

                    <div class="heading_text text-sm-left text-center">

                        <h2><?php the_field('title_special_interests','option'); ?></h2>

                        <p><?php the_field('text_special_interests','option'); ?>  </p>

                    </div>

                   <?php the_field('listing_special_interests','option'); ?>

                </div>

            </div>

        </div>

    </div>

</section>
<?php } 

$hide_contact_form = get_field('hide_contact_form');
if($hide_contact_form != 1){ 
?>
<div class="WFwrap " style="order: <?php echo get_field('order_contact_form'); ?>">
<section class="contact_section p-120" id="contact_form">

    <div class="container">

        <div class="contect_section_content">

            <div class="heading_text text-center">

                <?php the_field('get_in_touch','option'); ?>

            </div>



            <div class="contact_us_form">

                <div class="grid_wrap text-center">

                    <?php the_field('get_started','option'); ?>

                </div>

                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1" html_class="contact_form"]') ?>

                <div class="calling_section d-flex">

                    <div class="calling_content  call_link_content text-center">

                        <a href="tel: +65 6471 1233" class="call_icon"><img src="<?php echo get_template_directory_uri(); ?>/image/DrSim-call-icon.svg" alt=""></a>

                         <?php the_field('call_link','option'); ?>

                    </div>

                    <div class="calling_content wpcall_link_content text-center">

                        <a href="https://api.whatsapp.com/send?phone= +65 9784 8751" class="call_icon"><img src="<?php echo get_template_directory_uri(); ?>/image/wpCall.svg" alt=""></a>

                         <?php the_field('wpcall_ink','option'); ?>

                    </div>

                </div>

            </div>



        </div>

    </div>

</section>

<?php include 'location.php';?> 
</div>
<?php } 
?>
</div>
<?php

get_footer();

?>