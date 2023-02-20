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
							<span>Sign in here</span>
							<a href="<?php echo(BASEURL.'/signin'); ?>" class="btn_style">Sign In</a>
						</div>
					</div>
				</header>
				<section class="content">
					<?php if($resultArr =='Expired'){ ?>
					<div class="formwidth form_div">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="heading">
								<h1>Link Expired Please try again.</h1>
							</div>
						</div>
					<?php	}else{ ?>
					<div class="formwidth form_div">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="heading">
								<h1>Reset Password</h1>
							</div>
						</div>
						<form action="<?php echo(BASEURL.'/resetpasprocess'); ?>"  method="post" enctype="multipart/form-data" onSubmit="return validateinput();" >
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="form-group clearfix">
								<p>Password</p>
                                <input type="password" class="form-control" placeholder="************" name="password" id="password" autocomplete="off">
                                <span class="small" id="password-error" style="color:red;"></span>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="form-group clearfix">
								<p>Confirm Password</p>
								<input type="password" class="form-control" placeholder="************" name="cpassword" id="cpassword" autocomplete="off">
								<span class="small" id="cpassword-error" style="color:red;"></span>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="form-group text-center">
								<input type="submit" value="Submit" class="btn_style submit" />
							</div>
						</div>
						<input type="hidden" name="user_id" value="<?php echo $resultArr; ?>">
						</form>
						<?php } ?>
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
			//	console.log($("#content_sectioninner").height() + 70);
			//	console.log($(window).height());
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

function validateinput(){
   // alert('sdfdsf');
    var isValid = true; 
    if ($( "#password" ).val().trim() === "") {
        isValid = false;
        $("#password-error").text('Please enter password').show().fadeOut( 7500 );
    }
    if ($( "#cpassword" ).val().trim() == "") {
        isValid = false;
        $( "#cpassword-error" ).text( "Please enter your password." ).show().fadeOut( 8000 );
        return false;
    }
    if ($( "#password" ).val().trim() != $( "#cpassword" ).val().trim()) {
        isValid = false;
        $( "#cpassword-error" ).text( "password does not match." ).show().fadeOut( 8000 );
    }
    return isValid;         
}
</script>

</html>