<section id="page-title-wrapper" class="section page-title-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 page-title">
				<h4>{{ $data['title'] }}</h4>
			</div>
			<!-- /.page-title -->
			<div class="col-xs-6 hidden-xs breadcrumb-wrapper">
				<ol class="breadcrumb pull-right">
					<li><a href="{{ route('home') }}">Inicio</a></li>
					<li><a href="{{ route('blog') }}">Blog</a></li>
					<li class="active">{{ $data['title'] }}</li>
				</ol>
			</div>
			<!-- /.breadcrumb-wrapper -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>
<!-- /#page-title-wrapper -->