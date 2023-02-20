<section class="hire_scope">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="heading">
                    Hire for any
                    <span>Scope</span>
                    <div class="animated_heading" data-aos="fade-right"  data-aos-delay="300" data-aos-duration="600"></div>
                </div>
            </div>
            <?php foreach($scopeArr as $scope){ ?>
            <div class="hire_scope_div">
                <div class="hire_scopeimg">
                    <div class="hirescopeimg_wrapper" data-aos="flip-right"  data-aos-delay="300" data-aos-duration="600">
                        <img src="<?php echo $scope['post_media']; ?>" alt="" />
                    </div>
                </div>
                <div class="hire_scope_info">
                    <span><?php echo $scope['post_title']; ?></span>
                    <p><?php echo $scope['post_content']; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>