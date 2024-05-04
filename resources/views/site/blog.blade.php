@extends('site.layouts.layout')
@section('title','Blog')

@section('content')
		<div role="main" class="main">

			<section class="page-header page-header-modern page-header-background overlay overlay-show overlay-color-primary overlay-op-9 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%', 'fadeIn': true}"
				data-image-src="img/demos/finance/backgrounds/background-2.jpg">
				<div class="container position-relative z-index-2">
					<div class="row text-center text-md-start">
						<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
							<h1 class="font-weight-bold text-color-light text-10 mb-0">News</h1>
						</div>
						<div class="col-md-4 order-1 order-md-2 align-self-center">
							<ul class="breadcrumb breadcrumb-light d-block text-md-end text-4 mb-0">
								<li><a href="{{route('site.index')}}" class="text-decoration-none">Home</a></li>
								<li class="text-upeercase active">News</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<div class="container pt-4 pb-5 my-5">
				<div class="row">
					<div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">

						<article class="mb-5">
							<div class="card bg-transparent border-0">
								<div class="card-body p-0 z-index-1">
									<a href="{{route('site.index')}}" data-cursor-effect-hover="plus">
										<img class="card-img-top rounded-0 mb-2" src="{{asset('site/img/blog/wide/blog-24.jpg')}}" alt="Card Image">
									</a>
									<p class="text-uppercase text-color-default text-1 my-2">
										<time pubdate datetime="2021-01-10">10 Jan 2021</time>
										<span class="opacity-3 d-inline-block px-2">|</span>
										3 Comments
										<span class="opacity-3 d-inline-block px-2">|</span>
										John Doe
									</p>
									<div class="card-body p-0">
										<h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="demo-finance-blog-post.html">An Interview with John Doe</a></h4>
										<p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem , consectetur adipiscing elit...</p>
										<a href="{{route('site.index')}}" class="text-decoration-none custom-link-hover-effects">
											Read More
										</a>
									</div>
								</div>
							</div>
						</article>

						<article class="mb-5">
							<div class="card bg-transparent border-0">
								<div class="card-body p-0 z-index-1">
									<a href="{{route('site.index')}}" data-cursor-effect-hover="plus">
										<img class="card-img-top rounded-0 mb-2" src="{{asset('site/')}}img/blog/wide/blog-41.jpg" alt="Card Image">
									</a>
									<p class="text-uppercase text-color-default text-1 my-2">
										<time pubdate datetime="2021-01-10">10 Jan 2021</time>
										<span class="opacity-3 d-inline-block px-2">|</span>
										3 Comments
										<span class="opacity-3 d-inline-block px-2">|</span>
										John Doe
									</p>
									<div class="card-body p-0">
										<h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="demo-finance-blog-post.html">How to Grow your Business</a></h4>
										<p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem , consectetur adipiscing elit...</p>
										<a href="{{route('site.index')}}" class="text-decoration-none custom-link-hover-effects">
											Read More
										</a>
									</div>
								</div>
							</div>
						</article>

						<ul class="custom-pagination-style-1 pagination pagination-rounded pagination-md justify-content-center">
							<li class="page-item"><a class="page-link" href="#" data-cursor-effect-hover="fit"><i class="fas fa-angle-left"></i></a></li>
							<li class="page-item active"><a class="page-link" href="#" data-cursor-effect-hover="fit">1</a></li>
							<li class="page-item"><a class="page-link" href="#" data-cursor-effect-hover="fit">2</a></li>
							<li class="page-item"><a class="page-link" href="#" data-cursor-effect-hover="fit">3</a></li>
							<li class="page-item"><a class="page-link" href="#" data-cursor-effect-hover="fit"><i class="fas fa-angle-right"></i></a></li>
						</ul>

					</div>
					<div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
						<aside class="sidebar">
							<div class="px-3 mb-4">
								<h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">About The Blog</h3>
								<p class="m-0">Lorem ipsum dolor sit amet, conse elit porta. Vestibulum ante justo, volutpat quis porta diam.</p>
							</div>
							<div class="py-1 clearfix">
								<hr class="my-2">
							</div>
							<div class="px-3 mt-4">
								<form action="{{route('site.index')}}" method="get">
									<div class="input-group mb-3 pb-1">
										<input class="form-control box-shadow-none text-1 border-0 bg-color-grey" placeholder="Search..." name="s" id="s" type="text">
										<button type="submit" class="btn bg-color-grey text-1 p-2"><i class="fas fa-search m-2"></i></button>
									</div>
								</form>
							</div>
							<div class="py-1 clearfix">
								<hr class="my-2">
							</div>
							<div class="px-3 mt-4">
								<h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Posts</h3>
								<div class="pb-2 mb-1">
									<a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2021 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
									<a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Lorem ipsum dolor sit amet</a>
									<a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2021 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
									<a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Consectetur adipiscing elit</a>
									<a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2021 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
									<a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Vivamus sollicitudin nibh luctus</a>
								</div>
							</div>
							<div class="py-1 clearfix">
								<hr class="my-2">
							</div>
							<div class="px-3 mt-4">
								<h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Comments</h3>
								<div class="pb-2 mb-1">
									<a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin on <strong class="text-color-dark text-hover-primary text-4">Vivamus sollicitudin</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan
											2021</span></a>
									<a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">John Doe on <strong class="text-color-dark text-hover-primary text-4">Lorem ipsum dolor</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan
											2021</span></a>
									<a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin on <strong class="text-color-dark text-hover-primary text-4">Consectetur adipiscing</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan
											2021</span></a>
								</div>
							</div>
							<div class="py-1 clearfix">
								<hr class="my-2">
							</div>
							<div class="px-3 mt-4">
								<h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0">Categories</h3>
								<ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">
									<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Design (2)</a></li>
									<li class="nav-item">
										<a class="nav-link bg-transparent border-0 active" href="#">Photos (4)</a>
										<ul>
											<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Animals</a></li>
											<li class="nav-item"><a class="nav-link bg-transparent border-0 active" href="#">Business</a></li>
											<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Sports</a></li>
											<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">People</a></li>
										</ul>
									</li>
									<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Videos (3)</a></li>
									<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Lifestyle (2)</a></li>
									<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Technology (1)</a></li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 p-0">
						<section class="section border-0 bg-color-primary h-100 m-0">
							<div class="row justify-content-end py-5-5 m-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="350">
								<div class="col-half-section col-half-section-right ps-4">
									<h3 class="font-weight-bold text-color-light line-height-1 text-4 ls-0 mb-1">REQUEST A CALL</h3>
									<h2 class="text-color-light font-weight-bold text-8 ls-0 mb-3">We call you back</h2>
									<p class="text-color-light opacity-7 font-weight-light text-3-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismodac, finibus vitae dui.</p>
									<form class="contact-form form-style-4 form-style-4-border-light-2 form-errors-light pe-lg-5" action="{{asset('site/php/contact-form.php')}}" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4">
											<strong>Success!</strong> Your message has been sent to us.
										</div>
										<div class="contact-form-error alert alert-danger d-none mt-4">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 mt-2 d-block"></span>
										</div>
										<div class="row mb-2 mx-0">
											<input type="text" class="form-control font-weight-semibold text-color-light px-1 py-3" name="name" placeholder="* Full Name" data-msg-required="This field is required." id="name" required="" />
										</div>
										<div class="row mx-0 mb-3">
											<input type="email" class="form-control font-weight-semibold text-color-light px-1 py-3" name="email" placeholder="* Email Address" data-msg-required="This field is required." id="email" required="" />
										</div>
										<div class="row mb-4 mx-0">
											<textarea name="message" id="message" rows="4" class="form-control form-control font-weight-semibold text-color-light px-1 py-3" placeholder="* Message"></textarea>
										</div>
										<input type="submit" class="btn btn-light text-color-dark font-weight-bold positive-ls-3 btn-px-5 py-3" value="SUBMIT" />
									</form>
								</div>
							</div>
						</section>
					</div>
					<div class="col-lg-6 p-0">
						<section class="section section-no-border bg-dark overflow-hidden h-100 m-0">
							<div class="row py-5-5 m-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<div class="col-half-section col-half-section-left ps-lg-5">
									<h3 class="font-weight-bold text-color-light line-height-1 text-4 ls-0 mb-1">TALK TO A SPECIALIST</h3>
									<h2 class="text-color-light font-weight-bold text-8 ls-0 mb-3">Let's Talk Business</h2>
									<p class="text-color-grey line-height-9 text-3-5 mb-5-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismodac, finibus vitae dui rem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									<div class="d-flex align-items-center">
										<i class="icons icon-phone text-9 text-color-light position-relative bottom-1"></i>
										<a href="tel:0123456789" class="text-4-5 font-weight-bold text-color-light opacity-hover-8 text-decoration-none ps-3-5">(800) 123-4567</a>
									</div>
									<div class="d-flex align-items-center my-5-5">
										<img width="38" height="38" src="{{asset('site/img/demos/finance/icons/email.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
										<a href="mailto:example@domain.com" class="text-4-5 font-weight-bold text-color-light opacity-hover-8 text-decoration-none ps-3-5">porto@domain.com</a>
									</div>
									<div class="d-flex align-items-center pe-lg-5 mb-5">
										<img width="38" height="38" src="{{asset('site/img/demos/finance/icons/map-pin.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
										<p class="text-color-light font-weight-bold text-4-5 mb-0 ps-3-5 pe-lg-5 me-lg-5">123 Street Name, New York NY 10000, USA</p>
									</div>
									<a href="{{route('site.company')}}" class="btn btn-light text-color-dark font-weight-bold positive-ls-3 btn-px-5 py-3">ABOUT US</a>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>

		</div>
@endsection
