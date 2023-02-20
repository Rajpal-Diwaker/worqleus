<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> Worleus</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo(WEB.'/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo(WEB.'/css/font-awesome.min.css'); ?>" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo(WEB.'/css/externalstyle.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo(WEB.'/css/extrnalmedia.css'); ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo(WEB.'/js/jquery-2.1.1.js'); ?>"></script>
    <script src="<?php echo(WEB.'/js/bootstrap.js'); ?>"></script>
    <link rel="shortcut icon" href="<?php echo(WEB.'/images/fav.png'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo(WEB.'/images/fav.png'); ?>" type="image/x-icon">
</head>

<body>
    <!--Header Start Here-->
    <!--Header End Here-->
    <div id="wrapper">
        <div class="content_section">
            <div class="content_sectioninner">
                <header class="clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="logo_div">
                            <img src="<?php echo(WEB.'/images/logo.png'); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="signup_box">
                            <span>Don’t have an account?</span>
                            <a href="<?php echo(BASEURL.'/signup'); ?>" class="btn_style">Sign Up</a>
                        </div>
                    </div>
                </header>
                <section class="content">
                    <div class="formwidth form_div">
                        <form action="<?php echo(BASEURL.'/signinprocess'); ?>"  method="post" enctype="multipart/form-data" onSubmit="return validateinput();" >
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h1>Sign in to Worqleus</h1>
                                <p>Enter your details</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group clearfix email">
                                <p>Email Address</p>
                                <input type="text" class="form-control" placeholder="johnn@gmail.com" name="email" id="email" autocomplete="off">
                                <span class="small" id="email-error" style="color:red;"></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group clearfix">
                                <p>Password <a href="<?php echo(BASEURL.'/forgot-password');  ?>">Forgot Password?</a></p>
                                <input type="password" class="form-control" placeholder="************" name="password" id="password" autocomplete="off">
                                <span class="small" id="password-error" style="color:red;"></span>
                                <span class="small" style="color:red;"><?php echo $msg; ?></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-center">
                                <input type="submit" value="Sign In" class="btn_style submit" />
                            </div>
                        </div>
                        </form>
                        <div class="signwithdiv">
                            <div class="signborder"></div>
                            <span>Or Sign in with</span>
                            <div class="signwiththis">
                                <ul>
                                    <li><a href="#" class="google"></a></li>
                                    <li><a href="#" class="facebook"></a></li>
                                    <li><a href="#" class="twitter"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </section>
            </div>
            <footer class="fixedfooter">
                <div class="footer_bottom_stip">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p>WorQleus©All Rights Reserved <?php echo date('Y'); ?></p>
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
            </footer>
            <div class="footerpattern"></div>
        </div>
        <div class="image_section">
            <div class="image_section_innertext">
                <h2>Find the Perfect Freelance service for<span>Your Business</span></h2>
                <a href="javascript:void(0)" class="btn_style">Watch video</a>
            </div>
        </div>
		<footer class="mobile_footer">
			<div class="footer_bottom_stip">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>WorQleus©All Rights Reserved <?php echo date('Y'); ?></p>
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
		</footer>
    </div>
</body>
<script>
    $(window).bind("load", function () {
        positionFooter();
        function positionFooter() {
            //  console.log($("#content_sectioninner").height() + 70);
            //  console.log($(window).height());
            if ($(".content_sectioninner").height() < $(window).height()) {
                $(".fixedfooter").addClass("fixed");
            } else {
                $(".fixedfooter").removeClass("fixed");
            }
        }
        $(window)
            .scroll(positionFooter)
            .resize(positionFooter)
    });

function check_email_exists() {
    var email = $("#email").val();
    $.ajax({
        type:"post",
        url: "<?php echo(BASEURL.'/check_email_exists'); ?>",
        data:{ email:email},
        success:function(response)
        {
            if (response == 1) 
            {
              $("#email-error").text('').show();
            }
            else 
            {
              $("#email-error").text('Email not registered.').show();
            }  
        }
    });  
} 
function validateinput(){
   // alert('sdfdsf');
    var isValid = true; 
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if ($( "#email" ).val().trim() === "") {
        isValid = false;
        $( "#email-error" ).text( "Please enter email." ).show().fadeOut( 7500 );
    }else if (!emailReg.test($( "#email" ).val())) {
        isValid = false;
        $( "#email-error" ).text( "Please enter a valid email." ).show().fadeOut( 7500 );
    }else{
        check_email_exists();
    }
    if ($('.email span').text() !== "") {
        isValid = false;
    }
    if ($( "#password" ).val().trim() === "") {
        isValid = false;
        $("#password-error").text('Please enter password').show().fadeOut( 7500 );
    }
    return isValid;         
}
</script>

</html>