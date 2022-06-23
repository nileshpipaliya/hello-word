<section class="aboutDr_Section">

    <div class="row no-gutters align-items-center">

        <div class="col col-sm-6 col-12">

            <div class="aboutDR_image_content">

                <figure class="d-sm-block d-none"><img src="<?php the_field('desktop_image','option'); ?>" alt=""></figure>

                <figure class="d-sm-none s-block"><img src="<?php the_field('mobile_image','option'); ?>" alt=""></figure>

            </div>

        </div>

        <div class="col col-md-6 col-12">

            <div class="aboutDr_text_content_wrap">

                <div class="aboutDr_text_content">

                    <h2><?php the_field('dr_title','option'); ?></h2>

                    <h5><?php the_field('dr_surgery','option'); ?></h5>

                    <?php the_field('dr_content','option'); ?>

                    <?php  $dr_cta = get_field('dr_cta','option'); ?>

                    <div class="text-sm-left text-center">

                        <a href="<?php echo $dr_cta['url']; ?>" class="btn primary_btn"><?php echo $dr_cta['title']; ?></a>

                    </div>                            

                </div>

            </div>

        </div>

    </div>

</section>