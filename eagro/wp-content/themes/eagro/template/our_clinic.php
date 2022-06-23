<section class="clinic_section p-120" id="section_clinic" >

    <div class="container">

        <div class="heading_text text-center">

            <h2><?php the_field('title_clinic_carousel','option'); ?></h2>

        </div>

        <?php

         if( have_rows('main_image','option') ): echo '<ul class="new_clinic_slider">';

    		while( have_rows('main_image','option') ) : the_row(); ?>

    			<li class="clinic_item">

                    <figure>

                            <img src="<?php echo get_sub_field('slider_image'); ?>" alt="">

                        </figure>


                </li>

    		<?php

			endwhile;echo '</ul>';

    	endif;

        ?>

    </div>

</section>