<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>George Wingety Ltd</title>
<!-- Style -->
 {{ HTML::style("css/bootstrap.css") }}
 {{ HTML::style("css/style.css") }}
 {{ HTML::style("font-awesome/css/font-awesome.css") }}
 {{ HTML::style("css/responsive.css") }}
 {{ HTML::style("css/layout-semiboxed.css") }}
 {{ HTML::style("css/skin-red.css") }}
<!-- Favicon -->
<link rel="shortcut icon" href="img/favicon.ico">
<!-- IE -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>	   
    <![endif]-->
<!--[if lte IE 8]>
	<link href="css/ie8.css" rel="stylesheet">
	 <![endif]-->
</head>
<body class="off">
<!-- /.wrapbox start-->
<div class="wrapbox">
	<!-- TOP AREA
================================================== -->
	<section class="toparea">
	<div class="container">
		<div class="row">
			<div class="col-md-6 top-text pull-left animated fadeInLeft" style="color:#05397B">
				<i class="fa fa-phone"></i> Phone: <strong>+255 22 246 0155</strong> <span class="separator"></span><i class="fa fa-envelope"></i> Email: <a href="#"><strong>georgewingetyltd@gmail.com</strong></a>
			</div>
			<div class="col-md-6 text-right animated fadeInRight">
				<div class="social-icons">
					<a class="icon" href="#"><i class=" fa fa-facebook"></i></a>
					<a class="icon" href="#"><i class=" fa fa-google-plus"></i></a>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- /.toparea end-->
	<!-- NAV-->
	<nav class="navbar navbar-fixed-top wowmenu" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand logo-nav" href="{{url('/')}}"><img src="{{asset('img/logo.png')}}" alt="logo"></a>
		</div>
		<ul id="nav" class="nav navbar-nav pull-right">
			<li class="dropdown active">
			<a href="{{url('/')}}" class="dropdown-toggle" data-toggle="dropdown">Home<i class="fa fa-angle-down"></i></a>
			<ul class="dropdown-menu">
				<li><a href="{{url('home2')}}">Home Alt</a></li>
				<li><a href="{{url('about')}}">About Us</a></li>
				<!---<li><a href="{{url('testimonials')}}">Testimonials</a></li>-->
				<!---<li><a href="{{url('faq')}}">F.A.Q.</a></li>-->
			</ul>
			</li>
			<li><a href="{{url('services')}}">Services</a></li>
			<li><a href="{{url('portifolio')}}">Machines</a></li>
			<!---<li><a href="{{url('blog')}}">Blog</a></li>-->
			<li><a href="{{url('contact')}}">Contact</a></li>
		</ul>		
	</div>	
	</nav>
	<!-- /nav end-->
	<!-- CAROUSEL-->


@yield('contents')

		<section class="container animated fadeInDownNow notransition topspace40">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<p class="bigtext">
						 Be part of <span class="fontpacifico colortext">George Wingety Ltd</span> to bring technology to the doors of our clients. 
					<p>
						 If you're not failing every now and again, it's a sign you're not doing anything very innovative.
					</p>
				</div>
				<div class="text-center topspace20">
					<a href="{{url('contact')}}" class="buttonblack"><i class="fa fa-phone"></i>&nbsp; Get in Touch</a>
				</div>
			</div>
		</div>
		</section>
		<!-- /. end call to action-->
	</div>
	<!-- /.wrapsemibox end-->
	<!-- BEGIN FOOTER
================================================== -->
	<section>
	<div class="footer">
		<div class="container animated fadeInUpNow notransition">
			<div class="row">
				<div class="col-md-4">
					<h1 class="footerbrand">George Wingety Ltd</h1>
					<p>
						 We undertake the business of making, fabricating and assembling concrete machines, construction equipments, <br>
						 any type of machines and equipment, plants, devices of all descriptions using modern and appopriate technology.
						 </p>
					<img src="{{asset('img/wingety.png')}}" alt="" style="height:90px; width:60px">
				</div>
				<div class="col-md-5">
					<h1 class="title"><span class="colortext">F</span>ind <span class="font100">Us</span></h1>
					<div class="footermap">
						<p>
							<strong>Address: </strong> P.O BOX 31468 - Sum-Nujoma Rd,Sinza "C", Dar es salaam
						</p>
						<p>
							<strong>Phone: </strong> +255 784 771 675<br><strong>Phone2: </strong> +255 714 881 391
						</p>
						<p>
							<strong>Tel: </strong> +255 22 246 0155
						</p>
						<p>
							<strong>Email: </strong> georgewingetyltd@gmail.com
						</p>
						<ul class="social-icons list-soc">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<h1 class="title"><span class="colortext">C</span>lients' <span class="font100">Voice</span></h1>
					<div id="quotes">
						<div class="textItem">
							<div class="avatar">
								<img src="{{asset('img/22.png')}}" alt="avatar">
							</div>
							 I am grateful to have found George at George Wingety Ltd. He provided excellent designs and work product. 
							His level of responsiveness and client service was exceptional. And he was a pleasure to work with.
							 I am incredibly happy with the designs and strongly recommend George Wingety Ltd to others.
							  <span style="font-family:arial;"></span><br/><b>Yusuph Eliah </b>
						</div>
						<div class="textItem">
							<div class="avatar">
								<img src="{{asset('img/3.png')}}" alt="avatar">
							</div>
							  Quick and responsive to our companies needs, George Wingety Ltd. Has proven to be a 
							 consummate professional whom we've come to rely on.
							 <span style="font-family:arial;"></span><br/><b>John Kiiza </b>
						</div>
					</div>
					<div class="clearfix">
					</div>
				</div>
				<!--<div class="col-md-3">
					<h1 class="title"><span class="colortext">Q</span>uick <span class="font100">Message</span></h1>
					<div class="done">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Your message has been sent. Thank you!
						</div>
					</div>
					<form method="post" action="contact.php" id="contactform">
						<div class="form">
							<input class="col-md-6" type="text" name="name" placeholder="Name">
							<input class="col-md-6" type="text" name="email" placeholder="E-mail">
							<textarea class="col-md-12" name="comment" rows="4" placeholder="Message"></textarea>
							<input type="submit" id="submit" class="btn" value="Send">
						</div>
					</form>
				</div>-->
			</div>
		</div>
	</div>
	<p id="back-top">
		<a href="#top"><span></span></a>
	</p>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="pull-left">
						 &copy; Copyright 2015 George Wingety Ltd
					</p>
				</div>
				<div class="col-md-8">
					<ul class="footermenu pull-right">
						<li><a href="{{url('/')}}">>Home</a></li>
						<li><a href="{{url('services')}}">Services</a></li>
						<li><a href="{{url('portifolio')}}">Machines</a></li>
						<!--<li><a href="{{url('/')}}">Blog</a></li>-->
						<li><a href="{{url('contact')}}">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- /footer section end-->
</div>
<!-- /.wrapbox ends-->
<!-- SCRIPTS, placed at the end of the document so the pages load faster
================================================== -->
  {{ HTML::script("js/jquery.js") }}
  {{ HTML::script("js/bootstrap.js") }}
  {{ HTML::script("js/plugins.js") }}
  {{ HTML::script("js/common.js") }}
  
	<script>
	$(window).load(function(){			
		$('#carousel-projects').carouFredSel({
		responsive: true,
		items       : {
        width       : 200,
        height      : 295,
        visible     : {
            min         : 1,
            max         : 4
        }
    },
		width: '200px',
		height: '295px',
		auto: true,
		circular	: true,
		infinite	: false,
		prev : {
			button		: "#car_prev",
			key			: "left",
				},
		next : {
			button		: "#car_next",
			key			: "right",
					},
		swipe: {
			onMouse: true,
			onTouch: true
			},
		scroll: {
        easing: "",
        duration: 1200
    }
	});
		});
</script>
<script>
	//CALL TESTIMONIAL ROTATOR
	$( function() {
		/*
		- how to call the plugin:
		$( selector ).cbpQTRotator( [options] );
		- options:
		{
			// default transition speed (ms)
			speed : 700,
			// default transition easing
			easing : 'ease',
			// rotator interval (ms)
			interval : 8000
		}
		- destroy:
		$( selector ).cbpQTRotator( 'destroy' );
		*/
		$( '#cbp-qtrotator' ).cbpQTRotator();
	} );
</script>
<script>
	//CALL PRETTY PHOTO
	$(document).ready(function(){
		$("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools:'', animation_speed: 'normal' , theme: 'dark_rounded'});
	});
</script>
<script>
	//MASONRY
	$(document).ready(function(){
	var $container = $('#content');
	  $container.imagesLoaded( function(){
		$container.isotope({
		filter: '*',	
		animationOptions: {
		 duration: 750,
		 easing: 'linear',
		 queue: false,	 
	   }
	});
	});
	$('#filter a').click(function (event) {
		$('a.selected').removeClass('selected');
		var $this = $(this);
		$this.addClass('selected');
		var selector = $this.attr('data-filter');
		$container.isotope({
			 filter: selector
		});
		return false;
	});
	});
</script>
<script>
//ROLL ON HOVER
	$(function() {
	$(".roll").css("opacity","0");
	$(".roll").hover(function () {
	$(this).stop().animate({
	opacity: .8
	}, "slow");
	},
	function () {
	$(this).stop().animate({
	opacity: 0
	}, "slow");
	});
	});
</script>
</body>
</html>
