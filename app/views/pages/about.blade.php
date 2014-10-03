@extends('layouts/default')

@section('content')
	<section id="our-story" class="section colored-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-6 wrapper-1">
					<div id="carousel-example-generic" class="carousel slide">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="assets/img/carousel/photo (1).jpg" class="img-responsive" alt="Carousel Image">
							</div>
							<div class="item">
								<img src="assets/img/carousel/photo (2).jpg" class="img-responsive" alt="Carousel Image">
							</div>
							<div class="item">
								<img src="assets/img/carousel/photo (3).jpg" class="img-responsive" alt="Carousel Image">
							</div>
						</div>
						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 wrapper-1">
					<h5 class="subpage-title">Our Story</h5>
					<p>Lorem ipsum dolor sit amet, vis principes interpretaris cu. His eu quem impedit percipit, ut dolorum posidonium sea. Intellegebat definitionem te eam. Ex pri quod omnes contentiones, an has fuisset theophrastus, id eum labore omnesque. Cu quod habeo constituam est, regione scribentur nec ex. Mea ad rebum inimicus, usu ne labore regione deterruisset, vix stet imperdiet te.</p>
					<p>Ne sit movet simul sensibus. Utamur philosophia est id, an nam nisl scripserit. Elit minimum interesset nec ex. His euismod principes no, mel delenit argumentum in. In mel hinc natum, duo menandri vulputate ea, vim et quidam commodo partiendo. Volumus postulant te sit.</p>
					<p>In putant contentiones eum, duo ad ferri ceteros. An eos primis rationibus, quod moderatius no eos. Te causae accusata cum. In vix explicari accommodare.</p>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- /#our-story -->
	<section id="we-and-our-skills" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 wrapper-1">
					<h5 class="subpage-title">Who We Are?</h5>
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
									Collapsible Group Item #1
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in">
								<div class="panel-body">
									Ne sit movet simul sensibus. Utamur philosophia est id, an nam nisl scripserit. Elit minimum interesset nec ex. His euismod principes no, mel delenit argumentum in. In mel hinc natum, duo menandri vulputate ea, vim et quidam commodo partiendo.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
									Collapsible Group Item #2
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									Ne sit movet simul sensibus. Utamur philosophia est id, an nam nisl scripserit. Elit minimum interesset nec ex. His euismod principes no, mel delenit argumentum in. In mel hinc natum, duo menandri vulputate ea, vim et quidam commodo partiendo.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
									Collapsible Group Item #3
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body">
									Ne sit movet simul sensibus. Utamur philosophia est id, an nam nisl scripserit. Elit minimum interesset nec ex. His euismod principes no, mel delenit argumentum in. In mel hinc natum, duo menandri vulputate ea, vim et quidam commodo partiendo.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 wrapper-1">
					<h5 class="subpage-title">Our Crazy Skills</h5>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
							<span>Web Design 95%</span>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
							<span>HTML5 & CSS3 85%</span>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
							<span>PHP & MySQL 60%</span>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
							<span>Wordpress 70%</span>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
							<span>JavaScript & jQuery 80%</span>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /#we-and-our-skills -->
	<section id="our-team" class="section colored-wrapper">
		<div class="container wrapper-2">
			<h5 class="subpage-title">Meet Our Team </h5>
			<div class="row">
				<div class="col-md-4 team-member-wrapper">
					<div class="team-member">
						<div class="team-member-thumb">
							<img src="assets/img/smiling-group/photo (1).jpg" class="img-responsive" alt="Member Image">
							<div class="overlay"></div>
							<ul class="member-social">
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-google-plus"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
							</ul>
						</div>
						<div class="team-member-info">
							<h5>Jhon Doe</h5>
							<span>Co-Founder</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 team-member-wrapper">
					<div class="team-member">
						<div class="team-member-thumb">
							<img src="assets/img/smiling-group/photo (2).jpg" class="img-responsive" alt="Member Image">
							<div class="overlay"></div>
							<ul class="member-social">
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-google-plus"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
							</ul>
						</div>
						<div class="team-member-info">
							<h5>Jhon Doe</h5>
							<span>Co-Founder</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 team-member-wrapper">
					<div class="team-member">
						<div class="team-member-thumb">
							<img src="assets/img/smiling-group/photo (3).jpg" class="img-responsive" alt="Member Image">
							<div class="overlay"></div>
							<ul class="member-social">
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-google-plus"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
							</ul>
						</div>
						<div class="team-member-info">
							<h5>Jhon Doe</h5>
							<span>Co-Founder</span>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
@stop