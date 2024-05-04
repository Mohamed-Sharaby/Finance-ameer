<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 85}">
    <div class="header-body border-0">

        <div class="header-container container" style="height: 115px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{route('site.index')}}">
                                <img alt="Porto Finance" width="123" height="48" src="{{asset('site/img/demos/finance/logo.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links">
                            <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" href="{{route('site.index')}}">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('site.company')}}">
                                                Company
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('site.strategies')}}">
                                                Strategies
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('site.form')}}">
                                                Form
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('site.blog')}}">
                                                News
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('site.contact-us')}}">
                                                Contact
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('admin.main')}}">
                                                Dashboard
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <ul class="header-extra-info ms-5-5">
                            <li class="d-inline-flex ms-0">
                                <div class="header-extra-info-icon d-none d-sm-block">
                                    <i class="icons icon-phone text-3 text-color-dark position-relative top-3"></i>
                                </div>
                                <div class="header-extra-info-text line-height-2">
                                    <span class="text-1 font-weight-semibold text-color-default">CALL US NOW</span>
                                    <strong class="text-4"><a href="tel:+1234567890" class="text-color-hover-primary text-decoration-none">(800) 123-4567</a></strong>
                                </div>
                            </li>
                        </ul>
                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
