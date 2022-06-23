<?php 
/**
 * Template Name: Service Page
 *
 **/ 

get_header();
?>
<div class="reorder-divs">
<?php $hide_hero_section = get_field('hide_hero_section');
if($hide_hero_section != 1){ ?>
<section class="WFwrap hero_banner_section" style="order: <?php echo get_field('order_hero_section'); ?>">
    <div class="row align-items-center no-gutters">
        <div class="col col-md-6 order-md-1 order-2">
            <div class="hero_banner_text_content_wrap">
                <div class="hero_banner_text_content">
                    <h6>Dr. Tan Chuan Chien</h6>
                    <h1><?php the_field('title_hero'); ?></h1>
                    <p><?php the_field('text_hero'); ?> </p>
                    <div class="btn_wrapper">
                    	<?php $cta_hero = get_field('cta_hero'); ?>
                        <a href="<?php echo $cta_hero['url']; ?>" class="btn primary_btn"><?php echo $cta_hero['title']; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-md-6 col-12 order-md-2 order-1">
            <div class="hero_banner_img_content">
                <figure>
                    <img src="<?php the_field('banner_hero'); ?>" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>
<?php } 
$hide_overview = get_field('hide_overview');
if($hide_overview != 1){ 
?>
<section class="WFwrap overview_section p-100" style="order: <?php echo get_field('order_overview'); ?>">
    <div class="container">
        <div class="overview_content text-sm-left text-center">
            <h2><?php the_field('title_overview'); ?></h2>
            <?php the_field('content_overview'); ?>
    </div>
</section>
<?php } 
$hide_right_description = get_field('hide_right_description');
if($hide_right_description != 1){ 
?>
<section class="WFwrap aboutDr_Section rightDescription_section p-100" style="order: <?php echo get_field('order_right_description'); ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col col-md-6 col-12 doctor_image_content_wrap">
                <div class="aboutDR_image_content text-md-left text-center">
                    <figure><img src="<?php the_field('image_right_description'); ?>" alt=""></figure>
                </div>
            </div>
            <div class="col col-md-6 col-12">
                <div class="aboutDr_text_content">
                    <h2><?php the_field('title_right_description'); ?></h2>
                    <?php the_field('content_right_description'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } 
$hide_main_description_1 = get_field('hide_main_description_1');
if($hide_main_description_1 != 1){ 
?>
<section class="WFwrap mainDescription_section p-100" style="order: <?php echo get_field('order_main_description_1'); ?>">
    <div class="container container_sm">
        <div class="mainDescription_content">
            <h2><?php the_field('title_main_description_1'); ?></h2>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/image/line.svg" alt=""></figure>
            <?php the_field('content_main_description_1'); ?>
            <br/><br/>
            <div class="text-sm-left text-center">
                <a href="<?php echo get_site_url(); ?>/contact-us" class="btn primary_btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<?php } 

 
$hide_key_philosophies = get_field('hide_key_philosophies');
if($hide_key_philosophies != 1){ 
?>
<div class="WFwrap" style="order: <?php echo get_field('order_key_philosophies'); ?>" id="key_philosophies">
<?php include 'key_philosophies.php' ?>
</div>
<?php } 
$hide_contact_form = get_field('hide_contact_form');
if($hide_contact_form != 1){ 
?>
	<div class="WFwrap" style="order: <?php echo get_field('clinic_order'); ?>">
		<?php include 'our_clinic.php' ?>
	</div>
	<div class="myonlycontact WFwrap" style="order: <?php echo get_field('order_contact_section'); ?>">
		<?php include 'contact_section.php' ?>
	</div>
	<div class="WFwrap" style="order: <?php echo get_field('order_location'); ?>">
		<?php include 'location.php' ?>
	</div>
<?php } 
?>
</div>
<?php
get_footer();
?>