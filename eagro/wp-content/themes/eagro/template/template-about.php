<?php 

/**

 * Template Name: About Page

 *

 **/ 



get_header();

?>

<section class="hero_banner_section">

    <img src="<?php the_field("desktop_image_hero"); ?>">

</section>



<section class="aboutDr_Section p-120">

    <div class="container">

        <div class="row">

           
            <div class="col col-lg-12 col-md-12 col-12">

                <div class="aboutDr_text_content">

                    <h2><?php the_field('title_content'); ?></h2>

                    <?php the_field('content_text'); ?>

				</div>

            </div>

        </div>

    </div>

</section>



<section class="guiding_section">

    <div class="container">

        <div class="heading_text text-center">

            <a href="#quoteBanner_section" class="scroll_btna d-block text-center">

                <div class="down-arrow-animated">

                    <span></span>

                    <span></span>

                    <span></span>

                </div>

            </a>

            <h6><?php the_field('tag_line_key_philosophies','option'); ?></h6>

            <h2><?php the_field('title_key_philosophies','option'); ?></h2>

        </div>

        <div class="row">

            <?php

             if( have_rows('items_list','option') ):
                $i = 1;
                while( have_rows('items_list','option') ) : the_row(); ?>
                    <?php 
                    if($i == 1) { $grid = 'guiding_grid_one'; }
                    if($i == 2) { $grid = 'guiding_grid_two'; }
                    if($i == 3) { $grid = 'guiding_grid_three'; }
                    if($i == 4) { $grid = 'guiding_grid_four'; }
                    ?>
                    <div class="col col-sm-4 col-12 guiding_grid_wrap order-1">

                        <div class="guiding_grid <?php echo $grid; ?>">

                            <figure><img src="<?php echo get_sub_field('item_image'); ?>" alt=""></figure>

                            <h5><?php echo get_sub_field('item_title'); ?></h5>

                            <?php echo get_sub_field('item_content'); ?>

                        </div>

                    </div>

                    <?php
                    $i++;
                endwhile; echo'</ul>';

            endif;

            ?>

        </div>

    </div>

</section>



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

<?php 

get_footer();

?>