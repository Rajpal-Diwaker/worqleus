<div id="wrapper">
<!--banner start here -->
<section class="banner clearfix">
    <div class="container">
        <div class="row">
            <div class="banner_content">
                <div class="tag_line">
                    <h1>Find the perfect the freelance <span>Your Bussiness</span></h1>
                </div>
                <div class="banner_search">
                    <div class="search_input">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="search" placeholder="Search here..." />
                    </div>
                    <div class="search_btn">
                        <input type="submit" value="Search" class="btn_style btn-block" />
                    </div>
                    <p>Developer,Content Writer,Designer</p>
                </div>
            </div>
            <div class="knowmore"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i> Know About
                    More</a></div>
        </div>
    </div>
</section>
<!--banner end here -->
<!--find freelance start here-->
<section class="find_freelance">
    <div class="container">
        <div class="row">
            <div class="col-md-12 co-sm-12 col-xs-12">
                <div class="heading">
                    <span>Find your Freelancer or Agency</span>
                    <div class="animated_heading" data-aos="fade-right" data-aos-delay="300"
                        data-aos-duration="600"></div>
                </div>
            </div>
            <div class="agency_wrapper">
                <!--repeat div start here-->
                <div class="choose_parentdiv"  data-aos="flip-left" data-aos-easing="ease-in-sine"  data-aos-delay="300" data-aos-duration="600">
                    <a href="<?php echo(BASEURL.'/web-mobile-it'); ?>">
                        <div class="choose_div">
                            <div class="choose_img">
                                <img class="withouthover" src="<?php echo(WEB.'/images/webmobile.png'); ?>" />
                                <img class="onhover" src="<?php echo(WEB.'/images/webmobilehover.png'); ?>" />
                            </div>
                            <p>Web, Mobile & IT</p>
                        </div>
                    </a>
                </div>
                <!--repeat div end here-->
                <div class="choose_parentdiv" data-aos="flip-left" data-aos-easing="ease-in-sine"  data-aos-delay="300" data-aos-duration="600">
                    <a href="<?php echo(BASEURL.'/graphics-designs-arts'); ?>">
                        <div class="choose_div">
                            <div class="choose_img">
                                <img class="withouthover" src="<?php echo(WEB.'/images/graphic.png'); ?>" />
                                <img class="onhover" src="<?php echo(WEB.'/images/graphichover.png'); ?>" />
                            </div>
                            <p>Graphics, Designs
                                & Arts</p>
                        </div>
                    </a>
                </div>
                <div class="choose_parentdiv" data-aos="flip-left" data-aos-easing="ease-in-sine"  data-aos-delay="300" data-aos-duration="600">
                    <a href="<?php echo(BASEURL.'/business-marketing'); ?>">
                        <div class="choose_div">
                            <div class="choose_img">
                                <img class="withouthover" src="<?php echo(WEB.'/images/business.png'); ?>" />
                                <img class="onhover" src="<?php echo(WEB.'/images/webmobilehover.png'); ?>" />
                            </div>
                            <p>Business &
                                Marketing</p>
                        </div>
                    </a>
                </div>
                <div class="choose_parentdiv" data-aos="flip-left" data-aos-easing="ease-in-sine"  data-aos-delay="300" data-aos-duration="600">
                    <a href="<?php echo(BASEURL.'/architecture-engineering'); ?>">
                        <div class="choose_div">
                            <div class="choose_img">
                                <img class="withouthover" src="<?php echo(WEB.'/images/architecture.png'); ?>" />
                                <img class="onhover" src="<?php echo(WEB.'/images/webmobilehover.png'); ?>" />
                            </div>
                            <p>Architecture &
                                Engineering</p>
                        </div>
                    </a>
                </div>
                <div class="choose_parentdiv" data-aos="flip-left" data-aos-easing="ease-in-sine"  data-aos-delay="300" data-aos-duration="600">
                    <a href="<?php echo(BASEURL.'/legal-service'); ?>">
                        <div class="choose_div">
                            <div class="choose_img">
                                <img class="withouthover" src="<?php echo(WEB.'/images/legal.png'); ?>" />
                                <img class="onhover" src="<?php echo(WEB.'/images/legalhover.png'); ?>" />
                            </div>
                            <p>Legal Services</p>
                        </div>
                    </a>
                </div>
                <div class="choose_parentdiv" data-aos="flip-left" data-aos-easing="ease-in-sine"  data-aos-delay="300" data-aos-duration="600">
                    <a href="<?php echo(BASEURL.'/writing'); ?>">
                        <div class="choose_div">
                            <div class="choose_img">
                                <img class="withouthover" src="<?php echo(WEB.'/images/writing.png'); ?>" />
                                <img class="onhover" src="<?php echo(WEB.'/images/writinghover.png'); ?>" />
                            </div>
                            <p>Writing</p>
                        </div>
                    </a>
                </div>
                <div class="choose_parentdiv" data-aos="flip-left" data-aos-easing="ease-in-sine"  data-aos-delay="300" data-aos-duration="600">
                    <a href="<?php echo(BASEURL.'/tutors'); ?>">
                        <div class="choose_div">
                            <div class="choose_img">
                                <img class="withouthover" src="<?php echo(WEB.'/images/tutor.png'); ?>" />
                                <img class="onhover" src="<?php echo(WEB.'/images/webmobilehover.png'); ?>" />
                            </div>
                            <p>Tutors</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--find freelance end here-->
<!--trending Freelance start here-->
<?php $this->load->view('website/Common/trending_freelancer'); ?>
<!--trending Freelance end here-->
<!--trust client start here-->
<?php $this->load->view('website/Common/clients'); ?>
<!--trust client end here-->
<!--hire scope start here-->
<?php $this->load->view('website/Common/scope',$scopeArr); ?>
<!--hire scope end here-->
<!--payment services start here-->
<?php $this->load->view('website/Common/payment_service',$paymentServices); ?>
<!--payment services end here-->
<!--ask the experts start here -->
<?php $this->load->view('website/Common/ask_expert'); ?>
<!--ask the experts end here -->
<?php $this->load->view('website/Common/right_tool'); ?>
<!--how we work start here -->
<?php $this->load->view('website/Common/howwework'); ?>
<!--how we work end here -->
<!--find freelance agency start here -->
<section class="find_freelance_agency">
    <div class="container" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="900">
        <div class="row">
            <div class="col-md-12 co-sm-12 col-xs-12">
                <div class="heading">
                    <span> Find your Freelancer or Agency</span>
                </div>
            </div>
            <p>We've got you covered for all your business needs</p>
            <a href="" class="btn_style">Get Started</a>
        </div>
    </div>
</section>
<!--find freelance agency end here -->
<!--testimonial start here-->
<?php $this->load->view('website/Common/testimonial',$testimonial); ?>
        <!--testimonial end here-->