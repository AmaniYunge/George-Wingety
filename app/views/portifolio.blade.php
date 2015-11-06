@extends('website')
@section('contents')

<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInDown">Portfolio </h1>
		<p class="animated fadeInUp container page-description">
			 Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br>
			 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		</p>
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>
		<!-- PORTFOLIO
================================================== -->
		<section class="container">
		<!-- MASONRY ITEMS START
	================================================== -->
		<!-- Filtering Menu
	================================================== -->
		<div class="row">
			<div class="col-md-12 text-center">
				<div id="filter"class="animated fadeInRight">
					<ul>
						<li><a href="" data-filter="*" class="selected"><i class="icon icon-reorder"></i> All Items</a></li>
						<li><a href="" data-filter=".cat1"><i class="icon icon-th-large"></i> Landscape</a></li>
						<li><a href="" data-filter=".cat2"><i class="icon icon-th-list"></i> Overview</a></li>
						<li><a href="" data-filter=".cat3"><i class="icon icon-th"></i> Green Nature</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END filtering menu -->
		<div id="content">
			<!-- box 1 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/1.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/1.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="projectdetail.html">La Chaux De Fonds</a></h1>
					<p>
						 Swiss city in Jura mountains
					</p>
				</div>
			</div>
			<!-- box 2 -->
			<div class="boxportfolio3 item cat1">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/2.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/2.jpg" title="Taj Mahal"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Taj Mahal</a></h1>
					<p>
						 one of the eight wonders
					</p>
				</div>
			</div>
			<!-- box 3 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/3.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/3.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Versailles, France</a></h1>
					<p>
						 Cotelle Gallery
					</p>
				</div>
			</div>
			<!-- box 4 -->
			<div class="boxportfolio3 item cat1">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/4.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/4.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">St Petersburg, Russia</a></h1>
					<p>
						 water fountain
					</p>
				</div>
			</div>
			<!-- box 5 -->
			<div class="boxportfolio3 item cat2">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/5.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/5.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Grunge Architecture</a></h1>
					<p>
						 ancient style Europe
					</p>
				</div>
			</div>
			<!-- box 6 -->
			<div class="boxportfolio3 item cat2">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/6.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/6.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">France Building</a></h1>
					<p>
						 old towers architecture
					</p>
				</div>
			</div>
			<!-- box 7 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/7.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/7.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Hall in Tirol</a></h1>
					<p>
						 town in Tyrol, Austria
					</p>
				</div>
			</div>
			<!-- box 8 -->
			<div class="boxportfolio3 item cat1">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/8.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/8.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Opéra-Théatre de Metz</a></h1>
					<p>
						 opera house in France
					</p>
				</div>
			</div>
			<!-- box 9 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/9.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/9.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">The Palace of Charles V</a></h1>
					<p>
						 construction in Granada, Spain
					</p>
				</div>
			</div>
			<!-- box 10 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/10.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/10.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Hamburg, Germany</a></h1>
					<p>
						 City Hall
					</p>
				</div>
			</div>
			<!-- box 11 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/11.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/11.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Washington Dc</a></h1>
					<p>
						 water fountain
					</p>
				</div>
			</div>
			<!-- box 12 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/12.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/12.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Bas-Rhin</a></h1>
					<p>
						 department of France
					</p>
				</div>
			</div>
			<!-- box 13 -->
			<div class="boxportfolio3 item cat2 cat1">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/13.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/13.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Rome, Italy</a></h1>
					<p>
						 Fontana di Trevi
					</p>
				</div>
			</div>
			<!-- box 14 -->
			<div class="boxportfolio3 item cat1 cat2">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/14.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/14.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Sacramento, California</a></h1>
					<p>
						 tower bridge
					</p>
				</div>
			</div>
			<!-- box 15 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="http://www.wowthemes.net/demo/serenity/img/temp/masonry/15.jpg" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="http://www.wowthemes.net/demo/serenity/img/temp/masonry/15.jpg" title="Title Here"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Haikou, China</a></h1>
					<p>
						 Haikou city statue
					</p>
				</div>
			</div>
			<!-- next box etc -->
			<!-- MASONRY ITEMS END -->
		</div>
		</section>
		<!--CALL TO ACTION PANEL
@stop
