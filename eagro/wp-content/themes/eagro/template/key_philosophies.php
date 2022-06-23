<section class="guiding_section">

    <div class="container">

        <div class="heading_text text-center">

            <a href="#faq_section" class="scroll_btna d-block text-center">

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