        <footer>
            <span class="border_dashedline"></span>
            <div class="container footer_header">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="footer_logo">
                            <a href="<?php echo BASEURL; ?>"><img src="<?php echo(WEB.'/images/logo.png'); ?>" alt=""></a>
                        </div>
                        <ul data-aos="fade-left"  data-aos-delay="300" data-aos-duration="900">
                            <li>
                                <a href="mailto:Info@worqleus.com">Info@worqleus.com</a>
                            </li>
                            <li>
                                <a href="tel:+65 0120 120 0011">+65 0120 120 0011</a>
                            </li>
                        </ul>
                        <div class="newsletter">
                            <h6 data-aos="fade-right"  data-aos-delay="300" data-aos-duration="900">Support to our newsletter</h6>
                            <form action="">
                                <input type="text" placeholder="Enter Email" id="email" name="email" />
                                <input type="submit" class="btn_style" value="send">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12 nopad">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <h6 data-aos="fade-right"  data-aos-delay="300" data-aos-duration="900">Categories</h6>
                            <ul data-aos="fade-left"  data-aos-delay="300" data-aos-duration="900">
                                <li><a href="">Writing</a></li>
                                <li><a href="">Web/Mobile/IT</a></li>
                                <li><a href="">Graphics Design & Art</a></li>
                                <li><a href="">Architecture & Engineering </a></li>
                                <li><a href="">Legal Services</a></li>
                                <li><a href="">Tutors</a></li>
                                <li><a href="">Music Audi</a></li>
                                <li><a href="">Marketing</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <h6 data-aos="fade-right"  data-aos-delay="300" data-aos-duration="900">About</h6>
                            <ul data-aos="fade-left"  data-aos-delay="300" data-aos-duration="900">
                                <li><a href="">Careers</a></li>
                                <li><a href="">News Feed</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Terms & Service </a></li>
                                <li><a href="">About Us</a></li>
                            </ul>
                        </div>
                        <div class="clearboth_mobile"></div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <h6 data-aos="fade-right"  data-aos-delay="300" data-aos-duration="900">Support</h6>
                            <ul data-aos="fade-left"  data-aos-delay="300" data-aos-duration="900">
                                <li><a href="">Help & Support</a></li>
                                <li><a href="">Trust and Safety</a></li>
                                <li><a href="">Selling on WorQleus</a></li>
                                <li><a href="">Buying on WorQleus </a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <h6 data-aos="fade-right"  data-aos-delay="300" data-aos-duration="900">Community</h6>
                            <ul data-aos="fade-left"  data-aos-delay="300" data-aos-duration="900">
                                <li><a href="">Events</a></li>
                                <li><a href=""> Blog</a></li>
                                <li><a href="">Forum</a></li>
                                <li><a href="">Podcast</a></li>
                                <li><a href="">Affliates</a></li>
                                <li><a href="">Invite a Friend</a></li>
                                <li><a href="">Became a Seller</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="footer_bottom_stip">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p>WorQleus©All Rights Reserved 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="Followus_div">
                                <span>Follw us:</span>
                                <ul class="social_icon_list">
                                    <li>
                                        <a href="javascript:void(0);" class="facebook">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="pinterest">
                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="insta">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script>
 AOS.init({
    easing: 'ease-in-out-sine'
 });
</script>
<script>
    $(document).ready(function () {
        $('.navbar-toggle,.menuClose,.menuopenbg').on('click', function () {
            $('.navbar-collapse').toggleClass('active');
        });
    });
</script>
</html>