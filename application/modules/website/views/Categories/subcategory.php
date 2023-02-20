<div id="wrapper">
<!--banner start here -->
<section class="another_headerpage categories_banner clearfix" style="background: url(<?php echo $catArr['category_bannner'] ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1>Find the Perfect Freelance service for
                    <span>Your Business</span></h1>
                <span class="current_page"><a href="<?php echo BASEURL; ?>">Home /</a> <?php echo $page_title; ?></span>
            </div>
        </div>
    </div>
</section>
<section class="chooseservice">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="heading">
                    <span>Choose the Service of <?php echo $page_title; ?></span>
                    <div class="animated_heading" data-aos="fade-right" data-aos-delay="300"
                        data-aos-duration="600"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="choose_contentwrapper">
                <div class="choose_parentdiv">
                    <a href="#">
                        <div class="choose_div">
                            <div class="choose_img">
                                <img class="withouthover" src="<?php echo(WEB.'/images/webmobile.png'); ?>" />
                                <img class="onhover" src="<?php echo(WEB.'/images/webmobilehover.png'); ?>" />
                            </div>
                            <p>Web & Mobile App Consulting</p>
                        </div>
                    </a>
                </div>
                <div class="choose_parentdiv">
                    <a href="#">
                        <div class="choose_div">
                            <div class="choose_img">
                                <img class="withouthover" src="<?php echo(WEB.'/images/webmobilehover.png'); ?>" />
                                <img class="onhover" src="<?php echo(WEB.'/images/webmobilehover.png'); ?>" />
                            </div>
                            <p>Web & Mobile App Consulting</p>
                        </div>
                    </a>
                </div>
                <div class="choose_parentdiv">
                    <a href="#">
                        <div class="choose_div">
                            <div class="choose_img">
                                <img class="withouthover" src="<?php echo(WEB.'/images/webmobilehover.png'); ?>" />
                                <img class="onhover" src="<?php echo(WEB.'/images/webmobilehover.png'); ?>" />
                            </div>
                            <p>Web & Mobile App Consulting</p>
                        </div>
                    </a>
                </div>
                <div class="choose_parentdiv">
                    <a href="#">
                        <div class="choose_div">
                            <div class="choose_img">
                                <img class="withouthover" src="<?php echo(WEB.'/images/webmobile.png'); ?>" />
                                <img class="onhover" src="<?php echo(WEB.'/images/webmobilehover.png'); ?>" />
                            </div>
                            <p>Web & Mobile App Consulting</p>
                        </div>
                    </a>
                </div>
                <div class="choose_parentdiv">
                    <a href="#">
                        <div class="choose_div">
                            <div class="choose_img">
                                <img class="withouthover" src="<?php echo(WEB.'/images/webmobile.png'); ?>" />
                                <img class="onhover" src="<?php echo(WEB.'/images/webmobilehover.png'); ?>" />
                            </div>
                            <p>Web & Mobile App Consulting</p>
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
<!--how we work start here -->
<?php $this->load->view('website/Common/howwework'); ?>
<!--how we work end here -->
<!--ask the experts start here -->
<?php $this->load->view('website/Common/ask_expert'); ?>
<!--ask the experts end here -->
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
