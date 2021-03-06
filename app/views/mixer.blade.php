@extends('website')
@section('contents')

<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">Concrete Mixer</h1>
		<p class="animated fadeInRightBig notransition container page-description">
			For smaller volume works portable concrete mixers are often used so that the concrete can be made at the construction site
		</p>
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="../../public/img/shp.png" class="img-responsive" alt="">
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
						<img src="{{asset('img/mixer.jpg')}}" alt="">
					</div>
					<div class="item">
						<img src="{{asset('img/mixer.jpg')}}" alt="">
					</div>
					<div class="item">
						<img src="{{asset('img/mixer.jpg')}}" alt="">
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
					<span class="drop-cap round">A</span>concrete mixer (also commonly called a cement mixer) is a device that homogeneously combines cement, 
					aggregate such as sand or gravel, and water to form concrete. A typical concrete mixer uses a revolving drum to mix the components. 
					For smaller volume works portable concrete mixers are often used so that the concrete can be made at the construction site, 
					giving the workers ample time to use the concrete before it hardens. An alternative to a machine is mixing concrete by hand. 
					This is usually done in a wheelbarrow; however, several companies have recently begun to sell modified tarps for this purpose.
					</p>
				<p>
					<b>Year Creation</b>&nbsp;: 2014 <br/>
					<b>Client's Name</b>&nbsp;: Caspian (T) Ltd<br/>
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
					<p>Quick and responsive to our companies needs, George Wingety Ltd. Has proven to be a
					consummate professional whom we've come to rely on.</p>
					<p>
						<small>John Kiiza , Client of Project</small>
					</p>
				</blockquote>
			</div>
		</div>
		</section>
		<!--CALL TO ACTION PANEL
@stop
