<header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
        <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
            <i class="ui-close sidenav__close-icon"></i>
        </button>
    </div>

    <!-- Nav -->
    <nav class="sidenav__menu-container">
        <ul class="sidenav__menu" role="menubar">
            <li>
                <a href="{{ route('welcome') }}" class="sidenav__menu-url">صفحه اصلی</a>
            </li>
            <li>
                <a href="{{ route('page') }}" class="sidenav__menu-url">مقالات</a>
            </li>
            <li>
                <a href="{{ route('contactus') }}" class="sidenav__menu-url">تماس باما</a>
            </li>
            <li>
                <a href="{{ route('aboutme') }}" class="sidenav__menu-url">درباره ما</a>
            </li>
            @guest
                <li>
                    <a href="{{ route('login') }}" class="sidenav__menu-url">ورود به سیستم</a>
                </li>
            @else
                <li>
                    <a href="{{route('home')}}" class="sidenav__menu-url">{{ Auth::user()->name }}</a>
                    <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                    <ul class="sidenav__menu-dropdown">
                        <li>
                            <a class="sidenav__menu-url" href="{{ route('logout') }}"
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
            @endguest
        </ul>
    </nav>

    <div class="socials sidenav__socials">
        <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
            <i class="ui-facebook"></i>
        </a>
        <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
            <i class="ui-twitter"></i>
        </a>
        <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
            <i class="ui-google"></i>
        </a>
        <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
            <i class="ui-youtube"></i>
        </a>
        <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
            <i class="ui-instagram"></i>
        </a>
    </div>
</header>
