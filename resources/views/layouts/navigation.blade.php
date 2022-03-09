<header class="nav">

    <div class="nav__holder nav--sticky">
        <div class="container relative">
            <div class="flex-parent">

                <!-- Side Menu Button -->
                <button class="nav-icon-toggle d-lg-none" id="nav-icon-toggle" aria-label="Open side menu">
                            <span class="nav-icon-toggle__box">
                                <span class="nav-icon-toggle__inner"></span>
                            </span>
                </button>

                <!-- Logo -->
                <a href="{{ route('welcome') }}" class="logo">
                    <img class="logo__img" src="{{ asset('assets/img/logo_default.png') }}" alt="logo">
                </a>

                <!-- Nav-wrap -->
                <nav class="flex-child nav__wrap d-none d-lg-block">
                    <ul class="nav__menu">

                        <li class="active">
                            <a href="{{ route('welcome') }}">صفحه اصلی</a>
                        </li>

                        <li class="nav__dropdown">
                            <a href="{{ route('page') }}">صفحات</a>
                            <ul class="nav__dropdown-menu nav__megamenu">
                                <li>
                                    <div class="nav__megamenu-wrap">
                                        <div class="row">

                                            <div class="col nav__megamenu-item">
                                                <article class="entry">
                                                    <div class="entry__img-holder">
                                                        <a href="{{ route('page') }}">
                                                            <img src="{{ asset('assets/img/page/page.png') }}" alt="" class="entry__img">
                                                        </a>
                                                        <a href="{{ route('page') }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">صفحات سایت</a>
                                                    </div>

                                                    <div class="entry__body">
                                                        <h2 class="entry__title">
                                                            <a href="{{ route('page') }}">از همه صفحات سایت با خبر باشید !</a>
                                                        </h2>
                                                    </div>
                                                </article>
                                            </div>

                                            <div class="col nav__megamenu-item">
                                                <article class="entry">
                                                    <div class="entry__img-holder">
                                                        <a href="{{ route('contactus') }}">
                                                            <img src="{{ asset('assets/img/page/contactus.png') }}" alt="" class="entry__img">
                                                        </a>
                                                        <a href="{{ route('contactus') }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">تماس باما</a>
                                                    </div>

                                                    <div class="entry__body">
                                                        <h2 class="entry__title">
                                                            <a href="{{ route('contactus') }}">لطفا از طریق ارسال فرم با ما در ارتباط باشید</a>
                                                        </h2>
                                                    </div>
                                                </article>
                                            </div>

                                            <div class="col nav__megamenu-item">
                                                <article class="entry">
                                                    <div class="entry__img-holder">
                                                        <a href="{{ route('aboutme') }}">
                                                            <img src="{{ asset('assets/img/page/aboutme.png') }}" alt="" class="entry__img">
                                                        </a>
                                                        <a href="{{ route('aboutme') }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">درباره ما</a>
                                                    </div>

                                                    <div class="entry__body">
                                                        <h2 class="entry__title">
                                                            <a href="{{ route('aboutme') }}">هدف ما پیشرفت و اموزش فرزند شماست برای بهترین شدن</a>
                                                        </h2>
                                                    </div>
                                                </article>
                                            </div>

                                            <div class="col nav__megamenu-item">
                                                <article class="entry">
                                                    <div class="entry__img-holder">
                                                        <a href="{{ route('login') }}">
                                                            <img src="{{ asset('assets/img/page/login.png') }}" alt="" class="entry__img">
                                                        </a>
                                                        <a href="{{ route('login') }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">ورود به سیستم</a>
                                                    </div>

                                                    <div class="entry__body">
                                                        <h2 class="entry__title">
                                                            <a href="{{ route('login') }}">برای استفاده از امکانات سایت لطفا وارد به سیستم شوید</a>
                                                        </h2>
                                                    </div>
                                                </article>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ul> <!-- end megamenu -->
                        </li>

                        @auth
                            <li class="nav__dropdown">
                                <a href="{{route('home')}}">{{ Auth::user()->name }}</a>
                                <ul class="nav__dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            خروج از سیستم
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        @endauth

                    </ul> <!-- end menu -->
                </nav> <!-- end nav-wrap -->

                <!-- Nav Right -->
                <div class="nav__right">

                    <!-- Search -->
                    <div class="nav__right-item nav__search">
                        <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                            <i class="ui-search nav__search-trigger-icon"></i>
                        </a>
                        <div class="nav__search-box" id="nav__search-box">
                            <form class="nav__search-form">
                                <input type="text" placeholder="جستجو مقالات" class="nav__search-input">
                                <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                    <i class="ui-search nav__search-icon"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                </div> <!-- end nav right -->

            </div> <!-- end flex-parent -->
        </div> <!-- end container -->

    </div>
</header>
