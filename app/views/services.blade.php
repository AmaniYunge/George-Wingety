@extends('website')
@section('contents')

<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">Services</h1>
		<p class="animated fadeInRightBig notransition container page-description">
			  We undertake the business of making, fabricating and assembling concrete machines, construction equipments, <br>
			 any type of machines and equipment, plants, devices of all descriptions using modern and appopriate technology.
		</p>
	</div>
	</section><br>
		<!-- SERVICES
================================================== -->
		<section class="container services">
		<div class="row text-center animated fadeInUp notransition">
			<div class="col-md-4">
				<i class="icon-cogs"></i>
				<h4>Fabricating & Assembling Construction Machines</h4>
				<p>
					We believe that long-lasting quality tools are not only the best value in the end,
					but something you can enjoy using that will help you take your metal fabrication to the next level.
					We fabricate mostly construction equipments, small scale mining equipments, machine spares etc.
				</p>
			</div>
			<!-- col-md-4 -->
			<div class="col-md-4">
				<i class="icon-cogs"></i>
				<h4>Selling & Hiring Construction Equipments</h4>
				<p>
					We sell and Hire several construction equipments. We offer free advice to our broade range
					customers on the most efficient manner in which  the customer can be  precious with what he/she is going to do.
				</p>
			</div>
			<!-- col-md-4 -->
			<div class="col-md-4">
				<i class="icon-cogs"></i>
				<h4>Industrials services </h4>
				<p>
					Team Industrial Services is the  leader in minimizing equipment and asset downtime,
					providing on-line maintenance, inspection and repair. We provide critical services to our customers
					that enable them to maintain and operate their facilities and equipment in a safe and productive manner.
				</p>
			</div>
			<!-- col-md-4 -->
		</div>
		<div class="row text-center topspace30 animated fadeInDown notransition">
			<div class="col-md-4">
				<i class="icon-cogs"></i>
				<h4>Corrosion Treatment </h4>
				<p>
					This protection
					can be the introduction of certain elements into the
					base metal, creating a corrosion resistant alloy, or the
					addition of a surface coating of a chemical conver-
					sion coating, metal or paint.
				</p>
			</div>
			<!-- col-md-4 -->
			<div class="col-md-4">
				<i class="icon-cogs"></i>
				<h4>Demolition Works</h4>
				<p>
					There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
				</p>
			</div>
			<!-- col-md-4 -->
			<div class="col-md-4">
				<i class="icon-cogs"></i>
				<h4> Stationary Engines & Hydraulic Services</h4>
				<p>
					There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
				</p>
			</div>
			<!-- col-md-4 -->
		</div>
		</section>
		<!-- CLIENTS
================================================== -->
		
		<section class="grayarea animated fade notransition recent-projects-home text-center topspace30">
		<div class="container">
			<div class="row">
				<h1 class="small text-center animated fadeInLeftNow notransition">Our Partners</h1>
				<p class="animated fadeInRightNow notransition text-center topspace20">
					 If you are ready to spend your Miles with one of our partners, 
					 do not hesitate to contact us.
				</p>
				<div class="text-center smalltitle">
				</div>
				<div class="col-md-12">
					<div class="list_carousel">
						<div class="carousel_nav">
							<a class="prev" id="car_prev" href="#" style="display: block;"><span>prev</span></a>
							<a class="next" id="car_next" href="#" style="display: block;"><span>next</span></a>
						</div>
						<div class="clearfix">
						</div>
						<div class="caroufredsel_wrapper">
							<ul id="carousel-projects">
								<li>
								<div class="featured-projects">
									<div class="featured-projects-image">
										<a href="#"><img src="{{asset('img/cas.png')}}" class="imgOpa grayimage grayimage" alt="" style="width:80px;height:100px" ></a>
									</div>
								</div>
								</li>
								<li>
								<div class="featured-projects">
									<div class="featured-projects-image">
										<a href="#"><img src="{{asset('img/wingety.png')}}" class="imgOpa grayimage" alt=""style="width:80px;height:100px"></a>
									</div>
								</div>
								</li>
								<li>
								<div class="featured-projects">
									<div class="featured-projects-image">
										<a href="#"><img src="{{asset('img/wingety.png')}}" class="imgOpa grayimage" alt="" style="width:80px;height:100px" ></a>
									</div>
								</div>
								</li>
								<li>
								<div class="featured-projects">
									<div class="featured-projects-image">
										<a href="#"><img src="{{asset('img/wingety.png')}}" class="imgOpa grayimage" alt="" style="width:80px;height:100px"></a>
									</div>
								</div>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>		
		<!-- BEGIN CALL TO ACTION PANEL
@stop
