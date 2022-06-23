<section class="contact_section p-120" id="contact_form" >

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
<section class="our_clinic_location p-120">
    <div class="container">
        <div class="our_clinic_location_content">
            <?php 
            if( have_rows('add_clinic_location','option') ):
                while( have_rows('add_clinic_location','option') ) : the_row();
                ?>
                
                <div class="clinic_main_row">
                    <div class="row">
                            <div class="col-md-6 order-2 order-md-1">
                            <div class="our-clinics-box">
                                <div class="card-content">
                                    <h6>MAIN CLINIC</h6>
                                    <h4><?php echo get_sub_field('title_location'); ?></h4>
                                    <ul>
                                        <li><span class="clinic_bold_text"><?php echo get_sub_field('address_location'); ?></span></li>
                                        <li><span><?php echo get_sub_field('time_location'); ?></span></li>
                                        <?php 
                                        $email_location = get_sub_field('email_location'); 
                                        $tel_location = get_sub_field('tel_location'); 
                                        $mobile_location = get_sub_field('mobile_location'); 
                                        ?>
                                        <li>
                                           <span><div class="anchor"><a href="<?php echo $email_location['url']; ?>"><?php echo $email_location['title']; ?></a></div></span>
                                        </li>
                                                                            
                                        <li>
                                            <span class="img-sec">T:</span>
                                            <span><div class="anchor"><a href="<?php echo $tel_location['url']; ?>"><?php echo $tel_location['title']; ?></a></div></span>
                                        </li>
                                        <li>
                                            <span class="img-sec">F:</span>
                                            <span><?php echo get_sub_field('fax_location'); ?></span>
                                        </li>
                                        <li>
                                            <span class="img-sec">M:</span>
                                            <span><div class="anchor"><a href="<?php echo $mobile_location['url']; ?>"><?php echo $mobile_location['title']; ?></a></div></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 order-1 order-md-2 map_part">
                            <div class="our-clinics-box"><?php echo get_sub_field('map_location'); ?></div>
                        </div>
                    </div>
                </div>
                
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
