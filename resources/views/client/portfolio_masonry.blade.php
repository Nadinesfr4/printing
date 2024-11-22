@extends('client.layout')
@section('content')

<main>

	@include('admin.sidebar')
    	<!-- portfolio_section - start -->
			<section class="portfolio_section sec_ptb_130 clearfix">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
							<div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
								<h4 class="small_title">Our Recent Works</h4>
								<h2 class="big_title mb-0">
									Let’s See Our Latest Project That Recently Done
								</h2>
								<span class="biggest_title">Works</span>
							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid">
					<div class="masonry_portfolio_grid grid wow fadeInUp2" data-wow-delay=".3s">
						<div class="grid-sizer"></div>
						<div class="grid-item">
							<div class="portfolio_fullimage">
								<a class="plus_effect" target="_blank" href="portofolio_details">
									<img src="assets/images/portfolio/masonry/img_01.jpg" alt="image_not_found">
								</a>
							</div>
						</div>

						<div class="grid-item">
							<div class="portfolio_fullimage">
								<a class="plus_effect" target="_blank" href="portofolio_details">
									<img src="assets/images/portfolio/masonry/img_02.jpg" alt="image_not_found">
								</a>
							</div>
						</div>

						<div class="grid-item">
							<div class="portfolio_fullimage">
								<a class="plus_effect" target="_blank" href="portofolio_details">
									<img src="assets/images/portfolio/masonry/img_03.jpg" alt="image_not_found">
								</a>
							</div>
						</div>

						<div class="grid-item">
							<div class="portfolio_fullimage">
								<a class="plus_effect" target="_blank" href="portofolio_details">
									<img src="assets/images/portfolio/masonry/img_04.jpg" alt="image_not_found">
								</a>
							</div>
						</div>

						<div class="grid-item w_50">
							<div class="portfolio_fullimage">
								<a class="plus_effect" target="_blank" href="portofolio_details">
									<img src="assets/images/portfolio/masonry/img_05.jpg" alt="image_not_found">
								</a>
							</div>
						</div>

						<div class="grid-item w_50">
							<div class="portfolio_fullimage">
								<a class="plus_effect" target="_blank" href="portofolio_details">
									<img src="assets/images/portfolio/masonry/img_06.jpg" alt="image_not_found">
								</a>
							</div>
						</div>

						<div class="grid-item">
							<div class="portfolio_fullimage">
								<a class="plus_effect" target="_blank" href="portofolio_details">
									<img src="assets/images/portfolio/masonry/img_07.jpg" alt="image_not_found">
								</a>
							</div>
						</div>
						
						<div class="grid-item">
							<div class="portfolio_fullimage">
								<a class="plus_effect" target="_blank" href="portofolio_details">
									<img src="assets/images/portfolio/masonry/img_08.jpg" alt="image_not_found">
								</a>
							</div>
						</div>
						
						<div class="grid-item">
							<div class="portfolio_fullimage">
								<a class="plus_effect" target="_blank" href="portofolio_details">
									<img src="assets/images/portfolio/masonry/img_09.jpg" alt="image_not_found">
								</a>
							</div>
						</div>
						
						<div class="grid-item">
							<div class="portfolio_fullimage">
								<a class="plus_effect" target="_blank" href="portofolio_details">
									<img src="assets/images/portfolio/masonry/img_10.jpg" alt="image_not_found">
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- portfolio_section - end -->


		</main>
		<!-- main body - end -->

@endsection