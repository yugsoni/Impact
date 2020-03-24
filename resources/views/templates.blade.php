@extends('layouts.master')

@section('content')
<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">

				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase">Hell0</h3>
							<h1 class="text-uppercase">I am Yug Soni</h1>
							<h5 class="text-uppercase">Junior Full Stack Developer</h5>
							<div class="d-flex align-items-center">
								<a class="primary_btn tr-gb" href="{{ url('contact') }}"><span>Hire Me</span></a>
								<a class="primary_btn tr-bg" href="my resume.pdf"><span>Get CV</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

@endsection