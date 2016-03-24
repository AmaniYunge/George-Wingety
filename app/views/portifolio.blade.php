@extends('website')
@section('contents')

<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInDown">Portfolio </h1>
		<p class="animated fadeInUp container page-description">
			 We undertake the business of making, fabricating and assembling concrete machines, construction equipments, <br>
			 any type of machines and equipment, plants, devices of all descriptions using modern and appopriate technology.
		</p>
	</div>
	</section>
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
						<li><a href="" data-filter="*" class="selected"><i class="icon icon-reorder"></i> All Machines</a></li>
						<li><a href="" data-filter=".cat1"><i class="icon icon-th-large"></i> Construction Machines</a></li>
						<li><a href="" data-filter=".cat2"><i class="icon icon-th-list"></i> Mining Machines</a></li>
						<li><a href="" data-filter=".cat3"><i class="icon icon-th"></i> Drilling Machines</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END filtering menu -->
		<div id="content">
			<!-- box 1 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="{{asset('img/19.jpg')}}" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="img/19.jpg" title="George Wingety ltd"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Poker Vibrator</a></h1>
					<p>
						 George Wingety ltd
					</p>
				</div>
			</div>
			<!-- box 2 -->
			<div class="boxportfolio3 item cat1">
				<div class="boxcontainer">
					<img src="{{asset('img/22.png')}}" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="img/22.png" title="George Wingety ltd"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Plate Compactor</a></h1>
					<p>
						  George Wingety ltd
					</p>
				</div>
			</div>
			<!-- box 3 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="{{asset('img/roller.jpg')}}" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="img/roller.jpg" title="George Wingety ltd"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Hand Roller</a></h1>
					<p>
						 George Wingety ltd
					</p>
				</div>
			</div>
			<!-- box 4 -->
			<div class="boxportfolio3 item cat1">
				<div class="boxcontainer">
					<img src="{{asset('img/compressor.jpg')}}" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="img/compressor.jpg" title="George Wingety ltd"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Pressure Compressor</a></h1>
					<p>
						  George Wingety ltd
					</p>
				</div>
			</div>
			<!-- box 5 -->
			<div class="boxportfolio3 item cat2">
				<div class="boxcontainer">
					<img src="{{asset('img/bollmill.jpg')}}" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="img/bollmill.jpg" title="George Wingety ltd"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Ball Mill</a></h1>
					<p>
						  George Wingety ltd
					</p>
				</div>
			</div>
			<!-- box 6 -->
			<div class="boxportfolio3 item cat2">
				<div class="boxcontainer">
					<img src="{{asset('img/mixer1.jpg')}}" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="img/mixer1.jpg" title="George Wingety ltd"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Concrete Mixer</a></h1>
					<p>
						  George Wingety ltd
					</p>
				</div>
			</div>
			<!-- box 7 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="{{asset('img/pat.jpg')}}" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="img/pat.jpg" title="George Wingety ltd"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Bore Hole</a></h1>
					<p>
						  George Wingety ltd
					</p>
				</div>
			</div>
			<!-- box 8 -->
			<div class="boxportfolio3 item cat1">
				<div class="boxcontainer">
					<img src="{{asset('img/win.jpg')}}" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="img/win.jpg" title="George Wingety ltd"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Small Scale Mining Winch</a></h1>
					<p>
						  George Wingety ltd
					</p>
				</div>
			</div>
			<!-- box 9 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="{{asset('img/c.jpg')}}" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="img/c.jpg" title="George Wingety ltd"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Compressor</a></h1>
					<p>
						  George Wingety ltd
					</p>
				</div>
			</div>
			<!-- box 10 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="{{asset('img/20.jpg')}}" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="img/20.jpg" title="George Wingety ltd"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Concrete Mixer</a></h1>
					<p>
						 George Wingety ltd
					</p>
				</div>
			</div>
			<!-- box 11 -->
			<div class="boxportfolio3 item cat2 cat3">
				<div class="boxcontainer">
					<img src="{{asset('img/0.jpg')}}" alt="">
					<div class="roll">
						<div class="wrapcaption">
							<a href="{{url('projectdetail')}}"><i class="icon-link captionicons"></i></a>
							<a data-gal="prettyPhoto[gallery1]" href="img/0.jpg" title="George Wingety ltd"><i class="icon-zoom-in captionicons"></i></a>
						</div>
					</div>
					<h1><a href="{{url('projectdetail')}}">Small Scale Mining Winch</a></h1>
					<p>
						 George Wingety ltd
					</p>
				</div>
			</div>
			
			<!-- MASONRY ITEMS END -->
		</div>
		</section>
@stop
