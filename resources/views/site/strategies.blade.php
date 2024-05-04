@extends('site.layouts.layout')
@section('title','Strategies')

@section('content')


		<div role="main" class="main">

			<section class="page-header page-header-modern page-header-background overlay overlay-show overlay-color-primary overlay-op-9 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%', 'fadeIn': true}"
				data-image-src="img/demos/finance/backgrounds/background-2.jpg">
				<div class="container position-relative z-index-2">
					<div class="row text-center text-md-start">
						<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
							<h1 class="font-weight-bold text-color-light text-10 mb-0">Strategies</h1>
						</div>
						<div class="col-md-4 order-1 order-md-2 align-self-center">
							<ul class="breadcrumb breadcrumb-light d-block text-md-end text-4 mb-0">
								<li><a href="{{route('site.index')}}" class="text-decoration-none">Home</a></li>
								<li class="text-upeercase active">Strategies</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<div class="container py-5-5 my-5-5">
				<div class="row justify-content-center">
					<div class="col-sm-10 col-md-6 col-lg-4 mb-4">
						<div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<div class="card-header d-flex align-items-center justify-content-center bg-color-grey-scale-5 py-5-5">
								<img width="120" height="120" src="{{asset('site/img/demos/finance/icons/accounting-auditor-1.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
							</div>
							<div class="card-body text-center py-4">
								<h2 class="text-color-dark font-weight-bold text-5 line-height-1 mb-3-5">Accounting</h2>
								<p class="text-3-5 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-md-6 col-lg-4 mb-4">
						<div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
							<div class="card-header d-flex align-items-center justify-content-center bg-color-grey-scale-5 py-5-5">
								<img width="120" height="120" src="{{asset('site/img/demos/finance/icons/accounting-auditor-2.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
							</div>
							<div class="card-body text-center py-4">
								<h2 class="text-color-dark font-weight-bold text-5 line-height-1 mb-3-5">Finance Planning</h2>
								<p class="text-3-5 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-md-6 col-lg-4 mb-4">
						<div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
							<div class="card-header d-flex align-items-center justify-content-center bg-color-grey-scale-5 py-5-5">
								<img width="120" height="120" src="{{asset('site/img/demos/finance/icons/accounting-auditor-3.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
							</div>
							<div class="card-body text-center py-4">
								<h2 class="text-color-dark font-weight-bold text-5 line-height-1 mb-3-5">Money Transfer</h2>
								<p class="text-3-5 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-md-6 col-lg-4 mb-4">
						<div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<div class="card-header d-flex align-items-center justify-content-center bg-color-grey-scale-5 py-5-5">
								<img width="120" height="120" src="{{asset('site/img/demos/finance/icons/accounting-auditor-4.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
							</div>
							<div class="card-body text-center py-4">
								<h2 class="text-color-dark font-weight-bold text-5 line-height-1 mb-3-5">Worldwide Support</h2>
								<p class="text-3-5 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-md-6 col-lg-4 mb-4">
						<div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
							<div class="card-header d-flex align-items-center justify-content-center bg-color-grey-scale-5 py-5-5">
								<img width="120" height="120" src="{{asset('site/img/demos/finance/icons/accounting-auditor-5.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
							</div>
							<div class="card-body text-center py-4">
								<h2 class="text-color-dark font-weight-bold text-5 line-height-1 mb-3-5">Growth Vision</h2>
								<p class="text-3-5 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-md-6 col-lg-4 mb-4">
						<div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
							<div class="card-header d-flex align-items-center justify-content-center bg-color-grey-scale-5 py-5-5">
								<img width="120" height="120" src="{{asset('site/img/demos/finance/icons/accounting-auditor-6.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
							</div>
							<div class="card-body text-center py-4">
								<h2 class="text-color-dark font-weight-bold text-5 line-height-1 mb-3-5">Consulting</h2>
								<p class="text-3-5 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<div class="card-header d-flex align-items-center justify-content-center bg-color-grey-scale-5 py-5-5">
								<img width="120" height="120" src="{{asset('site/img/demos/finance/icons/accounting-auditor-7.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
							</div>
							<div class="card-body text-center py-4">
								<h2 class="text-color-dark font-weight-bold text-5 line-height-1 mb-3-5">Leading Investment</h2>
								<p class="text-3-5 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
							<div class="card-header d-flex align-items-center justify-content-center bg-color-grey-scale-5 py-5-5">
								<img width="120" height="120" src="{{asset('site/img/demos/finance/icons/accounting-auditor-8.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
							</div>
							<div class="card-body text-center py-4">
								<h2 class="text-color-dark font-weight-bold text-5 line-height-1 mb-3-5">Professional Training</h2>
								<p class="text-3-5 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
							<div class="card-header d-flex align-items-center justify-content-center bg-color-grey-scale-5 py-5-5">
								<img width="120" height="120" src="{{asset('site/img/demos/finance/icons/accounting-auditor-9.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
							</div>
							<div class="card-body text-center py-4">
								<h2 class="text-color-dark font-weight-bold text-5 line-height-1 mb-3-5">Finance AID</h2>
								<p class="text-3-5 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis.</p>
							</div>
						</div>
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
									<a href="{{route('site.index')}}" class="btn btn-light text-color-dark font-weight-bold positive-ls-3 btn-px-5 py-3">ABOUT US</a>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>

		</div>
@endsection
