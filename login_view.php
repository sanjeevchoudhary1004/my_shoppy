<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="<?php echo base_url().CSS_PATH;?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url().CSS_PATH;?>font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url().CSS_PATH;?>prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url().CSS_PATH;?>price-range.css" rel="stylesheet">
    <link href="<?php echo base_url().CSS_PATH;?>animate.css" rel="stylesheet">
	<link href="<?php echo base_url().CSS_PATH;?>main.css" rel="stylesheet">
	<link href="<?php echo base_url().CSS_PATH;?>responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url().IMAGES_PATH;?>ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url().IMAGES_PATH;?>ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url().IMAGES_PATH;?>ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url().IMAGES_PATH;?>ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url().IMAGES_PATH;?>ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<!-- Including Header Using PHP-->
	<?php $this->load->view('header_view'); ?>
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="#">
							<input type="text" placeholder="Name" />
							<input type="email" placeholder="Email Address" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="<?php echo base_url();?>index.php/user_controller/read_user_data" method="post">
							<input type="text" name="uname" placeholder="Name"/>
							<input type="email" name="uemail" placeholder="Email Address"/>
							<input type="password" name="upassword" placeholder="Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	
	<!-- Including Footer Using PHP-->
	<?php $this->load->view('footer_view'); ?>	
	<!--/Footer-->
	 <script src="<?php echo base_url().JS_PATH;?>jquery.js"></script>
	<script src="<?php echo base_url().JS_PATH;?>bootstrap.min.js"></script>
	<script src="<?php echo base_url().JS_PATH;?>jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url().JS_PATH;?>price-range.js"></script>
    <script src="<?php echo base_url().JS_PATH;?>jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url().JS_PATH;?>main.js"></script>
</body>
</html>