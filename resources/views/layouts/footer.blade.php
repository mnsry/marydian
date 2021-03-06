<footer class="footer footer--light">
    <div class="container">
        <div class="footer__widgets">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <aside class="widget widget-logo">
                        <a href="{{ route('welcome') }}">
                            <img src="{{ Voyager::Image(setting('site.logo')) }}" class="logo__img" alt="">
                        </a>
                        <p class="copyright">
                            {{ setting('site.footer') }}
                        </p>
                        <div class="socials socials--large socials--rounded mb-24">
                            <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                            <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                            <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                            <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                            <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                        </div>
                    </aside>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <aside class="widget widget_nav_menu">
                        <h4 class="widget-title">لینک های پر کاربرد</h4>
                        <ul>
                            <li><a target="_blank" href="https://soft98.ir">#سایت برای دانلود نرم افزار</a></li>
                            <li><a target="_blank" href="https://digikala.com">#سایت خرید کالا</a></li>
                            <li><a target="_blank" href="https://time.ir">#سایت نمایش ساعت وتقویم ایران</a></li>
                            <li><a target="_blank" href="https://soundcloud.com">#سایت پخش آنلاین موزیک</a></li>
                            <li><a target="_blank" href="https://web.whatsapp.com/">#واتساپ وبسایت</a></li>
                            <li><a target="_blank" href="https://ganjoor.net/ferdousi/shahname/aghaz">#فردوسی شاهنامه</a></li>
                        </ul>
                    </aside>
                </div>

                <div class="col-lg-4 col-md-6">
                    <aside class="widget widget_mc4wp_form_widget">
                        <h4 class="widget-title">خبرنامه</h4>
                        <p class="newsletter__text">
                            <i class="ui-email newsletter__icon"></i>
                            برای اطلاع از آخرین خبرها مشترک شوید
                        </p>
                        <form class="mc4wp-form" method="post" action="{{ route('mobile.new') }}">
                            @csrf
                            <div class="mc4wp-form-fields">
                                <div class="form-group">
                                    <input type="number" name="mobile_new" placeholder="شماره موبایل">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-lg btn-color" value="عضویت">
                                </div>
                            </div>
                            @error('mobile_new')
                                <span class="alert-danger">{{ $message }}</span>
                            @enderror
                        </form>
                    </aside>
                </div>

            </div>
        </div>
    </div> <!-- end container -->
</footer>

<div id="back-to-top">
    <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
</div>
