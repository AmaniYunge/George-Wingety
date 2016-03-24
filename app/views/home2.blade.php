@extends('website')
@section('contents')
<section class="pageheader-default" style="background:url(img/7.jpg);">
	<div class="bgarea-semitransparent">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 class="landingpage animated fadeInLeftBig notransition" style="font-size:36px">George Wingety Ltd</h1>
					<h3 class="landingpage animated fadeInDownBig notransition">We bring Technology to your place</h3>
					<div class="btn-wrap animated fadeInUpBig notransition">
						<a class="btn btn-minimal" href="{{url('contact')}}">Get In Touch</a><span>or</span><a class="btn btn-minimal" href="{{url('projectdetail')}}">Learn more</a>
					</div>
				</div>
				<div class="col-md-6">
					<img src="{{asset('img/desktop3.png')}}" class="img-responsive animated fadeInRightBig notransition" alt="">
				</div>
			</div>
		</div>
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="{{asset('img/shp.png')}}" class="img-responsive" alt="">
		</div>
		<!-- INTRO NOTE
================================================== -->
		<section class="intro-note topspace10">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>George Wingety Ltd, <span class="colortext">We bring Technology</span> to your place.</h1>
					<p>
						 We undertake the business of making, fabricating and assembling concrete machines, construction equipments, <br>
						 any type of machines and equipment, plants, devices of all descriptions using modern and appopriate technology.
					</p>
				</div>
			</div>
		</div>
		</section>
		<!-- /.intro-note end-->
		<!-- SERVICE BOXES
================================================== -->
		<section class="service-box topspace10">
		<div class="container">
			<div class="row">
				<ul class="ca-menu">
					<li class="col-md-3 animated fadeInLeftNow notransition">
						<a href="">
					<div class="grey-box-icon">
						<div class="icon-box-top grey-box-icon-pos">
							<i class="fa fa-cogs fa-5x"></i>
						</div>
						<div class="ca-content">
							<h2 class="ca-main">Our Operation</h2>
							<h3 class="ca-sub">
								Take a closer look - see who does what and where - and find out how we are meeting the world's 
								rising technology needs.
								</h3>
						</div>
					</div>
					</a>
					</li>
					<li class="col-md-3 animated fadeInLeftNow notransition">
						<a href="">
					<div class="grey-box-icon">
						<div class="icon-box-top grey-box-icon-pos">
							<i class="fa fa-globe fa-5x"></i>
						</div>
						<div class="ca-content">
							<h2 class="ca-main">Technology Used</h2>
							<h3 class="ca-sub">
							We learn and new technologies for research discoveries and intellectual property, working with and guiding industry partners, and promoting the acceleration of startups
							</h3>
						</div>
					</div>
					</a>
					</li>
					<li class="col-md-3 animated fadeInRightNow notransition">
					<a href="">
					<div class="grey-box-icon active">
						<div class="icon-box-top grey-box-icon-pos">
							<i class="fa fa-users fa-5x"></i>
						</div>
						<div class="ca-content">
							<h2 class="ca-main">Team Work</h2>
							<h3 class="ca-sub">
							Keep every task involving our team in one place. Collaborate and work with our team in real time for real results.
							</h3>
						</div>
					</div>
					</a>
					</li>
					<li class="col-md-3 animated fadeInRightNow notransition">
						<a href="">
					<div class="grey-box-icon">
						<div class="icon-box-top grey-box-icon-pos">
							<i class="fa fa-trophy fa-5x"></i>
						</div>
						<div class="ca-content">
							<h2 class="ca-main">Our Goals</h2>
							<h3 class="ca-sub">
								We continue to expand our global footprint, both technologically and through acquisitions, to cover  key markets.
								 We also take the lead in innovation and in making our products and services more available to more customers than 
								 ever before.
								 </h3>
						</div>
					</div>
					</a>
					</li>
				</ul>
			</div>
		</div>
		</section>
		<!-- /.service-box end-->
		<!-- TESTIMONIALS
================================================== -->
		<section class="grayarea topspace40">
		<div class="container">
			<h1 class="small text-center animated fadeInLeftNow notransition">HAPPY CLIENTS</h1>
			<div class="br-hr type_short">
				<span class="br-hr-h animated fadeInRightNow">
				<i class="icon icon-pencil"></i>
				</span>
			</div>
			<div id="cbp-qtrotator" class="cbp-qtrotator animated fadeInUpNow notransition">
				<div class="cbp-qtcontent">
					<img src="{{asset('img/pass.jpg')}}" alt="" style="height:120px">
					<blockquote>
						<p class="bigquote">
							<i class="icon icon-quote colortext quoteicon"></i> 
							I am grateful to have found George at George Wingety Ltd. He provided excellent designs and work product. 
							His level of responsiveness and client service was exceptional. And he was a pleasure to work with.
							 I am incredibly happy with the designs and strongly recommend George Wingety Ltd to others.
						</p>
						<footer>Shadrack Emmanuel</footer>
					</blockquote>
				</div>
				<div class="cbp-qtcontent">
					<img src="{{asset('img/pass.jpg')}}" alt="" style="height:120px">
					<blockquote>
						<p class="bigquote">
							<i class="icon icon-quote colortext quoteicon colortext quoteicon"></i>
							 Quick and responsive to our companies needs, George Wingety Ltd. Has proven to be a 
							 consummate professional whom we've come to rely on.
						</p>
						<footer>John Kiiza</footer>
					</blockquote>
				</div>
			</div>
			<br/>
		</div>
		</section>
		<!-- /testimonials end-->
		<!-- SOME FEATURES
================================================== -->
		<section class="topspace30">
		<div class="container">
			<div class="row">
				<div class="col-md-4 animated fadeInLeftNow notransition">
					<div class="tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#aboutUs" data-toggle="tab"><i class="icon icon-star"></i> About Us</a></li>
							<li><a href="#special" data-toggle="tab">Special Machines</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="aboutUs">
								<p>
									<img src="{{asset('img/wingety.png')}}" class="round-image" style="width:80px;height:80px;" alt=""> 
							
								We undertake the business of making, fabricating and assembling concrete machines, construction equipments,
						 any type of machines and equipment, plants, devices of all descriptions using modern and appopriate technology.
						 </p>
							</div>
							<div class="tab-pane" id="special">
								<ul class="checklist unstyled">
									<li>Hand Fed Concrete Mixer</li>
									<li>Borehole Machines</li>
									<li>Block making machine</li>
									<li>Poker drive unit</li>
									<li>Ballmilling Machine</li>
									<li>Building Winch</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 home-features animated fadeInRightNow notransition">
					<div class="row">
						<div class="col-md-6">
							<h4><i class="icon icon-cogs"></i>Hand Fed Concrete Mixer</h4>
							<div class="bottomspace30">
								 Concrete Mixers are ruggedly built and take the punishment of this demanding application.
							</div>
						</div>
						<div class="col-md-6">
							<h4><i class="icon icon-cogs"></i>Borehole Machines</h4>
							 Designed to be tough, durable and highly reliable, providing safe,
								  clean water in some of the world’s most difficult environments... <br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h4><i class="icon icon-cogs">
							</i> Block making machine</h4>
							  Stabilised soil bricks technology offers a cost effective, environmentally sound masonry system. <br>
						</div>
						<div class="col-md-6">
							<h4><i class="icon icon-cogs">
							</i> Poker drive unit</h4>
							This drive unit is mainly used in conjunction vibrating poker needles, or a mechanical submersible pump. <br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h4><i class="icon icon-cogs">
							</i> Ballmilling Machine</h4>
							 A  ball mill is a type of grinder used to grind and blend materials for use in mineral dressing processes. <br>
						</div>
						<div class="col-md-6">
							<h4><i class="icon icon-cogs">
							</i> Building Winch</h4>
							Need to do some heavy lifting? Don't lay out big bucks for a winch. Our  winch will more than hold its own against commercials rigs. <br>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- /.home-features end-->
		<!-- RECENT PROJECTS 
================================================== -->
		<section class="grayarea recent-projects-home topspace30 animated fadeInUpNow notransition">
		<div class="container">
			<div class="row">
				<h1 class="small text-center topspace0">OUR MACHINES</h1>
				<p class="animated fadeInRightNow notransition text-center topspace20" style="font-size:17px; font-weight:500; color:#F54828">
					 George Wingety Ltd offers different types of machines for construction and mining activities. Make beautiful and eye catching site with George Wingety Ltd today!
				</p>
				<div class="text-center smalltitle">
				</div>
				<div class="col-md-12">
					<div class="list_carousel text-center">
						<div class="carousel_nav">
							<a class="prev" id="car_prev" href="#"><span>prev</span></a>
							<a class="next" id="car_next" href="#"><span>next</span></a>
						</div>
						<div class="clearfix">
						</div>
						<ul id="carousel-projects">
							<!--featured-projects 1-->
							<li>
							<div class="boxcontainer">
								<img src="{{asset('img/19.jpg')}}" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/19.jpg" title="George Wingety Ltd"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="{{url('projectdetail')}}">Poker Vibrator</a></h1>
								<p>
									George Wingety Ltd
								</p>
							</div>
							</li>
							<!--featured-projects 2-->
							<li>
							<div class="boxcontainer">
								<img src="{{asset('img/22.png')}}" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/22.png" title="George Wingety Ltd"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="{{url('projectdetail')}}">Plate Compactor</a></h1>
								<p>
									 George Wingety Ltd
								</p>
							</div>
							</li>
							<!--featured-projects 3-->
							<li>
							<div class="boxcontainer">
								<img src="{{asset('img/8.png')}}" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/8.png" title="George Wingety Ltd"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="{{url('projectdetail')}}">Jack Harmmer</a></h1>
								<p>
									 George Wingety Ltd
								</p>
							</div>
							</li>
							<!--featured-projects 4-->
							<li>
							<div class="boxcontainer">
								<img src="{{asset('img/13.png')}}" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/13.png" title="George Wingety Ltd"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="{{url('projectdetail')}}">Pressure Compressor</a></h1>
								<p>
									 George Wingety Ltd
								</p>
							</div>
							</li>
							<!--featured-projects 5-->
							<li>
							<div class="boxcontainer">
								<img src="{{asset('img/bollmill.jpg')}}" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/bollmill.jpg" title="George Wingety Ltd"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="{{url('projectdetail')}}">Ballmill</a></h1>
								<p>
									 George Wingety Ltd
								</p>
							</div>
							</li>
							<!--featured-projects 6-->
							<li>
							<div class="boxcontainer">
								<img src="{{asset('img/mixer1.jpg')}}" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/mixer1.jpg" title="George Wingety Ltd"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="{{url('projectdetail')}}">Concrete Mixer</a></h1>
								<p>
									 George Wingety Ltd
								</p>
							</div>
							</li>
							<!--featured-projects 7-->
							<li>
							<div class="boxcontainer">
								<img src="{{asset('img/pat.jpg')}}" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/pat.jpg" title="George Wingety Ltd"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="{{url('projectdetail')}}">Borehole Machine</a></h1>
								<p>
									 George Wingety Ltd
								</p>
							</div>
							</li>
							<!--featured-projects 8-->
							<li>
							<div class="boxcontainer">
								<img src="{{asset('img/win.jpg')}}" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/win.jpg" title="George Wingety Ltd"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="{{url('projectdetail')}}">Mining Winch</a></h1>
								<p>
									 George Wingety Ltd
								</p>
							</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		</section>		
		<!-- /.recent-projects-home end-->
@stop
