@extends('layouts/default')

@section('content')
	<section id="google-map" class="section google-map">
		<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=dhaka&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=38.963048,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;t=m&amp;z=10&amp;ll=23.709921,90.407143&amp;output=embed"></iframe>
	</section>
	<!-- /#google-map -->
	<section id="contact-us" class="section contact-us">
		<div class="container">
			<div class="row">
				<div class="col-md-4 wrapper-2">
					<h5 class="subpage-title"><i class="icon-compass"></i> Visit Us</h5>
					<address>
						<strong>FLATPOINT, INC.</strong><br>
						795 Folsom Ave, Suite 600<br>
						San Francisco, CA 94107<br>
					</address>
					<h5 class="subpage-title"><i class="icon-phone"></i> Contact</h5>
					<address>
						Phone: (123) 456-7890<br>
						Fax: (123) 456-7890<br>
						<a href="mailto:#">contact@example.com</a>
					</address>
				</div>
				<div class="col-md-8 wrapper-1">
					<form class="contact-form">
						<h5 class="subpage-title">Get In Touch</h5>
						<div class="row">
							<div class="col-md-4">
								<input class="form-control" placeholder="Name (required)" type="text">
							</div>
							<div class="col-md-4">
								<input class="form-control" placeholder="Email (required)" type="text">
							</div>
							<div class="col-md-4">
								<input class="form-control" placeholder="Subject (Optional)" type="text">
							</div>
						</div>
						<!-- row-fluid -->
						<textarea class="form-control" placeholder="Your Message (required)" rows="3"></textarea>
						<button class="btn btn-flat flat-color ">Submit</button>
					</form>
					<!-- /.contact-form -->
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /#contact-us -->
@stop