<section class="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 co-sm-12 col-xs-12">
                        <div class="heading">
                            <span> Testimonials </span>
                            <div class="animated_heading" data-aos="fade-right"  data-aos-delay="300" data-aos-duration="600"></div>
                        </div>
                    </div>
                    <div id="testimonial_slider" class="owl-carousel owl-theme">
                        <?php foreach($testimonial as $ps){ ?>
                        <div class="item">
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="testimonial_user_wrapper">
                                    <div class="testimonial_person">
                                        <img src="<?php echo $ps['post_media']; ?>" />
                                    </div>
                                    <div class="testimonial_personbg"></div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="testimonial_content"  data-aos="fade-left"  data-aos-delay="300" data-aos-duration="900">
                                    <h5><?php echo $ps['post_title']; ?></h5>
                                    <span><?php echo $ps['designation']; ?></span>
                                    <?php echo $ps['post_content']; ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-7 col-md-offset-5 col-sm-7 col-sm-offset-5 col-xs-12">
                        <div class="slidearrow">
                            <span class="leftarrow">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </span>
                            <span class="rightarrow">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>