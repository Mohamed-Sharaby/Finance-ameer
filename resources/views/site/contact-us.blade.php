@extends('site.layouts.layout')
@section('title','Contact Us')

@section('content')

		<div role="main" class="main">

			<section class="page-header page-header-modern page-header-background overlay overlay-show overlay-color-primary overlay-op-9 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%', 'fadeIn': true}"
				data-image-src="{{asset('site/')}}img/demos/finance/backgrounds/background-2.jpg">
				<div class="container position-relative z-index-2">
					<div class="row text-center text-md-start">
						<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
							<h1 class="font-weight-bold text-color-light text-10 mb-0">Contact</h1>
						</div>
						<div class="col-md-4 order-1 order-md-2 align-self-center">
							<ul class="breadcrumb breadcrumb-light d-block text-md-end text-4 mb-0">
								<li><a href="{{route('site.index')}}" class="text-decoration-none">Home</a></li>
								<li class="text-upeercase active">Contact</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<section class="section bg-dark border-0 m-0">
				<div class="container py-5-5">
					<div class="row align-items-center">
						<div class="col-md-6 mb-5 mb-md-0">
							<h3 class="font-weight-bold text-color-light line-height-1 text-4 ls-0 mb-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">TALK TO A SPECIALIST</h3>
							<h2 class="text-color-light font-weight-bold text-8 ls-0 mb-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Let's Talk Business</h2>
							<p class="text-color-grey line-height-9 text-3-5 pe-md-4 pe-lg-5 mb-5-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismodac, finibus
								vitae dui rem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<a href="{{route('site.company')}}" class="btn btn-light text-color-dark font-weight-bold positive-ls-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">ABOUT US</a>
						</div>
						<div class="col-md-6 divider-left-border custom-mobile-remove-divider-left-border border-color-light-4">
							<div class="ps-md-4 ps-lg-4 py-md-5 ms-md-4">
								<div class="d-flex align-items-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900">
									<i class="icons icon-phone text-9 text-color-light position-relative bottom-1"></i>
									<a href="tel:0123456789" class="text-4-5 font-weight-bold text-color-light opacity-hover-8 text-decoration-none ps-3-5">(800) 123-4567</a>
								</div>
								<div class="d-flex align-items-center my-5-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">
									<img width="38" height="38" src="{{asset('site/')}}img/demos/finance/icons/email.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
									<a href="mailto:example@domain.com" class="text-4-5 font-weight-bold text-color-light opacity-hover-8 text-decoration-none ps-3-5">porto@domain.com</a>
								</div>
								<div class="d-flex align-items-center pe-lg-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1300">
									<img width="38" height="38" src="{{asset('site/')}}img/demos/finance/icons/map-pin.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
									<p class="text-color-light font-weight-bold text-4-5 mb-0 ps-3-5 pe-lg-5 me-lg-5">123 Street Name, New York NY 10000, USA</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section bg-primary border-0 m-0">
				<div class="container py-5">
					<div class="row">
						<div class="col-md-7 col-lg-5">
							<h3 class="font-weight-bold text-color-light line-height-1 text-4 ls-0 mb-1">REQUEST A CALL</h3>
							<h2 class="text-color-light font-weight-bold text-8 ls-0 mb-3">We call you back</h2>
							<p class="text-color-light opacity-7 font-weight-light text-3-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismodac, finibus vitae dui.</p>
						</div>
					</div>
					<div class="row">
						<div class="col">
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
									<textarea name="message" id="message" rows="4" class="form-control form-control font-weight-semibold text-color-light px-1" placeholder="* Message"></textarea>
								</div>
								<input type="submit" class="btn btn-light text-color-dark font-weight-bold positive-ls-3 btn-px-5 py-3" value="SUBMIT" />
							</form>
						</div>
					</div>
				</div>
			</section>

			<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
			<div id="googlemaps" class="google-map m-0" style="height: 500px;"></div>

		</div>
		@endsection
