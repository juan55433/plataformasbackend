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
	<link href="<?php echo url('/');?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// bootstrap-css -->
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
											<li class="active"><a href="index">Home</a></li>
												<li><a href="sony">Sony</a></li>
												<li><a href="microsoft">Microsoft</a></li>
												<li><a href="pc">PC</a></li>
											<li><a href="contactus">Contacto</a></li>
											<li><a href="api">Api</a></li>
											<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
											<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
											</form>
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



									</ul>
								</div>
								<div class="clearfix"> </div>
								<script src="<?php echo url('/');?>/js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
										// Slideshow 4
										$("#slider4").responsiveSlides({
											auto: true,
											pager: true,
											nav: true,
											speed: 500,
											namespace: "callbacks",
											before: function () {
												$('.events').append("<li>before event fired.</li>");
											},
											after: function () {
												$('.events').append("<li>after event fired.</li>");
											}
										});

									});
								</script>
								<!--banner Slider starts Here-->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->

	<div id="resultado">
	<script>
			$(function () {
				fetch('https://rickandmortyapi.com/api/character').then(x =>
					x.json().then(response => {
						var ans = "";
						ans += "<button class='btn btn-primary' type='button'style='white-space:pre-wrap;width:100px;margin:20px' onclick='agregarPorNombre()'>";
						ans += "Agregar Nuevo Personaje</button>";
						ans += "<div id='agregado'></div>"
						for (var i in response.results) {
							console.log('dentro del for')
							console.log(response.results[i])
							temp = response.results[i];

							ans += "<div class= 'usuario' id='"+temp.id+"'><img class = 'img-circle' src='" + temp.image + "' />";
							ans += "<p>";
							ans += temp.name;
							ans += "</p><button class='btn btn-danger' type='button' style='margin-bottom: 20px' onclick='eliminar("+temp.id+")'>Eliminar personaje</button></div>";
						}

						resultado.innerHTML = ans;

					}

					))
			})
			function agregarPorNombre (){
				var random = Math.floor(Math.random() * (671 - 1) + 1);
				console.log("random ="+random);
				fetch('https://rickandmortyapi.com/api/character/'+random).then(x =>
					x.json().then(response => {
						var ans = "";
						temp = response;
						console.log(temp.name);
						ans += "<div class= 'usuario' id='"+temp.id+"'><img class = 'img-circle' src='" + temp.image + "' />";
						ans += "<p>";
						ans += temp.name;
						ans += "</p><button class='btn btn-danger' type='button' style='margin-bottom: 20px' onclick='eliminar("+temp.id+")'>Eliminar personaje</button></div>";
						$("#agregado").append(ans)
					}

					))
			}
			function eliminar(id){
				$("#"+id).remove();
			}
		</script>
	</div>
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
	<script src="<?php echo url('/');?>/js/login.js"></script>
</body>



<div id="boton_flotante"><img src="https://icons.iconarchive.com/icons/dtafalonso/android-l/48/WhatsApp-icon.png"></div>

</html>
