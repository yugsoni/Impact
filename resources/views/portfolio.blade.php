@extends('layouts.master')

@section('content')



	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area section_gap_top" id="portfolio">
        <div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-left">
						<h2>quality work <br>
							Recently done project </h2>
					</div>
				</div>
			</div>
			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<li data-filter=".popular">popular</li>
					<li data-filter=".latest"> latest</li>
					<li data-filter=".following">following</li>
					<li data-filter=".upcoming">upcoming</li>
				</ul>
			</div>
	
			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="box1" style="background-image: url(img/site/demo7.jpg);"></div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="box1" style="background-image: url(img/site/demo8.jpg);"></div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="box1" style="background-image: url(img/site/homepage.jpg);"></div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="box1" style="background-image: url(img/site/demo3.jpg);"></div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all following">
						<div class="portfolio_box">
							<div class="box1" style="background-image: url(img/site/demo6.jpg);"></div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all upcoming">
						<div class="portfolio_box">
							<div class="box1" style="background-image: url(img/site/demo4.jpg);"></div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="box1" style="background-image: url(img/site/demo5.jpg);"></div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all following">
						<div class="portfolio_box">
							<div class="box1" style="background-image: url(img/site/demo0.jpg);"></div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all upcoming">
						<div class="portfolio_box">
							<div class="box1" style="background-image: url(img/site/demo10.jpg);"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
@endsection