<section class="payment_services">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="heading">
                    Protected by WorQleus Safe
                    <span>Payment Service</span>
                    <div class="animated_heading" data-aos="fade-right"  data-aos-delay="300" data-aos-duration="600"></div>
                </div>
            </div>
            <?php foreach($paymentServices as $ps){ ?>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="payment_div" data-aos="zoom-in-up"  data-aos-delay="300" data-aos-duration="800">
                    <div class="payment_option">
                        <img src="<?php echo $ps['post_media']; ?>" alt="" />
                    </div>
                    <div class="payment_info">
                        <h5><?php echo $ps['post_title']; ?></h5>
                        <p><?php echo $ps['post_content']; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>