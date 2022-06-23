<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dr_tan
 */

get_header();
while ( have_posts() ) : the_post();
?>
<section class="blog_inner_section">
    <div class="container">
        <div class="heading_text">
            <h2><?php echo get_the_title(); ?></h2>
            <h6><img src="<?php echo get_template_directory_uri(); ?>/image/check-mark.svg">
				<p>
					<?= get_the_ID() == 728 ? 'Article contributed by ' : 'Medically reviewed by ';?>
					<?php the_field('medically'); ?>
				</p>
			</h6>
        </div>
        
        <div class="row">
            <div class="col col-lg-8 col-12">
                <div class="blog_inner_descriptoion">
                    <figure><?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
                        <img src="<?php echo $url; ?>" alt="">
                    </figure>
                    <?php the_content(); ?>
                    
                </div>
            </div>
            <div class="col col-lg-4 col-12 d-sm-block d-none">
                <div class="blog_inner_artical">
                    <h5>Related Posts :</h5>
                    <?php 
                    $posts = get_field('select_related_posts');
                    if( $posts ): echo "<ul>";
                    	foreach( $posts as $p ):
                    		echo '<li><a href="'.get_the_permalink($p).'">'.get_the_title($p).'</a></li>';
                		endforeach;echo "</ul>";
                	endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="quoteBanner_section">

    <div class="row align-items-center no-gutters">

        <div class="col col-md-6 col-12 order-md-1 order-2">

            <div class="quoteBanner_text_content_wrap">

                <div class="quoteBanner_text_content">

                    <figure><img src="<?php echo get_template_directory_uri() ?>/image/quote.svg" alt=""></figure>

                    <h4><?php the_field('text_quote_banner','option'); ?></h4>

                    <h6><?php the_field('title_quote_banner','option'); ?></h6>

                </div>

            </div>

        </div>

        <div class="col col-sm-6 col-12 order-md-2 order-1">

            <div class="quoteBanner_image_content">

                <figure><img src="<?php the_field('banner_image','option'); ?>" alt=""></figure>

            </div>

        </div>

    </div>

</section>
<section class="whyChooseDoctor_section p-100">

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

<?php include 'template/aboutDr.php' ?>
<?php include 'template/our_clinic.php' ?>
<?php include 'template/contact_section.php' ?>
<section class="service_section p-100">
    <div class="container">
        <div class="heading_text text-center">
            <h2>Related Articles</h2>
        </div>
        <div class="row service_grid_row">

        	<?php 

				$posts = get_field('select_related_articles');

				if( $posts ): ?> 

					<?php foreach( $posts as $p ): ?>

						<div class="col col-md-4 col-sm-6 col-12">

	                        <div class="service_grid">

	                            <a href="<?php echo get_the_permalink($p); ?>" class="serviceImg">

	                                <figure>

	                                	<?php  $featured_img_url = get_the_post_thumbnail_url( $p, 'full');  ?>

	                                    <img src="<?php echo $featured_img_url; ?>">

	                                </figure>

	                            </a>

	                            <div class="service_text">

	                                <h5><a href="<?php echo get_the_permalink($p); ?>"><?php echo get_the_title( $p); ?></a></h5>

	                                <a href="<?php echo get_the_permalink($p); ?>" class="read_more"><span><img src="<?php echo get_template_directory_uri() ?>/image/Vector-67.svg"></span>Read More</a>

	                            </div>

	                        </div>

	                    </div>

					<?php endforeach; ?>

				<?php endif; ?>	

         </div>
    </div>
</section>
<?php
endwhile;
get_footer();
