@extends('layouts/default')

@section('content')
	<section id="error404-wrapper" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 wrapper-1">
					<div class="error404">
						<span>404</span>
					</div>
				</div>
				<div class="col-md-6 wrapper-1">
					<div class="details404">
						<h3>We looked everywhere but couldn't find anything...sorry. Please try again!</h3>
						<p>Please try to search to look for more information on this site.</p>
						<form class="search-form">
							<input type="text" class="form-control" placeholder="Search ...">
						</form>
						<a href="" class="btn btn-flat flat-color"><i class="icon-long-arrow-left"></i> Back to Home</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /#error404-wrapper -->
@stop