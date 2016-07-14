@extends('website')
@section('contents')

<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">Ball Mill</h1>
		<p class="animated fadeInRightBig notransition container page-description">
			 A ball mill works on the principle of impact and attrition: <br>
			size reduction is done by impact as the balls drop from near the top of the shell.
		</p>
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="{{asset('img/shp.png')}}" class="img-responsive" alt="">
		</div>
		<!-- PROJECT SLIDER
================================================== -->
		<div class="animated fadeInLeft notransition" style="margin-top:-40px;">
			<div class="carousel carousel-fade slide carousel-featuredwork projectdetail" id="carousel-featuredwork">
				<ol class="carousel-indicators">
					<li data-target="#carousel-featuredwork" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-featuredwork" data-slide-to="1" class=""></li>
					<li data-target="#carousel-featuredwork" data-slide-to="2" class=""></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="{{asset('img/bollmill.jpg')}}" alt="">
					</div>
					<div class="item">
						<img src="{{asset('img/bollmill2.jpg')}}" alt="">
					</div>
					<div class="item">
						<img src="{{asset('img/bollmill3.jpg')}}" alt="">
					</div>
				</div>
				<!-- /.carousel-inner -->
			</div>
		</div>
		<!-- PROJECT DESCRIPTION
================================================== -->
		<section class="container">
		<div class="row">
			<div class="col-md-8 animated fadeInLeft notransition">
				<h1 class="smalltitle">
				<span>Project Description</span>
				</h1>
				<p>
					<span class="drop-cap round">A</span> ball mill is a type of grinding mill, purposed similarly to the sag mill or other mining crushers. These machines are used to grind or mix metals or raw materials for further processing. 
					Various materials are placed into the mill drum and rotated with the mined materials that are to be crushed. The ball mill contains materials meant for crushing and grinding, such as balls of ceramic, small rocks, or balls made from stainless steel.
					 The internal device of the ball mill grinds material into powder-like substances, and can rotate continuously for optimal grinding and refinery production.
                     High Definition of a Mine Ball-Mill Picture</p>

                   <p>A ball mill can also be helpful in the process of cold welding, and produces alloys from powders when used in capacity for chemical processing. The ball mill technology is one that is designed for optimal cold refinery,
                    subjecting the machinery to a great deal of distress during use. Materials, parts, and mining equipment components must be in top working condition.  Mining equipments manufacturers entrust their high end and large mining equipment machinery to the best in the field.
                    </p>
				<p>
					<b>Year Creation</b>&nbsp;: 2015 <br/>
					<b>Client's Name</b>&nbsp;: Mr Nchimbi <br/>
					<b>Completion Time</b>&nbsp;: 2 Weeks
				</p>
			</div>
			<div class="col-md-4 animated fadeInRight notransition">
				<h1 class="smalltitle">
				<span>Testimonial</span>
				</h1>
				<blockquote>
					<p style="color: #F44828">
						This is what the client of the project said
					</p>
					<p>
						I am grateful to have found George at George Wingety Ltd. He provided excellent designs and work product.
						His level of responsiveness and client service was exceptional. And he was a pleasure to work with.
						I am incredibly happy with the designs and strongly recommend George Wingety Ltd to others.
					</p>
					<p>
						<small>Mr Nchimbi , Client of Project</small>
					</p>
				</blockquote>
			</div>
		</div>
		</section>
		<!--CALL TO ACTION PANEL
@stop
