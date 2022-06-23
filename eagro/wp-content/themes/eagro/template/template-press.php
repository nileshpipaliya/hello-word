<?php 
/**
 * Template Name: Press Main
 *
 **/ 

get_header();
?>
<section class="service_section p-100">
    <div class="container">
        <div class="heading_text text-center">
            <h2>Certificates</h2>
        </div>
        <div class="row service_grid_row">
       	<?php
	      $args = array( 'post_type' => 'press', 'posts_per_page' => -1, 'post_status' => 'publish','orderby' => 'publish_date',
                          'order' => 'DESC');
	      $the_query = new WP_Query( $args );
	      if ( $the_query->have_posts() ) :  
	      	while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
	      		<div class="col col-md-4 col-sm-6 col-12">
	                <div class="service_grid">
	                   
	                        <figure class="text-center">
	                        	<?php $featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full');  ?> 
	                            <img src="<?php echo $featured_img_url; ?>">
	                        </figure>
	                    
	                </div>
	            </div>
	      	<?php
	      	endwhile; 
	      endif; 
	      wp_reset_postdata();  ?>
        </div>
    </div>
</section>
<?php 
get_footer();
?>