<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dr_tan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
   
</head>

<body <?php body_class(); ?>>
    
<div class="app-container">
    <div class="content-container">
        <div class="side-menu sidebar-inverse">
            <nav class="navbar-default" role="navigation">
                <div class="side-menu-container">
                    <?php wp_nav_menu( array('theme_location' => 'Main_Menu', 'container' => false, 'items_wrap' => '<ul class="metismenu"  id="side-menu">%3$s</ul>', 'depth' => 0, 'walker' => '')); ?>
                </div>
            </nav>
        </div>
    </div>
</div>
<?php $right_side_button = get_field('right_side_button','option'); ?>
<header>
    <div class="header-content">
        <div class="left-side-header">
            <a href="<?php echo get_site_url(); ?>">
                <img src="<?php the_field('site_logo','option'); ?>" alt="">
            </a>
        </div>
        <div class="center-header SiteMenu d-lg-inline-block d-none">
			<?php wp_nav_menu( array('theme_location' => 'Main_Menu', 'container' => false, 'items_wrap' => '<ul class="">%3$s</ul>', 'depth' => 0, 'walker' => '')); ?>
        </div>
        <div class="right-side-header">
            <div class="head_con_no d-flex align-items-center">
				<?php echo do_shortcode('[gtranslate]'); ?>
                
				<div class="call-btn d-inline-block">
                    <a href="<?php echo $right_side_button['url']; ?>" class="icon_click"></a>
                    <span>Call Us</span>
                    <a href="<?php echo $right_side_button['url']; ?>" class="contact_btn"><?php echo $right_side_button['title']; ?></a>
                </div>
				<div class="head_box d-lg-inline-block d-none">
                    <a href="<?php echo get_site_url(); ?>/contact-us" class="scroll_down_btn"><span>CONTACT US</span></a>
                    <a href="<?php echo get_site_url(); ?>/contact-us" class="scroll_down_btn">Make An Enquiry</a>
                </div>
                <div class="navbar_expand_toggle d-lg-none d-inline-flex">
                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/image/MenuBar.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</header>