<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Gaming Store a Games Category Bootstrap responsive Website Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Gaming Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link href="<?php echo url('/');?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// bootstrap-css -->
	<!-- MODAL -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- css -->
	<link rel="stylesheet" href="<?php echo url('/');?>/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo url('/');?>/css/signup.css" type="text/css" media="all" />
	<!--// css -->
	<!-- font-awesome icons -->
	<link href="<?php echo url('/');?>/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- portfolio -->
	<link rel="stylesheet" href="<?php echo url('/');?>/css/chocolat.css" type="text/css" media="all">
	<!-- //portfolio -->
	<!-- font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
		rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300'
		rel='stylesheet' type='text/css'>
	<!-- //font -->
	<script src="<?php echo url('/');?>/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo url('/');?>/js/main.js"></script>
	<script src="<?php echo url('/');?>/js/bootstrap.js"></script>
	<script src="<?php echo url('/');?>/js/registro.js">
	</script>
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
	<div class="banner-register">
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
											
											<li class ="active"><a href="register">Registro</a></li>
											<li><a href="login">Login</a></li>
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
												<h3>Bienvenido</h3>
												<p>Reg??strate para iniciar tu experiencia.</p>
												<div class="container">
                                                    <div class="row ">
                                                        <div class="col-md-10">
                                                            <div class="card">

                                                                <div class="card-body">
                                                                    <form method="POST" action="{{ route('register') }}">
                                                                        @csrf

                                                                        <div class="form-group row">
                                                                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color:white;">{{ __('Name') }}</label>

                                                                            <div class="col-md-6">
                                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                                                @error('name')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="email" class="col-md-4 col-form-label text-md-right"  style="color:white;">{{ __('E-Mail Address') }}</label>

                                                                            <div class="col-md-6">
                                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                                                @error('email')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color:white;" >{{ __('Password') }}</label>

                                                                            <div class="col-md-6">
                                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                                                @error('password')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color:white;">{{ __('Confirm Password') }}</label>

                                                                            <div class="col-md-6">
                                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                                            </div>
                                                                        </div>

                                                                                <button type="submit" class="btn btn-primary">
                                                                                    {{ __('Register') }}
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
								<!--banner Slider starts Here-->
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
						<img src="images/rgst.jpg" alt="" />
						<p></p>
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
						<h3>Sobre Nosotros</h3>
					</div>
					<p>Somos un grupo de gamers que conocemos el mercado en su totalidad, el cual ayudamos a nuestros
						clientes a conseguir cualquier pieza de hardware o videoconsola de manera r??pida y eficiente sin
						tener que visitar p??ginas sospechosas o enga??osas, Game Solutions est?? hecha por gamers para
						gamers. </p>
				</div>
				<div class="col-md-4 amet-sed amet-medium">
					<div class="footer-title">
						<h3>Cr??ditos</h3>
					</div>
					<p><a href="mailto:juan.ochoad@upb.edu.co">juan.ochoad@upb.edu.co</a></p>
					<p><a href="mailto:daniel.arboleda@upb.edu.co">daniel.arboleda@upb.edu.co</a> </p>
				</div>
				<div class="col-md-4 amet-sed ">
					<div class="footer-title">
						<h3>S??guenos</h3>
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
	<script src="<?php echo url('/');?>/js/jarallax.js"></script>
	<!-- <script src="js/SmoothScroll.min.js"></script> -->
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="<?php echo url('/');?>/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="<?php echo url('/');?>/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo url('/');?>/js/easing.js"></script>
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
	<script src="<?php echo url('/');?>/js/jquery.filterizr.js"></script>
	<script src="<?php echo url('/');?>/js/controls.js"></script>
	<script type="text/javascript">
		$(function () {
			$('.filtr-container').filterizr();
		});
	</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
	<script src="<?php echo url('/');?>/js/jquery.chocolat.js"></script>
	<script type="text/javascript">
		$(function () {
			$('.filtr-item a').Chocolat();
		});
	</script>
	<!-- //PopUp-Box-JavaScript -->

    <div id="boton_flotante"><img src="https://icons.iconarchive.com/icons/dtafalonso/android-l/48/WhatsApp-icon.png"></div>
</body>
