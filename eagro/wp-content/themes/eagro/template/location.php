<section class="our_clinic_location p-120">
    <div class="container">
        <div class="our_clinic_location_content">
            <?php $i = 0;
            if (have_rows('add_clinic_location', 'option')): ?>
                <div class="clinic_main_row">
                    <?php while (have_rows('add_clinic_location', 'option')) : the_row();
                        ?>
                        <div class="row <?php echo ($i > 0) ? 'last_address' : ''; ?>">
                            <div class="col-md-6 order-2 order-md-1">
                                <div class="our-clinics-box">
                                    <div class="card-content">
                                        <h6>LOCATIONS</h6>
                                        <h4><?php echo get_sub_field('title_location'); ?></h4>
                                        <ul>
                                            <li>
                                                <span class="clinic_bold_text"><?php echo get_sub_field('address_location'); ?></span>
                                            </li>
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
                            <div class="col-md-6 order-1 order-md-2 map_part <?php echo ($i > 1) ? 'remove_top' : '' ?>">
                                <div class="our-clinics-box"><?php echo get_sub_field('map_location'); ?></div>
                            </div>
                        </div>
                        <?php //echo ($i == 0) ? '</div><div class="clinic_main_row">' : '';
                        $i++;
                    endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>