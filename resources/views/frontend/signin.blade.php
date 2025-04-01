<!doctype html>
<html lang="en">

<head>
	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Premium HTML5 Template by Indonez">
	<meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
	<meta name="author" content="Indonez">
	<meta name="theme-color" content="#22c55e">
	<!-- preload assets -->
	<link rel="preload" href="fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="fonts/archivo-v18-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="fonts/archivo-v18-latin-300.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="fonts/archivo-v18-latin-700.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('asset/css/style.css') }}" as="style">
	<link rel="preload" href="{{ asset('asset/js/vendors/uikit.min.js') }}" as="script">
	<link rel="preload" href="{{ asset('asset/js/utilities.min.js') }}" as="script">
	<link rel="preload" href="{{ asset('asset/js/config-theme.js') }}" as="script">
	<!-- stylesheet -->
	<link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
	<!-- uikit -->
	<script src="js/vendors/uikit.min.js"></script>
	<!-- favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<!-- touch icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon.png">
	<title>Sign in - Equity HTML5 Template</title>
</head>

<body>
	<!-- page loader begin -->
	<div class="page-loader">
		<div></div>
		<div></div>
		<div></div>
	</div>
	<!-- page loader end -->
	<main>
		<!-- section content begin -->
		<div class="uk-section uk-section-secondary uk-light uk-padding-remove-vertical">
			<div class="uk-container uk-container-expand">
				<div class="uk-grid" data-uk-height-viewport="expand: true">
					<div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge" style="background-image: url(img/in-signin-image.jpg);">
						
					</div>
					<div class="uk-width-expand@m uk-flex uk-flex-middle">
						<div class="uk-grid uk-flex-center">
							<div class="uk-width-3-5@m">
								<div class="uk-text-center in-padding-horizontal@s">
									<a class="uk-logo" href="index.html">
										<img src="img/in-lazy.gif" data-src="img/user/header-logo-Uw3Zp9.svg" alt="logo" width="146" height="40" data-uk-img>
									</a>
									<p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom">Log into your account</p>
									<!-- login form begin -->
									<form class="uk-grid uk-form">
										<div class="uk-margin-small uk-width-1-1 uk-inline">
											<span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
											<input class="uk-input uk-border-rounded" id="username" value="" type="text" placeholder="Username">
										</div>
										<div class="uk-margin-small uk-width-1-1 uk-inline">
											<span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
											<input class="uk-input uk-border-rounded" id="password" value="" type="email" placeholder="Password">
										</div>
										<div class="uk-margin-small uk-width-auto uk-text-small">
											<label><input class="uk-checkbox" type="checkbox"> Remember me</label>
										</div>
										<div class="uk-margin-small uk-width-expand uk-text-small">
											<label class="uk-align-right"><a class="uk-link-reset" href="#">Forgot password?</a></label>
										</div>
										<div class="uk-margin-small uk-width-1-1">
											<button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Sign in</button>
										</div>
									</form>
									<!-- login form end -->
									<p class="uk-heading-line"><span>Or sign in with</span></p>
									<div class="uk-margin-medium-bottom">
										<a class="uk-button uk-button-small uk-border-rounded color-google" href="#"><i class="fab fa-google uk-margin-small-right"></i>Google</a>
										<a class="uk-button uk-button-small uk-border-rounded uk-margin-small-left color-facebook" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>
									</div>
									<span class="uk-text-small">Don't have an account? <a href="#">Register here</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
	</main>
	<!-- javascript -->
	<script src="js/utilities.min.js"></script>
	<script src="js/config-theme.js"></script>
</body>

</html>