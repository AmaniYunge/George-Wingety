@extends('website')
@section('contents')

<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">Contact</h1>
		<p class="animated fadeInRightBig notransition container page-description">
			  If you're not failing every now and again, it's a sign you're not doing anything very innovative. 
		</p>
	</div>
	</section>
	
		<!-- CONTACT
================================================== -->

		<iframe src="https://www.google.com/maps/d/u/0/embed?mid=z9z0lp6To-yM.k4NFvgOAp8Uw" width="100%" height="480"></iframe>
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
					Please stay in touch with us, do not hesitate to contact us with any question. 
				</p>
				<h4 class="font100">The Office</h4>
				<ul class="unstyled">
					<li><span style="margin-right:5px;"><i class="icon-map-marker"></i></span> Address: Along sam Nujom Rd,Opp University Corner. Sinza C. Dar es Salaam</li>
					<li><span style="margin-right:3px;"><i class="icon-phone"></i></span> Phone: (+255) 784 771 675</li>
					<li><span style="margin-right:3px;"><i class="icon-phone"></i></span> Phone: (+255) 714 881 391</li>
					<li><span style="margin-right:2px;"><i class="icon-envelope"></i></span> Email: <a href="georgewingetyltd@gmail.com">georgewingetyltd@gmail.com</a></li>
				</ul>
				<h4 class="font100">Business Hours</h4>
				<ul class="unstyled">
					<li><i class="icon-time"></i> Monday - Friday 8hrs to 19hrs</li>
					<li><i class="icon-time"></i> Saturday - 9hrs to 18hrs</li>
					<li><i class="icon-time"></i> Sunday - Closed</li>
				</ul>
			</div>
		</div>
		</section>
		<!--CALL TO ACTION PANEL
@stop
