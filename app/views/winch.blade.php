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
					<span class="drop-cap round">M</span>ining Winch voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.
				</p>
				<p>
					 At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident
				</p>
				<p>
					Irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>
					<b>Year Creation</b>&nbsp;: 2014 <br/>
					<b>Client's Name</b>&nbsp;: John Doe <br/>
					<b>Web Category</b>&nbsp;: Shop Online <br/>
					<b>Our Contribution</b>&nbsp;: Script &amp; SEO <br/>
					<b>Completion Time</b>&nbsp;: 35 Days
				</p>
			</div>
			<div class="col-md-4 animated fadeInRight notransition">
				<h1 class="smalltitle">
				<span>Testimonial</span>
				</h1>
				<blockquote>
					<p>
						This is what the client of the project said
					</p>
					<p>
						If you're not failing every now and again, it's a sign you're not doing anything very innovative. If my films don't show a profit, I know I'm doing something right.
					</p>
					<p>
						Praesent WowThemes Sapien, A Vulputate Enim Auctor Vitae Duis non lorem porta, adipiscing eros sit amet, tempor sem. Donec nunc arcu, semper a tempus et, consequat
					</p>
					<p>
						<small>Mark Zolinger , Client of Project</small>
					</p>
				</blockquote>
			</div>
		</div>
		</section>
		<!--CALL TO ACTION PANEL
@stop
