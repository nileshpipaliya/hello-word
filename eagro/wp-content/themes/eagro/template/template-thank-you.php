<?php 

/**

 * Template Name: Thank you

 *

 **/ 

get_header();
?>
<section class="thankyou_section">
    <div class="container">
        <div class="thankyou_content text-center">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/image/check-markthank.svg" alt=""></figure>
            <?php 
            while ( have_posts() ) : the_post();
            	the_content();
            endwhile; 
            ?>
        </div>
    </div>
</section>

<?php include 'location.php';?> 

<?php 
get_footer();
?>