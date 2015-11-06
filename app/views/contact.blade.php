@extends('website')
@section('contents')

<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">Contact</h1>
		<p class="animated fadeInRightBig notransition container page-description">
			 Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br>
			 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		</p>
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>
		<!-- CONTACT
================================================== -->
		<iframe class="gmap" style="width:100%;height:370px;border: 0;margin-top:-40px;z-index: 11;position: relative;" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Hollywood+Studios+International,+Wilshire+Boulevard+%23600,+Beverly+Hills,+CA,+Statele+Unite+ale+Americii&amp;aq=1&amp;oq=hol&amp;sll=34.105212,-118.348942&amp;sspn=0.000481,0.00066&amp;t=h&amp;ie=UTF8&amp;hq=hollywood+studios+international&amp;hnear=Wilshire+Blvd,+Beverly+Hills,+California&amp;ll=34.06732,-118.402606&amp;spn=0.006295,0.02076&amp;iwloc=lyrftr:h,14426514857686667153,34.067073,-118.402753&amp;output=embed"></iframe>
		<section class="container">
		<div class="row">
			<div class="col-md-8 animated fadeInLeft notransition">
				<h1 class="smalltitle">
				<span>Get in Touch</span>
				</h1>
					<div class="done">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Your message has been sent. Thank you!
						</div>
					</div>
					<form method="post" action="contact.php" id="contactform">
						<div class="form">
							<input class="col-md-6" type="text" name="name" placeholder="Name">
							<input class="col-md-6" type="text" name="email" placeholder="E-mail">
							<textarea class="col-md-12" name="comment" rows="7" placeholder="Message"></textarea>
							<input type="submit" id="submit" class="btn" value="Send">
						</div>
					</form>
			</div>
			<div class="col-md-4 animated fadeInRight notransition">
				<h1 class="smalltitle">
				<span>Contacts</span>
				</h1>
				<p>
					 If you're not failing every now and again, it's a sign you're not doing anything very innovative. If my films don't show a profit, I know I'm doing something right.
				</p>
				<h4 class="font100">The Office</h4>
				<ul class="unstyled">
					<li><span style="margin-right:5px;"><i class="icon-map-marker"></i></span> Address: 1234 Disney Paris, France</li>
					<li><span style="margin-right:3px;"><i class="icon-phone"></i></span> Phone: (123) 456-7890</li>
					<li><span style="margin-right:2px;"><i class="icon-envelope"></i></span> Email: <a href="mailto:wowthemesnet@gmail.com">wowthemesnet@gmail.com</a></li>
				</ul>
				<h4 class="font100">Business Hours</h4>
				<ul class="unstyled">
					<li><i class="icon-time"></i> Monday - Friday 9am to 5pm</li>
					<li><i class="icon-time"></i> Saturday - 9am to 2pm</li>
					<li><i class="icon-time"></i> Sunday - Closed</li>
				</ul>
			</div>
		</div>
		</section>
		<!--CALL TO ACTION PANEL
@stop
