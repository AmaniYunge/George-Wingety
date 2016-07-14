@extends('website')
@section('contents')

<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">Mining Winch</h1>
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
						<img src="{{asset('img/winch.jpg')}}" alt="">
					</div>
					<div class="item">
						<img src="{{asset('img/winch1.jpg')}}" alt="">
					</div>
					<div class="item">
						<img src="{{asset('img/winch3.jpg')}}" alt="">
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
					<span class="drop-cap round">T</span>he key to any successful operation is having the right tools.
					This guide will walk you through basic mining equipment that a small scale miner will need.
					Fortunately most of the tools used today are cheaper and more effective than the tools used during the
					late 1800s and early 1900s. Our equipment is well suited to miners producing 0.5 Tonnes per hour to 5 Tonnes per hour. We offer free advice to our broade range
					customers on the most efficient manner in which to mine their reserve they be precious or Base Metals.
				</p>
				<p>
					<b>Year Creation</b>&nbsp;: 2014 <br/>
					<b>Client's Name</b>&nbsp;: Yusuph Eliah <br/>
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
						We had been looking for small scale mining winch for several months, but the few ones I got in touch with never
						seemed able to meet our taste. Finally, when I discovered George Wingety Ltd through a my friends, it appeared likely
						that such a passionate manufacturer would be the partner we had been looking for — which became obvious as soon
						as we started working together.
						</p>
					<p>
						<small>Yusuph Eliah , Client of Project</small>
					</p>
				</blockquote>
			</div>
		</div>
		</section>
		<!--CALL TO ACTION PANEL
@stop
