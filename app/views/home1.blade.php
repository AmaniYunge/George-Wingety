@extends('website')
@section('contents')

	<section class="carousel carousel-fade slide home-slider" id="c-slide" data-ride="carousel" data-interval="4500" data-pause="false">
	<ol class="carousel-indicators">
		<li data-target="#c-slide" data-slide-to="0" class="active"></li>
		<li data-target="#c-slide" data-slide-to="1" class=""></li>
		<li data-target="#c-slide" data-slide-to="2" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active" style="background: url(img/weld.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-md-8 text-center">
						<br>
						<br>
						<div class="animated fadeInDownBig notransition">
							<span class="car-largetext">George Wingety Limited</span><br>
						</div>
						<br>
						<br>
						<div class="car-widecircle animated fadeInLeftBig notransition">
							<span>We</span>
						</div>
						<div class="car-middlecircle animated fadeInUpBig notransition">
							<span>Weld the</span>
						</div>
						<div class="car-smallcircle animated fadeInRightBig notransition">
							<span>World</span>
						</div>
						
					</div>
					</br>
					</br>
					</br>
					</br>
					</br>
					</br>
					<div class="col-md-4 animated fadeInDown  notransition topspace30 text-right">
						
						<div class="car-highlight1 animated fadeInLeftBig">
							 Industrial Machines Servicing
						</div>
						<br>
						<div class="car-highlight2 animated fadeInRightBig notransition">
							 Sandblasting
						</div>
						<br>
						<div class="car-highlight3 animated fadeInUpBig notransition">
							 Metal Fabrication
						</div>
						<br>
						
					</div>
				</div>
			</div>
		</div>
		<div class="item" style="background: url(img/slide4.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-md-6 fadein scaleInv anim_1">
						<div class="fadein scaleInv anim_2">
							<h1 class="carouselText1 animated fadeInUpBig" style="font-size:18px"> Building & Construction  Equipments</h1>
						</div>
						
						<div class="fadein scaleInv anim_2">
							<p class="carouselText3" style="color:black">
								<i class="icon-ok"></i> Concrete Mixer
							</p>
						</div>
						<div class="fadein scaleInv anim_3">
							<p class="carouselText3"  style="color:yellow">
								<i class="icon-ok"></i> Poker drive unit
							</p>
						</div>
						<div class="fadein scaleInv anim_4">
							<p class="carouselText3"  style="color:black">
								<i class="icon-ok"></i> Block making machine
							</p>
						</div>
						<div class="fadein scaleInv anim_5">
							<p class="carouselText3"  style="color:darkblue">
								<i class="icon-ok"></i> Pan Mixer
							</p>
						</div>
						<div class="fadein scaleInv anim_6">
							<p class="carouselText3"  style="color:orange">
								<i class="icon-ok"></i> Borehole Machines
							</p>
						</div>
						<div class="fadein scaleInv anim_7">
							<p class="carouselText3" style="color:darkblue">
								<i class="icon-ok"></i> Concrete & bricks building winch
							</p>
						</div>
						<div class="fadein scaleInv anim_8">
							<p class="carouselText3"  style="color:black">
								<i class="icon-ok"></i> Cubes
							</p>
						</div>
					</div>
					<div class="col-md-6 text-center fadein scaleInv anim_2">
						<div class="text-center">
							<div class="fadein scaleInv anim_3">
								<img src="{{asset('img/slide1-3.png')}}" alt="" class="slide1-3 animated rollIn">
							</div>
							<div class="fadein scaleInv anim_8">
								<img src="{{asset('img/slide1-1.png')}}" alt="" class="slide1-1 animated rollIn">
							</div>
							<div class="fadein scaleInv anim_5">
								<img src="{{asset('img/slide1-2.png')}}" alt="" class="slide1-2 animated rollIn">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item" style="background: url(img/slide1.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-md-6 animated fadeInUp notransition">
						<img src="{{asset('img/desktop3.png')}}" alt="" style="width:90%;">
					</div>
					<div class="col-md-6 animated fadeInDown  notransition topspace30 text-right">
						<div class="fadein scaleInv anim_2">
							<h1 class="carouselText1 animated fadeInUpBig" style="font-size:18px"> Fabricating Mining Equipments</h1>
						</div>
						<div class="car-highlight1 animated fadeInLeftBig">
							 Mining Winch
						</div>
						<br>
						<div class="car-highlight2 animated fadeInRightBig notransition">
							 Local Ball Mill
						</div>
						<br>
						<div class="car-highlight3 animated fadeInUpBig notransition">
							 Hand Fed Concrete Mixer
						</div>
						<br>
						<div class="car-highlight4 animated flipInX notransition">
							Assembling of Jawcrusher
						</div>
						<br>
						<!--<div class="car-highlight5 animated rollIn notransition">
							 Slider with <span class="font100">Total Control    </span><br>
							<span class="font100" style="font-size:20px;">Embed Practically</span> Anything<br>
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.carousel-inner -->
	<a class="left carousel-control animated fadeInLeft" href="#c-slide" data-slide="prev"><i class="fa fa-angle-left"></i></a>
	<a class="right carousel-control animated fadeInRight" href="#c-slide" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</section>
	<!-- /.carousel end-->
	
	<!-- /.wrapsemibox start-->
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="{{asset('img/shp.png')}}" class="img-responsive" alt="">
		</div>
		<!-- INTRO NOTE-->
		<section class="intro-note topspace10">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>George Wingety Ltd, <span class="colortext">We Weld</span> the World.</h1>
					<p>
						 We undertake the business of making, fabricating and assembling concrete machines, construction equipments, <br>
						 any type of machines and equipment, plants, devices of all descriptions using modern and appopriate technology.
					</p>
				</div>
			</div>
		</div>
		</section>
		<!-- /.intro-note end-->
		<!-- SERVICE BOXES-->
		<section class="service-box topspace30">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center animated fadeInLeftNow notransition">
					<div class="icon-box-top">
						<i class="fontawesome-icon medium circle-white center icon-building"></i>
						<h1>Metal Fabrication</h1>
						<p>
							 Concrete Mixers are ruggedly built and take the punishment of this demanding application.
							 Heavy-duty frame, drum yoke and drum assemblies are long-wearing and matched to anticipated stresses and loads
						</p>
						<p class="fontupper">
							<a href="{{url('mixer')}}" class="readmore">Read More <i class="icon-double-angle-right"></i></a>
						</p>
					</div>
				</div>
				<div class="col-md-3 text-center animated fadeInLeftNow notransition">
					<div class="icon-box-top">
						<i class="fontawesome-icon medium circle-white center icon-cogs"></i>
						<h1>Construction Equipments</h1>
						<p>
							Our equipment is well suited to miners producing 0.5 Tonnes per hour to 5 Tonnes per hour. We offer free advice to our broade range
							customers on the most efficient manner in which to mine their reserve they be precious or Base Metals
						</p>
						<p class="fontupper">
							<a href="{{url('winch')}}" class="readmore">Read More <i class="icon-double-angle-right"></i></a>
						</p>
					</div>
				</div>
				<div class="col-md-3 text-center animated fadeInRightNow notransition">
					<div class="icon-box-top ">
						<i class="fontawesome-icon medium circle-white center icon-circle"></i>
						<h1>Protective Coating</h1>
						<p>
							 A  ball mill is a type of grinder used to grind and blend materials for use in mineral dressing processes, paints, pyrotechnics, ceramics and selective laser sintering.
						</p>
						<p class="fontupper">
							<a href="{{url('bollmill')}}" class="readmore">Read More <i class="icon-double-angle-right"></i></a>
						</p>
					</div>
				</div>
				<div class="col-md-3 text-center animated fadeInRightNow notransition">
					<div class="icon-box-top">
						<i class="fontawesome-icon medium circle-white center icon-gear"></i>
						<h1>Industrial Servicing</h1>
						<p>
							Stabilised soil bricks technology offers a cost effective, environmentally sound masonry system.
						</p>
						<p class="fontupper">
							<a href="{{url('hydroform')}}" class="readmore">Read More <i class="icon-double-angle-right"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- /.service-box end-->
		<!-- RECENT WORK-->
		<section class="home-portfolio bgarea topspace30">
		<div class="bgarea-semitransparent">
			<div class="container">
				<h1 class="small text-center animated fadeInLeftNow notransition">FEATURED WORK</h1>
				<p class="animated fadeInRightNow notransition text-center topspace20" style="font-size:17px; font-weight:500; color:#F54828">
					 George Wingety Ltd offers different types of machines for construction and mining activities. Make beautiful and eye catching site with George Wingety Ltd today!
				</p>
				<br/>
				<div class="row">
					<div class="col-md-6 animated fadeInLeftNow notransition">
						<div class="carousel carousel-fade slide carousel-featuredwork" id="carousel-featuredwork">
							<ol class="carousel-indicators">
								<li data-target="#carousel-featuredwork" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-featuredwork" data-slide-to="1" class=""></li>
								<li data-target="#carousel-featuredwork" data-slide-to="2" class=""></li>
								<li data-target="#carousel-featuredwork" data-slide-to="3" class=""></li>
							</ol>
							<div class="carousel-inner" style="margin-top:-20px;">
								<div class="item active">
									<img src="{{asset('img/slide1-1.png')}}" alt="">
								</div>
								<div class="item">
									<img src="{{asset('img/desktop3.png')}}" alt="">
								</div>
								<div class="item">
									<img src="{{asset('img/desktop2.png')}}" alt="">
								</div>
								<div class="item">
									<img src="{{asset('img/desktop4.png')}}" alt="">
								</div>
							</div>
							<!-- /.carousel-inner -->
						</div>
					</div>
					<div class="col-md-6 animated fadeInRightNow notransition">
						<ul class="icons">
							<li>
							<h4><i class="icon icon-cog"></i>Hand Fed Concrete Mixer</h4>
							<p>
								  Concrete Mixers are ruggedly built and take the punishment of this demanding application. 
							</p>
							</li>
							<li>
							<h4><i class="icon icon-cog"></i>Borehole Machines</h4>
							<p>
								 Designed to be tough, durable and highly reliable, providing safe,
								  clean water in some of the world’s most difficult environments, where inferior rigs will simply not
								   cope. Its hydraulic rotary and cable percussion water well rigs to a diverse range of organisations.
								    </p>
							</li>
							<li>
							<h4><i class="icon icon-cog"></i>Building Winch</h4>
							<p>
								Need to do some heavy lifting? Don't lay out big bucks for a winch. Our  winch will more than hold its own against commercials rigs.
							</p>
							</li>
							<li>
							<h4><i class="icon icon-cog"></i>Block making machine</h4>
							<p>
								 Stabilised soil bricks technology offers a cost effective, environmentally sound masonry system.
							</p>
							</li>
							<li>
							<h4><i class="icon icon-cog"></i>Poker drive unit</h4>
							<p>
								This drive unit is mainly used in conjunction vibrating poker needles, or a mechanical submersible pump.
							</p>
							</li>
							<li>
							<h4><i class="icon icon-cog"></i>Ballmilling Machine</h4>
							<p>
								A  ball mill is a type of grinder used to grind and blend materials for use in mineral dressing processes.
							</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- /.recent-work end-->
		
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
								<img src="{{asset('img/roller.jpg')}}" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/roller.jpg" title="George Wingety Ltd"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="{{url('projectdetail')}}">Hand roller</a></h1>
								<p>
									 George Wingety Ltd
								</p>
							</div>
							</li>
							<!--featured-projects 4-->
							<li>
							<div class="boxcontainer">
								<img src="{{asset('img/compressor.jpg')}}" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/compressor.jpg" title="George Wingety Ltd"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="{{url('projectdetail')}}">Pressure Compressor</a></h1>
								<p>
									 George Wingety Ltd
								</p>
							</div>
							</li>
							<!--featured-projects 4-->
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
@stop
