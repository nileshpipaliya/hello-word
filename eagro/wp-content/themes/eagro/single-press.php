<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dr_tan
 */

get_header(); 
$fields = get_fields(get_the_ID());
?>
<section class="news_section">
    <div class="container">
        <div class="news_content">
            <span><?php echo get_the_date('F j, Y',get_the_ID()); ?></span>
            <h2><?php the_title(); ?></h2>
            <?php $images = get_field('press_gallery');$size = 'full';?>
            <?php if( $images ): $count = count($images); ?>
		    <ul class="news_gallery <?php if($count == 1) { echo 'gallery_one'; }?>">
		        <?php foreach( $images as $image_id ): ?>
		            <li><figure>
		                <img src="<?php echo $image_id['url']; ?>">
		            </figure></li>
		        <?php endforeach; ?>
		    </ul>
		<?php endif; ?>
		<?php
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;
		?>
        
        </div>
    </div>
</section>
<?php 
get_footer();
?>