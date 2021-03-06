<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Game Solutions</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Gaming Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// bootstrap-css -->
	<!-- css -->
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/signup.css" type="text/css" media="all" />
	<!--// css -->

	<!-- font-awesome icons -->
	<link href="../css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- portfolio -->
	<link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="all">
	<!-- //portfolio -->
	<!-- font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
		rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300'
		rel='stylesheet' type='text/css'>
	<!-- //font -->
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/login.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>

	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>

<body>
	<!-- banner -->
	<div class="banner-login">
		<div class="agileinfo-dot">

			<div class="nv-main">
				<div class="agileits-logo">
					<h1><a href="index.html">GAME  <span>Solutions</span></a></h1>
				</div>
				<div class="header-top">
					<div class="container">
						<div class="header-top-info">
							
							<nav class="navbar navbar-default">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1" style ="padding-top: -5px;border-top-witdh: 0px; border-top-style:solid; margin-top:-50px;padding-bottom:10px;">
									<nav>
										<ul class="nav navbar-nav">
											<li><a href="register">Registro</a></li>
											<li class ="active"><a href="login">Login</a></li>
										</ul>
									</nav>
								</div>
								<!-- /.navbar-collapse -->
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="banner_text">
												<h3>Iniciar Sesi??n</h3>
                                                    <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-md-10">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <form method="POST" action="{{ route('login') }}">
                                                                            @csrf
                                                            <div class="form-group row">
                                                                <label for="email" class="col-md-4 col-form-label text-md-right"  style="color:white;">{{ __('E-Mail Address') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="password" class="col-md-4 col-form-label text-md-right" style="color:white;">{{ __('Password') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-10 offset-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                                        <label class="form-check-label" style="color:white;" for="remember">
                                                                            {{ __('Remember Me') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                    <button type="submit" class="btn btn-primary">
                                                                        {{ __('Login') }}
                                                                    </button>

                                                                    @if (Route::has('password.request'))
                                                                        <a class="btn btn-link" style="color:white;" href="{{ route('password.request') }}">
                                                                            {{ __('Forgot Your Password?') }}
                                                                        </a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">GAME <span>Solutions</span></h4>
				</div>
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<!-- //Registro -->
						<section class="form-register">
							<h4>Formulario Ingreso</h4>
							<input class="controls" type="email" name="correo" id="correo"
								placeholder="Ingrese su correo">
							<input class="controls" type="password" name="contrase??a" id="password"
								placeholder="Ingrese su Contrase??a">
							<button class="botons"  value="Iniciar" onclick="inicio()">
							<p>Iniciar Sesi??n</p>
						</section>
						<!-- //Registro -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->


	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-4 amet-sed">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<p>We are a group of gamers who know the market in its entirety, which we help our clients to get
						any piece of hardware or video console quickly and efficiently without having to visit
						suspicious or misleading pages, made by gamers for gamers. </p>
				</div>
				<div class="col-md-4 amet-sed amet-medium">
					<div class="footer-title">
						<h3>Twitter Feed</h3>
					</div>
					<p><a href="#">http://twitter.com</a> Visit our latest tweets to known the status of some products!
					</p>
					<p><a href="#">support@gamesolutions.com</a> ??Doubts? you can mail us and we will answer you as fast
						as possible. </p>
				</div>
				<div class="col-md-4 amet-sed ">
					<div class="footer-title">
						<h3>Follow Us</h3>
					</div>
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="facebook.com/juan8ad"><i class="fa fa-facebook"></i></a></li>
							<li><a href="twitter.com"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
					<div class="support">
						<form action="#" method="post">
							<input type="email" placeholder="Enter email...." required="">
							<input type="submit" value="Subscribe" class="botton">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p class="footer-class">?? 2020 GAME SOLUTIONS . All Rights Reserved | Design by <a
					href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>
	<!-- //copyright -->
	<script src="../js/jarallax.js"></script>
	<!-- <script src="js/SmoothScroll.min.js"></script> -->
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="../js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="../js/move-top.js"></script>
	<script type="text/javascript" src="../js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="../js/jquery.filterizr.js"></script>
	<script src="../js/controls.js"></script>
	<script type="text/javascript">
		$(function () {
			$('.filtr-container').filterizr();
		});
	</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
	<script src="../js/jquery.chocolat.js"></script>
	<script type="text/javascript">
		$(function () {
			$('.filtr-item a').Chocolat();
		});
	</script>
	<!-- //PopUp-Box-JavaScript -->

</body>



<div id="boton_flotante"><img src="https://icons.iconarchive.com/icons/dtafalonso/android-l/48/WhatsApp-icon.png"></div>

</html>
