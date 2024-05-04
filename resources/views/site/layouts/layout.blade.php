<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Finance</title>

    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('site/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('site/img/apple-touch-icon.png')}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
   @include('site.layouts.styles')

</head>

<body>

<div class="body">

   @include('site.layouts.header')

    @yield('content')



    <footer id="footer" class="footer-reveal bg-light border-0 m-0">
        <div class="container py-5 mt-5">
            <div class="row">
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <a href="{{route('site.index')}}" title="Porto Finance">
                        <img src="{{asset('site/img/demos/finance/logo.png')}}" class="img-fluid mt-2" width="123" height="48" alt="Porto Finance Logo Image" />
                    </a>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <h4 class="text-color-dark font-weight-bold mb-4-5">Navigation</h4>
                    <ul class="list list-unstyled columns-lg-2 text-3-5">
                        <li><a href="{{route('site.index')}}">Home</a></li>
                        <li><a href="{{route('site.company')}}">Company</a></li>
                        <li><a href="{{route('site.strategies')}}">Strategies</a></li>
                        <li><a href="{{route('site.index')}}">Team</a></li>
                        <li><a href="{{route('site.blog')}}">News</a></li>
                        <li><a href="{{route('site.contact-us')}}">Contact</a></li>

                    </ul>
                </div>
                <div class="col-lg-2 mb-4 mb-lg-0">
                    <h4 class="text-color-dark font-weight-bold mb-4-5">Policies</h4>
                    <ul class="list list-unstyled text-3-5">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">FAQ's</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4 class="text-color-dark font-weight-bold mb-4-5">Newsletter</h4>
                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class="alert alert-danger d-none" id="newsletterError"></div>
                    <form id="newsletterForm" action="{{asset('site/php/newsletter-subscribe.php')}}" method="POST" class="mw-100">
                        <div class="input-group">
                            <input class="form-control bg-color-light-scale-1 border-0 px-4 text-3" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="email">
                            <button class="btn btn-primary px-3" type="submit">
                                <img width="27" height="27" src="{{asset('site/img/demos/business-consulting-3/icons/arrow-right.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <hr>
                </div>
            </div>
        </div>
        <div class="footer-copyright bg-light m-0 pt-3-5 pb-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-sm-auto text-center text-sm-start order-2 order-sm-1">
                        <p class="text-3">Porto Finance © 2021. All Rights Reserved.</p>
                    </div>
                    <div class="col-12 col-sm-auto order-1 order-sm-2 mb-2 mb-sm-0">
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="text-color-dark text-color-hover-primary font-weight-semibold text-3 text-decoration-none px-3" href="#" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ENG
                                <i class="fas fa-angle-down ms-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow-centered dropdown-menu-arrow-centered-style-2 min-width-0" aria-labelledby="dropdownLanguage">
                                <a class="dropdown-item text-1" href="#">ESP</a>
                                <a class="dropdown-item text-1" href="#">FRA</a>
                                <a class="dropdown-item text-1" href="#">ENG</a>
                            </div>
                            <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium border border-top-0 border-end-0 border-bottom-0 ps-3 ms-2 mb-0">
                                <li class="social-icons-facebook">
                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-icons-twitter">
                                    <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-icons-linkedin">
                                    <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@include('site.layouts.scripts')

</body>

</html>
