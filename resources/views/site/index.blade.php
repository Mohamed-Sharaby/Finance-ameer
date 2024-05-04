@extends('site.layouts.layout')
@section('title','Finance')

@section('content')

    <div role="main" class="main">

        <div
            class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-arrows-thin nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0"
            data-plugin-options="{'autoplay': true, 'autoplayTimeout': 7000}"
            data-dynamic-height="['calc(100vh - 318px)','calc(100vh - 318px)','calc(100vh - 161px)','calc(100vh - 161px)','calc(100vh - 161px)']"
            style="height: calc(100vh - 318px);">
            <div class="owl-stage-outer">
                <div class="owl-stage">

                    <!-- Carousel Slide 1 -->
                    <div class="owl-item position-relative overflow-hidden">
                        <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                             data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s"
                             data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                             style="background-image: url({{asset('site/img/finc/close-up-hand-holding-smartphone.jpg')}}); background-size: cover; background-position: center;"></div>
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row align-items-center justify-content-end h-100">
                                <div class="col-lg-8 col-xl-7 text-center text-md-end">
                                    <h2 class="font-weight-bold text-color-default line-height-4 text-4 text-md-6 mb-2 appear-animation"
                                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800"
                                        data-plugin-options="{'minWindowWidth': 0}">PERSONALIZED FINANCIAL PLANNING AND
                                        MORE</h2>
                                    <h1 class="text-color-primary font-weight-bold text-9 text-md-11 line-height-2 mb-4 appear-animation"
                                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100"
                                        data-plugin-options="{'minWindowWidth': 0}">Financial control: protecting our
                                        future</h1>
                                    <a href="#"
                                       class="btn btn-primary font-weight-bold positive-ls-3 btn-px-5 btn-py-3 appear-animation"
                                       data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400"
                                       data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Slide 2 -->
                    <div class="owl-item position-relative overflow-hidden">
                        <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                             data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s"
                             data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                             style="background-image: url({{asset('site/img/finc/business-professionals-checking-reports.jpg')}}); background-size: cover; background-position: center;"></div>
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-8 col-xl-7 text-center text-md-start">
                                    <h2 class="font-weight-bold text-color-default line-height-4 text-4 text-md-6 mb-2 appear-animation"
                                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800"
                                        data-plugin-options="{'minWindowWidth': 0}">INDEPENDENT FINANCIAL ADVISOR 2024
                                    </h2>
                                    <h1 class="text-color-primary font-weight-bold text-9 text-md-11 line-height-2 mb-4 appear-animation"
                                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100"
                                        data-plugin-options="{'minWindowWidth': 0}">Analyzing the confirmation of payee
                                        platform application to minimize the authorized push payment fraud in the
                                        UAE</h1>
                                    <a href="#"
                                       class="btn btn-primary font-weight-bold positive-ls-3 btn-px-5 btn-py-3 appear-animation"
                                       data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400"
                                       data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"></button>
                <button type="button" role="presentation" class="owl-next"></button>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <section class="parallax section section-parallax h-100 m-0" data-plugin-parallax
                             data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}"
                             data-image-src="{{asset('site/')}}img/demos/finance/backgrounds/parallax-1.jpg"
                             style="min-height: 315px;">
                    </section>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="h-100 m-0">
                        <div class="row m-0">
                            <div class="col-half-section col-half-section-left py-5">
                                <div class="p-3">
                                    <h3 class="font-weight-semibold ls-0 text-color-default text-4 mb-0 appear-animation"
                                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200"
                                        data-plugin-options="{'minWindowWidth': 0}">MEET PORTO FINANCE</h3>
                                    <h2 class="font-weight-bold text-8 mb-4 appear-animation"
                                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400"
                                        data-plugin-options="{'minWindowWidth': 0}">Investiments Management</h2>
                                    <p class="text-3-5 pb-2 mb-4 appear-animation"
                                       data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600"
                                       data-plugin-options="{'minWindowWidth': 0}">Cybercrime, financial fraud,
                                        authorised push payment have become increasingly prevalent and
                                        sophisticated in today's digital age, posing significant challenges to
                                        individuals, businesses, and governments worldwide</p>
                                    <a href="demo-finance-strategies.html"
                                       class="btn border rounded-0 px-5 btn-py-3 font-weight-bold positive-ls-2 text-color-dark bg-color-hover-primary text-color-hover-light appear-animation"
                                       data-appear-animation="fadeInUpShorterPlus"
                                       data-appear-animation-delay="800" data-plugin-options="{'minWindowWidth': 0}">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 p-0">
                    <div class="h-100 m-0">
                        <div class="row m-0">
                            <div class="col-half-section col-half-section-right py-5 ms-auto">
                                <div class="p-3">
                                    <h3 class="font-weight-semibold ls-0 text-color-default text-4 mb-0 appear-animation"
                                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200"
                                        data-plugin-options="{'minWindowWidth': 0}">WHAT WE CAN DO FOR YOU</h3>
                                    <h2 class="font-weight-bold text-8 mb-4 appear-animation"
                                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400"
                                        data-plugin-options="{'minWindowWidth': 0}">Financial Services</h2>
                                    <p class="text-3-5 pb-2 mb-4 appear-animation"
                                       data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600"
                                       data-plugin-options="{'minWindowWidth': 0}">cybercriminals have found new
                                        opportunities to exploit vulnerabilities, steal sensitive
                                        information, and perpetrate various forms of cyberattacks, including ransomware,
                                        phishing, and malware attacks. The rise of interconnected devices, cloud
                                        computing, and digital payment systems has further expanded the attack surface,
                                        making organizations
                                        and individuals more vulnerable to cyber threats. </p>
                                    <a href="demo-finance-strategies.html"
                                       class="btn border rounded-0 px-5 btn-py-3 font-weight-bold positive-ls-2 text-color-dark bg-color-hover-primary text-color-hover-light appear-animation"
                                       data-appear-animation="fadeInUpShorterPlus"
                                       data-appear-animation-delay="800" data-plugin-options="{'minWindowWidth': 0}">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 p-0">
                    <section
                        class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0"
                        data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}"
                        data-image-src="{{asset('site/')}}img/demos/finance/backgrounds/parallax-2.jpg"
                        style="min-height: 315px;">
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-0">
                    <section
                        class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0"
                        data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}"
                        data-image-src="{{asset('site/')}}img/demos/finance/backgrounds/parallax-3.jpg"
                        style="min-height: 315px;">
                    </section>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="h-100 m-0">
                        <div class="row m-0">
                            <div class="col-half-section col-half-section-left py-5">
                                <div class="p-3">
                                    <h3 class="font-weight-semibold ls-0 text-color-default text-4 mb-0 appear-animation"
                                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200"
                                        data-plugin-options="{'minWindowWidth': 0}">GET STARTED</h3>
                                    <h2 class="font-weight-bold text-8 mb-4 appear-animation"
                                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400"
                                        data-plugin-options="{'minWindowWidth': 0}">Business Planning</h2>
                                    <p class="text-3-5 pb-2 mb-4 appear-animation"
                                       data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600"
                                       data-plugin-options="{'minWindowWidth': 0}">The economic costs of cybercrime are
                                        substantial, with estimates reaching trillions of
                                        dollars globally due to financial losses, data breaches, and operational
                                        disruptions. Moreover, cybercrime has significant social and psychological
                                        impacts, affecting trust in digital technologies, privacy rights, and the
                                        overall sense of security in
                                        online environments</p>
                                    <a href="demo-finance-strategies.html"
                                       class="btn border rounded-0 px-5 btn-py-3 font-weight-bold positive-ls-2 text-color-dark bg-color-hover-primary text-color-hover-light appear-animation"
                                       data-appear-animation="fadeInUpShorterPlus"
                                       data-appear-animation-delay="800" data-plugin-options="{'minWindowWidth': 0}">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section overlay overlay-show overlay-color-primary custom-overlay-opacity-95 border-0 m-0"
                 style="background: url(img/demos/finance/backgrounds/background-1.jpg); background-size: cover; background-position: center;">
            <div class="container position-relative z-index-2 pt-5">
                <div class="row">
                    <div class="col text-center">
                        <h3 class="font-weight-bold text-color-light text-4-5 ls-0 mb-2">FINANCE</h3>
                        <h2 class="font-weight-bold text-color-light text-11 line-height-3 line-height-md-1 mb-5">
                            Addressing the challenges posed by cybercrime requires a multifaceted approach</h2>
                        <p class="text-color-light text-3-5 line-height-9"> Encompassing technological solutions,
                            regulatory frameworks, public awareness, and international cooperation.</p>
                    </div>
                </div>
                <div class="row counters counters-sm text-6 pb-5 pt-4 mt-5">
                    <div class="col-sm-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="900"
                                    data-append="+">0</strong>
                            <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">million worth of payments in 2022</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="3.4"
                                    data-append="+">0</strong>
                            <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">million consumer payments</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-5 mb-sm-0">
                        <div class="counter">
                            <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="5.5"
                                    data-append="+">0</strong>
                            <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">million business payments</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="section bg-color-grey-scale-1 border-0 m-0">
            <div class="container pt-5 pb-3">
                <div class="row">
                    <div class="col text-center">
                        <h3 class="font-weight-bold text-color-default line-height-1 text-4 ls-0 mb-1">3 BASIC
                            STEPS</h3>
                        <h2 class="text-color-dark font-weight-bold text-8">Why Choose Us?</h2>
                    </div>
                </div>
                <div class="row process custom-process justify-content-center mt-4">
                    <div class="process-step col-md-9 col-lg-4 mb-5 mb-lg-4 appear-animation"
                         data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <div class="process-step-circle border-width-3 mb-3">
                            <strong class="process-step-circle-content">
                                <img width="58" height="58" src="{{asset('site/img/demos/finance/icons/box.svg')}}"
                                     alt="" data-icon
                                     data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary'}"/>
                            </strong>
                        </div>
                        <div class="process-step-content px-4">
                            <h4 class="font-weight-bold text-6 pb-1 mb-2">Product</h4>
                            <p class="text-3-5 text-color-dark mb-0">We’re here to make sure payment systems serve
                                everybody as well as they can.</p>
                        </div>
                    </div>
                    <div class="process-step col-md-9 col-lg-4 mb-5 mb-lg-4 appear-animation"
                         data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <div class="process-step-circle border-width-3 mb-3">
                            <strong class="process-step-circle-content">
                                <img width="58" height="58"
                                     src="{{asset('site/img/demos/finance/icons/refresh-cw.svg')}}" alt="" data-icon
                                     data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary'}"/>
                            </strong>
                        </div>
                        <div class="process-step-content px-4">
                            <h4 class="font-weight-bold text-6 pb-1 mb-2">Process</h4>
                            <p class="text-3-5 text-color-dark mb-0">
                                CONFIRMATION OF PAYEE AND ARTIFICIAL INTELLIGENCE
                            </p>
                        </div>
                    </div>
                    <div class="process-step col-md-9 col-lg-4 mb-5 mb-lg-4 appear-animation"
                         data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                        <div class="process-step-circle border-width-3 mb-3">
                            <strong class="process-step-circle-content">
                                <img width="58" height="58" src="{{asset('site/img/demos/finance/icons/people.svg')}}"
                                     alt="" data-icon
                                     data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"/>
                            </strong>
                        </div>
                        <div class="process-step-content px-4">
                            <h4 class="font-weight-bold text-6 pb-1 mb-2">People</h4>
                            <p class="text-3-5 text-color-dark mb-0">Customer and business payments </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <div class="container py-5 mt-3 mb-5-5">
            <div class="row mb-2">
                <div class="col text-center">
                    <h3 class="font-weight-bold text-color-default line-height-1 text-4 ls-0 mb-1 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">NEWS AND EVENTS</h3>
                    <h2 class="text-color-dark font-weight-bold text-8 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Our Blog</h2>
                </div>
            </div>
            <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                <div class="col-lg-4 mb-5-5 mb-lg-0">
                    <article>
                        <header class="mb-3">
                            <div class="bg-primary d-inline-flex justify-content-center">
                                <time
                                    class="d-flex flex-column align-items-center text-color-light font-weight-semibold line-height-1 text-6 py-2 px-4-5">
                                    18
                                    <span
                                        class="custom-font-size-1 font-weight-medium line-height-1 positive-ls-3 position-relative left-1">FEB</span>
                                </time>
                            </div>
                        </header>
                        <span class="positive-ls-2 text-2">BY ADMIN</span>
                        <h4 class="font-weight-bold text-5-5 mb-2">
                            <a href="#" class="text-color-dark text-color-hover-primary text-decoration-none">Innovative
                                scams</a>
                        </h4>
                        <p class="text-3-5 mb-2">In the past few days, customers of Egyptian banks have been subjected
                            to innovative scams.
                            The hackers seized sums of money amounting to 2.7 million pounds from customer balances in
                            various banks.
                            The operations were carried out by hackers whose identity or location of activity has not
                            yet been revealed
                        </p>
                        <a href="#" class="text-color-primary text-decoration-none font-weight-medium opacity-hover-8">View
                            More</a>
                    </article>
                </div>
                <div class="col-lg-4 mb-5-5 mb-lg-0">
                    <article>
                        <header class="mb-3">
                            <div class="bg-primary d-inline-flex justify-content-center">
                                <time
                                    class="d-flex flex-column align-items-center text-color-light font-weight-semibold line-height-1 text-6 py-2 px-4-5">
                                    22
                                    <span
                                        class="custom-font-size-1 font-weight-medium line-height-1 positive-ls-3 position-relative left-1">MAR</span>
                                </time>
                            </div>
                        </header>
                        <span class="positive-ls-2 text-2">BY ADMIN</span>
                        <h4 class="font-weight-bold text-5-5 mb-2">
                            <a href="#" class="text-color-dark text-color-hover-primary text-decoration-none">Email
                                fraud</a>
                        </h4>
                        <p class="text-3-5 mb-2">Hackers use various methods to deceive victims and seize their personal
                            and banking information.
                            Customers should be careful and not give any bank details to anyone, even if they claim to
                            be from the bank
                        </p>
                        <a href="#" class="text-color-primary text-decoration-none font-weight-medium opacity-hover-8">View
                            More</a>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article>
                        <header class="mb-3">
                            <div class="bg-primary d-inline-flex justify-content-center">
                                <time
                                    class="d-flex flex-column align-items-center text-color-light font-weight-semibold line-height-1 text-6 py-2 px-4-5">
                                    3
                                    <span
                                        class="custom-font-size-1 font-weight-medium line-height-1 positive-ls-3 position-relative left-1">APE</span>
                                </time>
                            </div>
                        </header>
                        <span class="positive-ls-2 text-2">BY ADMIN</span>
                        <h4 class="font-weight-bold text-5-5 mb-2">
                            <a href="#" class="text-color-dark text-color-hover-primary text-decoration-none">Painful
                                experiences</a>
                        </h4>
                        <p class="text-3-5 mb-2">Some victims shared their traumatic experiences, where they were
                            contacted by people claiming to be from banks and asking for their personal details.
                            Large sums of money were withdrawn from their accounts after they provided the required
                            information
                        </p>
                        <a href="#" class="text-color-primary text-decoration-none font-weight-medium opacity-hover-8">View
                            More</a>
                    </article>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <section class="section border-0 bg-color-primary h-100 m-0">
                        <div class="row justify-content-end py-5-5 m-0 appear-animation"
                             data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="350">
                            <div class="col-half-section col-half-section-right ps-4">
                                <h3 class="font-weight-bold text-color-light line-height-1 text-4 ls-0 mb-1">REQUEST A
                                    CALL</h3>
                                <h2 class="text-color-light font-weight-bold text-8 ls-0 mb-3">We call you back</h2>
                                <p class="text-color-light opacity-7 font-weight-light text-3-5 line-height-9">Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi
                                    euismodac, finibus vitae dui.</p>
                                <form
                                    class="contact-form form-style-4 form-style-4-border-light-2 form-errors-light pe-lg-5"
                                    action="{{asset('site/php/contact-form.php')}}" method="POST">
                                    <div class="contact-form-success alert alert-success d-none mt-4">
                                        <strong>Success!</strong> Your message has been sent to us.
                                    </div>
                                    <div class="contact-form-error alert alert-danger d-none mt-4">
                                        <strong>Error!</strong> There was an error sending your message.
                                        <span class="mail-error-message text-1 mt-2 d-block"></span>
                                    </div>
                                    <div class="row mb-2 mx-0">
                                        <input type="text"
                                               class="form-control font-weight-semibold text-color-light px-1 py-3"
                                               name="name" placeholder="* Full Name"
                                               data-msg-required="This field is required." id="name" required=""/>
                                    </div>
                                    <div class="row mx-0 mb-3">
                                        <input type="email"
                                               class="form-control font-weight-semibold text-color-light px-1 py-3"
                                               name="email" placeholder="* Email Address"
                                               data-msg-required="This field is required." id="email" required=""/>
                                    </div>
                                    <div class="row mb-4 mx-0">
                                        <textarea name="message" id="message" rows="4"
                                                  class="form-control form-control font-weight-semibold text-color-light px-1 py-3"
                                                  placeholder="* Message"></textarea>
                                    </div>
                                    <input type="submit"
                                           class="btn btn-light text-color-dark font-weight-bold positive-ls-3 btn-px-5 py-3"
                                           value="SUBMIT"/>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6 p-0">
                    <section class="section section-no-border bg-dark overflow-hidden h-100 m-0">
                        <div class="row py-5-5 m-0 appear-animation" data-appear-animation="fadeInRightShorter"
                             data-appear-animation-delay="300">
                            <div class="col-half-section col-half-section-left ps-lg-5">
                                <h3 class="font-weight-bold text-color-light line-height-1 text-4 ls-0 mb-1">TALK TO A
                                    SPECIALIST</h3>
                                <h2 class="text-color-light font-weight-bold text-8 ls-0 mb-3">Let's Talk Business</h2>
                                <p class="text-color-grey line-height-9 text-3-5 mb-5-5">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Sed imperdiet libero id nisi euismodac, finibus vitae
                                    dui rem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <div class="d-flex align-items-center">
                                    <i class="icons icon-phone text-9 text-color-light position-relative bottom-1"></i>
                                    <a href="tel:0123456789"
                                       class="text-4-5 font-weight-bold text-color-light opacity-hover-8 text-decoration-none ps-3-5">(800)
                                        123-4567</a>
                                </div>
                                <div class="d-flex align-items-center my-5-5">
                                    <img width="38" height="38"
                                         src="{{asset('site/img/demos/finance/icons/email.svg')}}" alt="" data-icon
                                         data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}"/>
                                    <a href="mailto:example@domain.com"
                                       class="text-4-5 font-weight-bold text-color-light opacity-hover-8 text-decoration-none ps-3-5">porto@domain.com</a>
                                </div>
                                <div class="d-flex align-items-center pe-lg-5 mb-5">
                                    <img width="38" height="38"
                                         src="{{asset('site/img/demos/finance/icons/map-pin.svg')}}" alt="" data-icon
                                         data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}"/>
                                    <p class="text-color-light font-weight-bold text-4-5 mb-0 ps-3-5 pe-lg-5 me-lg-5">
                                        123 Street Name, New York NY 10000, USA</p>
                                </div>
                                <a href="demo-finance-company.html"
                                   class="btn btn-light text-color-dark font-weight-bold positive-ls-3 btn-px-5 py-3">ABOUT
                                    US</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </div>

@endsection




