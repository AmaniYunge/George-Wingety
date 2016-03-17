@extends('website')
@section('contents')
<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">About Us</h1>
		<p class="animated fadeInRightBig  notransition container page-description">
		 We undertake the business of making, fabricating and assembling concrete machines, construction equipments, <br>
			 any type of machines and equipment, plants, devices of all descriptions using modern and appopriate technology.
		</p>
	</div>
	</section>
		<!-- ABOUT
================================================== -->
		<section class="container">
		<div class="row">
			<div class="col-md-6 animated anim-slide notransition">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Our Mission</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Our Vision</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Our Goals</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="http://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
            </div>
            </div>
    </div>
			<div class="col-md-6 animated anim-fade notransition">
				<div class="about-article">
					<img alt="" src="{{asset('img/pass.jpg')}}" class="img-responsive" style="Width:350px; height:400px">
				</div>
			</div>
		</div>
		</section>
		
		<!-- TEAM
================================================== -->
		<section class="container animated fadeInDownNow notransition topspace10">
		<div class="row">
			<h1 class="text-center smalltitle">
			<span>Who's Behind</span>
			</h1>
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="{{asset('img/34.jpg')}}" alt="">
					<div class="caption">
						<h4>George C. Mtey</h4>
						<span class="primarycol">- C.E.O at Company -</span>
						<p>
						</p>
						<ul class="social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="{{asset('img/34.jpg')}}" alt="">
					<div class="caption">
						<h4>Baraka Mbega</h4>
						<span class="primarycol">- Director & Architecturer at Company -</span>
						<p>
						</p>
						<ul class="social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="{{asset('img/34.jpg')}}" alt="">
					<div class="caption">
						<h4>Amani Y. Yunge</h4>
						<span class="primarycol">- PIT Director at Company -</span>
						<p>
						</p>
						<ul class="social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		</section>
	

@stop
