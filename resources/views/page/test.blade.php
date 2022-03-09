<!DOCTYPE html>
{{--@if (Route::has('login'))--}}
{{--    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--        @auth--}}
{{--            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}
{{--        @else--}}
{{--            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--            @if (Route::has('register'))--}}
{{--                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--            @endif--}}
{{--        @endauth--}}
{{--    </div>--}}
{{--@endif--}}


<!-- Trending Now -->
<div class="container">
    <div class="trending-now">
                <span class="trending-now__label">
                    <i class="ui-flash"></i>
                    خبرهای داغ</span>
        <div class="newsticker">
            <ul class="newsticker__list">
                <li class="newsticker__item"><a href="single-post.html" class="newsticker__item-url">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a></li>
                <li class="newsticker__item"><a href="single-post-1.html" class="newsticker__item-url">لنوو Z6 پرو با دوربین چهارگانه و اسنپ‌دراگون ۸۵۵ معرفی شد</a></li>
                <li class="newsticker__item"><a href="single-post-3.html" class="newsticker__item-url">سامسونگ مشغول ساخت دو گوشی تاشو جدید است</a></li>
            </ul>
        </div>
        <div class="newsticker-buttons">
            <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-left"></i></button>
            <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-right"></i></button>
        </div>
    </div>
</div>

<!-- Featured Posts Grid -->
<section class="featured-posts-grid">
    <div class="container">
        <div class="row row-8">

            <div class="col-lg-6">

                <!-- Small post -->
                <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                    <article class="entry card post-list featured-posts-grid__entry">
                        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ asset('assets/img/content/thumb/post-5.jpg') }})">
                            <a href="single-post.html" class="thumb-url"></a>
                            <img src="{{ asset('assets/img/content/thumb/post-5.jpg') }}" alt="" class="entry__img d-none">
                            <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">کتاب</a>
                        </div>

                        <div class="entry__body post-list__body card__body">
                            <h2 class="entry__title">
                                <a href="single-post.html">۵ کتاب روانشناسی که برای زندگی بهتر باید بخوانید</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#">بهرامی راد</a>
                                </li>
                                <li class="entry__meta-date">
                                    ۴ اردیبهشت ۱۳۹۸
                                </li>
                            </ul>
                        </div>
                    </article>
                </div> <!-- end post -->

                <!-- Small post -->
                <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                    <article class="entry card post-list featured-posts-grid__entry">
                        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ asset('assets/img/content/thumb/post-6.jpg') }})">
                            <a href="single-post.html" class="thumb-url"></a>
                            <img src="{{ asset('assets/img/content/thumb/post-6.jpg') }}" alt="" class="entry__img d-none">
                            <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">اپلیکیشن و نرم افزار</a>
                        </div>

                        <div class="entry__body post-list__body card__body">
                            <h2 class="entry__title">
                                <a href="single-post.html">چرا لانچرهای اندروید دیگر محبوبیت گذشته را ندارند؟</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#">بهرامی راد</a>
                                </li>
                                <li class="entry__meta-date">
                                    ۴ اردیبهشت ۱۳۹۸
                                </li>
                            </ul>
                        </div>
                    </article>
                </div> <!-- end post -->

                <!-- Small post -->
                <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                    <article class="entry card post-list featured-posts-grid__entry">
                        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ asset('assets/img/content/thumb/post-7.jpg') }})">
                            <a href="single-post.html" class="thumb-url"></a>
                            <img src="{{ asset('assets/img/content/thumb/post-7.jpg') }}" alt="" class="entry__img d-none">
                            <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">معرفی محصول</a>
                        </div>

                        <div class="entry__body post-list__body card__body">
                            <h2 class="entry__title">
                                <a href="single-post.html">جعبه‌گشایی هواوی P30 لایت در دیجی‌کالا مگ</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#">بهرامی راد</a>
                                </li>
                                <li class="entry__meta-date">
                                    ۴ اردیبهشت ۱۳۹۸
                                </li>
                            </ul>
                        </div>
                    </article>
                </div> <!-- end post -->

            </div> <!-- end col -->

            <div class="col-lg-6">

                <!-- Large post -->
                <div class="featured-posts-grid__item featured-posts-grid__item--lg">
                    <article class="entry card featured-posts-grid__entry">
                        <div class="entry__img-holder card__img-holder">
                            <a href="single-post.html">
                                <img src="{{ asset('assets/img/content/thumb/post-8.jpg') }}" alt="" class="entry__img">
                            </a>
                            <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">موبایل و گجت</a>
                        </div>

                        <div class="entry__body card__body">
                            <h2 class="entry__title">
                                <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#">بهرامی راد</a>
                                </li>
                                <li class="entry__meta-date">
                                    ۴ اردیبهشت ۱۳۹۸
                                </li>
                            </ul>
                        </div>
                    </article>
                </div> <!-- end large post -->
            </div>

        </div>
    </div>
</section> <!-- end featured posts grid -->

<div class="main-container container pt-24" id="main-container">

    <!-- Content -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content">

            <!-- Latest News -->
            <section class="section tab-post mb-16">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">آخرین عنوان ها</h3>

                    <div class="tabs tab-post__tabs">
                        <ul class="tabs__list">
                            <li class="tabs__item tabs__item--active">
                                <a href="#tab-all" class="tabs__trigger">همه</a>
                            </li>
                            <li class="tabs__item">
                                <a href="#tab-world" class="tabs__trigger">تکنولوژی</a>
                            </li>
                            <li class="tabs__item">
                                <a href="#tab-lifestyle" class="tabs__trigger">موبایل</a>
                            </li>
                            <li class="tabs__item">
                                <a href="#tab-business" class="tabs__trigger">کتاب</a>
                            </li>
                            <li class="tabs__item">
                                <a href="#tab-fashion" class="tabs__trigger">فرهنگ و هنر</a>
                            </li>
                        </ul> <!-- end tabs -->
                    </div>
                </div>

                <!-- tab content -->
                <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

                    <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                        <div class="row card-row">
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-8.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>عد از اعلام تصمیم سامسونگ برای به عقب انداختن عرضه گلکسی فولد، شایعاتی مبنی بر احتمال تاخیر در عرضه ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-9.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">بهترین کتاب‌های کودک و نوجوان برای تربیت فرزندان موفق</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>انتخاب کتاب مناسب برای فرزندان کار دشواری است. دوستی دارم که تعریف می‌کند در بچگی با پدر و مادرش به ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-2-2.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>مدیرعامل شرکت وان پلاس، آقای Pete Lau، اخیرا با وب‌سایت ورج مصاحبه داشته و برخی شایعاتی که درباره وا ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-5-2.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">۵ کتاب روانشناسی که برای زندگی بهتر باید بخوانید</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>این روزها مشکلات زندگی مدرن باعث شده که مردم بیش از پیش به نیازهای روانی خودشان توجه کنند. مشکلات حا ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div> <!-- end pane 1 -->

                    <div class="tabs__content-pane" id="tab-world">
                        <div class="row card-row">
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-9.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">بهترین کتاب‌های کودک و نوجوان برای تربیت فرزندان موفق</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>انتخاب کتاب مناسب برای فرزندان کار دشواری است. دوستی دارم که تعریف می‌کند در بچگی با پدر و مادرش به ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-8.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>عد از اعلام تصمیم سامسونگ برای به عقب انداختن عرضه گلکسی فولد، شایعاتی مبنی بر احتمال تاخیر در عرضه ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-5-2.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">۵ کتاب روانشناسی که برای زندگی بهتر باید بخوانید</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>این روزها مشکلات زندگی مدرن باعث شده که مردم بیش از پیش به نیازهای روانی خودشان توجه کنند. مشکلات حا ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-2-2.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>مدیرعامل شرکت وان پلاس، آقای Pete Lau، اخیرا با وب‌سایت ورج مصاحبه داشته و برخی شایعاتی که درباره وا ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div> <!-- end pane 2 -->

                    <div class="tabs__content-pane" id="tab-lifestyle">
                        <div class="row card-row">
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-9.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">بهترین کتاب‌های کودک و نوجوان برای تربیت فرزندان موفق</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>انتخاب کتاب مناسب برای فرزندان کار دشواری است. دوستی دارم که تعریف می‌کند در بچگی با پدر و مادرش به ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-8.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>عد از اعلام تصمیم سامسونگ برای به عقب انداختن عرضه گلکسی فولد، شایعاتی مبنی بر احتمال تاخیر در عرضه ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-2-2.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>مدیرعامل شرکت وان پلاس، آقای Pete Lau، اخیرا با وب‌سایت ورج مصاحبه داشته و برخی شایعاتی که درباره وا ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-5-2.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">۵ کتاب روانشناسی که برای زندگی بهتر باید بخوانید</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>این روزها مشکلات زندگی مدرن باعث شده که مردم بیش از پیش به نیازهای روانی خودشان توجه کنند. مشکلات حا ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div> <!-- end pane 3 -->

                    <div class="tabs__content-pane" id="tab-business">
                        <div class="row card-row">
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-2-2.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>مدیرعامل شرکت وان پلاس، آقای Pete Lau، اخیرا با وب‌سایت ورج مصاحبه داشته و برخی شایعاتی که درباره وا ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-5-2.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">۵ کتاب روانشناسی که برای زندگی بهتر باید بخوانید</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>این روزها مشکلات زندگی مدرن باعث شده که مردم بیش از پیش به نیازهای روانی خودشان توجه کنند. مشکلات حا ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-9.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">بهترین کتاب‌های کودک و نوجوان برای تربیت فرزندان موفق</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>انتخاب کتاب مناسب برای فرزندان کار دشواری است. دوستی دارم که تعریف می‌کند در بچگی با پدر و مادرش به ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-8.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>عد از اعلام تصمیم سامسونگ برای به عقب انداختن عرضه گلکسی فولد، شایعاتی مبنی بر احتمال تاخیر در عرضه ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div> <!-- end pane 4 -->

                    <div class="tabs__content-pane" id="tab-fashion">
                        <div class="row card-row">
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-8.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>عد از اعلام تصمیم سامسونگ برای به عقب انداختن عرضه گلکسی فولد، شایعاتی مبنی بر احتمال تاخیر در عرضه ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-2-2.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>مدیرعامل شرکت وان پلاس، آقای Pete Lau، اخیرا با وب‌سایت ورج مصاحبه داشته و برخی شایعاتی که درباره وا ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-5-2.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">۵ کتاب روانشناسی که برای زندگی بهتر باید بخوانید</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>این روزها مشکلات زندگی مدرن باعث شده که مردم بیش از پیش به نیازهای روانی خودشان توجه کنند. مشکلات حا ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="entry card">
                                    <div class="entry__img-holder card__img-holder">
                                        <a href="single-post.html">
                                            <div class="thumb-container thumb-70">
                                                <img data-src="{{ asset('assets/img/content/thumb/post-9.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="single-post.html">بهترین کتاب‌های کودک و نوجوان برای تربیت فرزندان موفق</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">بهرامی راد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    ۴ اردیبهشت ۱۳۹۸
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>انتخاب کتاب مناسب برای فرزندان کار دشواری است. دوستی دارم که تعریف می‌کند در بچگی با پدر و مادرش به ...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div> <!-- end pane 5 -->
                </div> <!-- end tab content -->
            </section> <!-- end latest news -->

        </div> <!-- end posts -->

        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">

            <!-- Widget Popular Posts -->
            <aside class="widget widget-popular-posts">
                <h4 class="widget-title">محبوب ترین مقالات</h4>
                <ul class="post-list-small">
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                            <div class="post-list-small__img-holder">
                                <div class="thumb-container thumb-100">
                                    <a href="single-post.html">
                                        <img data-src="{{ asset('assets/img/content/thumb/post-8.jpg') }}" src="{{ asset('assets/img/empty.png') }}" alt="" class="post-list-small__img--rounded lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="post-list-small__body">
                                <h3 class="post-list-small__entry-title">
                                    <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                                </h3>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#">بهرامی راد</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        ۴ اردیبهشت ۱۳۹۸
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                            <div class="post-list-small__img-holder">
                                <div class="thumb-container thumb-100">
                                    <a href="single-post.html">
                                        <img data-src="{{ asset('assets/img/content/thumb/post-2.jpg') }}" src="{{ asset('assets/img/empty.png') }}" alt="" class="post-list-small__img--rounded lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="post-list-small__body">
                                <h3 class="post-list-small__entry-title">
                                    <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                                </h3>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#">بهرامی راد</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        ۴ اردیبهشت ۱۳۹۸
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                            <div class="post-list-small__img-holder">
                                <div class="thumb-container thumb-100">
                                    <a href="single-post.html">
                                        <img data-src="{{ asset('assets/img/content/thumb/post-6.jpg') }}" src="{{ asset('assets/img/empty.png') }}" alt="" class="post-list-small__img--rounded lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="post-list-small__body">
                                <h3 class="post-list-small__entry-title">
                                    <a href="single-post.html">چرا لانچرهای اندروید دیگر محبوبیت گذشته را ندارند؟</a>
                                </h3>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#">بهرامی راد</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        ۴ اردیبهشت ۱۳۹۸
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                            <div class="post-list-small__img-holder">
                                <div class="thumb-container thumb-100">
                                    <a href="single-post.html">
                                        <img data-src="{{ asset('assets/img/content/thumb/post-5.jpg') }}" src="{{ asset('assets/img/empty.png') }}" alt="" class="post-list-small__img--rounded lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="post-list-small__body">
                                <h3 class="post-list-small__entry-title">
                                    <a href="single-post.html">۵ کتاب روانشناسی که برای زندگی بهتر باید بخوانید</a>
                                </h3>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#">بهرامی راد</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        ۴ اردیبهشت ۱۳۹۸
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                </ul>
            </aside> <!-- end widget popular posts -->

            <!-- Widget Newsletter -->
            <aside class="widget widget_mc4wp_form_widget">
                <h4 class="widget-title">خبرنامه</h4>
                <p class="newsletter__text">
                    <i class="ui-email newsletter__icon"></i>
                    برای اطلاع از آخرین خبرها مشترک شوید
                </p>
                <form class="mc4wp-form" method="post">
                    <div class="mc4wp-form-fields">
                        <div class="form-group">
                            <input type="email" name="EMAIL" placeholder="ایمیل" required="">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-color" value="عضویت">
                        </div>
                    </div>
                </form>
            </aside> <!-- end widget newsletter -->

            <!-- Widget Ad 300 -->
            <aside class="widget widget_media_image">
                <a href="#">
                    <img src="{{ asset('assets/img/content/mag-1.jpg') }}" alt="">
                </a>
            </aside> <!-- end widget ad 300 -->

        </aside> <!-- end sidebar -->

    </div> <!-- end content -->

    <!-- Ad Banner 728 -->
    <div class="text-center pb-48">
        <a href="#">
            <img src="{{ asset('assets/img/content/cinema-banner.jpg') }}" alt="">
        </a>
    </div>

    <!-- Carousel posts -->
    <section class="section mb-0">
        <div class="title-wrap title-wrap--line">
            <h3 class="section-title">پربازدیدترین مقالات</h3>
        </div>

        <!-- Slider -->
        <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
            <article class="entry thumb thumb--size-1">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url('{{ asset('assets/img/content/thumb/post-8.jpg') }}')">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                        </h2>
                    </div>
                    <a href="single-post.html" class="thumb-url"></a>
                </div>
            </article>
            <article class="entry thumb thumb--size-1">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url('{{ asset('assets/img/content/thumb/post-9.jpg') }}')">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="single-post.html">بهترین کتاب‌های کودک و نوجوان برای تربیت فرزندان موفق</a>
                        </h2>
                    </div>
                    <a href="single-post.html" class="thumb-url"></a>
                </div>
            </article>
            <article class="entry thumb thumb--size-1">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url('{{ asset('assets/img/content/thumb/post-7.jpg') }}')">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="single-post.html">جعبه‌گشایی هواوی P30 لایت در دیجی‌کالا مگ</a>
                        </h2>
                    </div>
                    <a href="single-post.html" class="thumb-url"></a>
                </div>
            </article>
            <article class="entry thumb thumb--size-1">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url('{{ asset('assets/img/content/thumb/post-6.jpg') }}')">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="single-post.html">چرا لانچرهای اندروید دیگر محبوبیت گذشته را ندارند؟</a>
                        </h2>
                    </div>
                    <a href="single-post.html" class="thumb-url"></a>
                </div>
            </article>
            <article class="entry thumb thumb--size-1">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url('{{ asset('assets/img/content/thumb/post-2.jpg') }}')">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                        </h2>
                    </div>
                    <a href="single-post.html" class="thumb-url"></a>
                </div>
            </article>
        </div> <!-- end slider -->

    </section> <!-- end carousel posts -->


    <!-- Posts from categories -->
    <section class="section mb-0">
        <div class="row">

            <!-- Technology -->
            <div class="col-md-6">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">تکنولوژی</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <article class="entry thumb thumb--size-2">
                            <div class="entry__img-holder thumb__img-holder" style="background-image: url('{{ asset('assets/img/content/thumb/post-8.jpg') }}')">
                                <div class="bottom-gradient"></div>
                                <div class="thumb-text-holder thumb-text-holder--1">
                                    <h2 class="thumb-entry-title">
                                        <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>نویسنده:</span>
                                            <a href="#">بهرامی راد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            ۴ اردیبهشت ۱۳۹۸
                                        </li>
                                    </ul>
                                </div>
                                <a href="single-post.html" class="thumb-url"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ؟</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ؟</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- end technology -->

            <!-- Travel -->
            <div class="col-md-6">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">کتاب و ادبیات</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <article class="entry thumb thumb--size-2">
                            <div class="entry__img-holder thumb__img-holder" style="background-image: url('{{ asset('assets/img/content/thumb/post-9.jpg') }}')">
                                <div class="bottom-gradient"></div>
                                <div class="thumb-text-holder thumb-text-holder--1">
                                    <h2 class="thumb-entry-title">
                                        <a href="single-post.html">بهترین کتاب‌های کودک و نوجوان برای تربیت فرزندان موفق</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>نویسنده:</span>
                                            <a href="#">بهرامی راد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            ۴ اردیبهشت ۱۳۹۸
                                        </li>
                                    </ul>
                                </div>
                                <a href="single-post.html" class="thumb-url"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- end travel -->

            <!-- Cryptocurrency -->
            <div class="col-md-6">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">موبایل و گجت</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <article class="entry thumb thumb--size-2">
                            <div class="entry__img-holder thumb__img-holder" style="background-image: url('{{ asset('assets/img/content/thumb/post-2-2.jpg') }}')">
                                <div class="bottom-gradient"></div>
                                <div class="thumb-text-holder thumb-text-holder--1">
                                    <h2 class="thumb-entry-title">
                                        <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>نویسنده:</span>
                                            <a href="#">بهرامی راد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            ۴ اردیبهشت ۱۳۹۸
                                        </li>
                                    </ul>
                                </div>
                                <a href="single-post.html" class="thumb-url"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- end cryptocurrency -->

            <!-- Investment -->
            <div class="col-md-6">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">تکنولوژی</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <article class="entry thumb thumb--size-2">
                            <div class="entry__img-holder thumb__img-holder" style="background-image: url('{{ asset('assets/img/content/thumb/post-8.jpg') }}')">
                                <div class="bottom-gradient"></div>
                                <div class="thumb-text-holder thumb-text-holder--1">
                                    <h2 class="thumb-entry-title">
                                        <a href="single-post.html">
                                            گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>نویسنده:</span>
                                            <a href="#">بهرامی راد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            ۴ اردیبهشت ۱۳۹۸
                                        </li>
                                    </ul>
                                </div>
                                <a href="single-post.html" class="thumb-url"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry">
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- end investment -->

        </div>
    </section> <!-- end posts from categories -->

    <!-- Content Secondary -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-72">

            <!-- Worldwide News -->
            <section class="section">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">اخبار تاپ کالا</h3>
                    <a href="#" class="all-posts-url">نمایش همه</a>
                </div>

                <article class="entry card post-list">
                    <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ asset('assets/img/content/thumb/post-8.jpg') }})">
                        <a href="single-post.html" class="thumb-url"></a>
                        <img src="{{ asset('assets/img/content/thumb/post-8.jpg') }}" alt="" class="entry__img d-none">
                        <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">موبایل و گجت</a>
                    </div>

                    <div class="entry__body post-list__body card__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#">بهرامی راد</a>
                                </li>
                                <li class="entry__meta-date">
                                    ۴ اردیبهشت ۱۳۹۸
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p>عد از اعلام تصمیم سامسونگ برای به عقب انداختن عرضه گلکسی فولد، شایعاتی مبنی بر احتمال تاخیر در عرضه ...</p>
                        </div>
                    </div>
                </article>

                <article class="entry card post-list">
                    <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ asset('assets/img/content/thumb/post-2-2.jpg') }})">
                        <a href="single-post.html" class="thumb-url"></a>
                        <img src="{{ asset('assets/img/content/thumb/post-2-2.jpg') }}" alt="" class="entry__img d-none">
                        <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">موبایل و گجت</a>
                    </div>

                    <div class="entry__body post-list__body card__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#">بهرامی راد</a>
                                </li>
                                <li class="entry__meta-date">
                                    ۴ اردیبهشت ۱۳۹۸
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p>مدیرعامل شرکت وان پلاس، آقای Pete Lau، اخیرا با وب‌سایت ورج مصاحبه داشته و برخی شایعاتی که درباره وا ...</p>
                        </div>
                    </div>
                </article>

                <article class="entry card post-list">
                    <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ asset('assets/img/content/thumb/post-9.jpg') }})">
                        <a href="single-post.html" class="thumb-url"></a>
                        <img src="{{ asset('assets/img/content/thumb/post-9.jpg') }}" alt="" class="entry__img d-none">
                        <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">کتاب و ادبیات</a>
                    </div>

                    <div class="entry__body post-list__body card__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="single-post.html">بهترین کتاب‌های کودک و نوجوان برای تربیت فرزندان موفق</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#">بهرامی راد</a>
                                </li>
                                <li class="entry__meta-date">
                                    ۴ اردیبهشت ۱۳۹۸
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p>انتخاب کتاب مناسب برای فرزندان کار دشواری است. دوستی دارم که تعریف می‌کند در بچگی با پدر و مادرش به ...</p>
                        </div>
                    </div>
                </article>

                <article class="entry card post-list">
                    <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ asset('assets/img/content/thumb/post-5-2.jpg') }})">
                        <a href="single-post.html" class="thumb-url"></a>
                        <img src="{{ asset('assets/img/content/thumb/post-5-2.jpg') }}" alt="" class="entry__img d-none">
                        <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">کتاب و ادبیات</a>
                    </div>

                    <div class="entry__body post-list__body card__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="single-post.html">۵ کتاب روانشناسی که برای زندگی بهتر باید بخوانید </a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#">بهرامی راد</a>
                                </li>
                                <li class="entry__meta-date">
                                    ۴ اردیبهشت ۱۳۹۸
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p>این روزها مشکلات زندگی مدرن باعث شده که مردم بیش از پیش به نیازهای روانی خودشان توجه کنند. مشکلات حا ...</p>
                        </div>
                    </div>
                </article>

                <article class="entry card post-list">
                    <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ asset('assets/img/content/thumb/post-8.jpg') }})">
                        <a href="single-post.html" class="thumb-url"></a>
                        <img src="{{ asset('assets/img/content/thumb/post-8.jpg') }}" alt="" class="entry__img d-none">
                        <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">موبایل و گجت</a>
                    </div>

                    <div class="entry__body post-list__body card__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#">بهرامی راد</a>
                                </li>
                                <li class="entry__meta-date">
                                    ۴ اردیبهشت ۱۳۹۸
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p>عد از اعلام تصمیم سامسونگ برای به عقب انداختن عرضه گلکسی فولد، شایعاتی مبنی بر احتمال تاخیر در عرضه ...</p>
                        </div>
                    </div>
                </article>

                <article class="entry card post-list">
                    <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ asset('assets/img/content/thumb/post-2-2.jpg') }})">
                        <a href="single-post.html" class="thumb-url"></a>
                        <img src="{{ asset('assets/img/content/thumb/post-2-2.jpg') }}" alt="" class="entry__img d-none">
                        <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">موبایل و گجت</a>
                    </div>

                    <div class="entry__body post-list__body card__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#">بهرامی راد</a>
                                </li>
                                <li class="entry__meta-date">
                                    ۴ اردیبهشت ۱۳۹۸
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p>مدیرعامل شرکت وان پلاس، آقای Pete Lau، اخیرا با وب‌سایت ورج مصاحبه داشته و برخی شایعاتی که درباره وا ...</p>
                        </div>
                    </div>
                </article>
            </section> <!-- end worldwide news -->

            <!-- Pagination -->
            <nav class="pagination">
                <span class="pagination__page pagination__page--current">۱</span>
                <a href="#" class="pagination__page">۲</a>
                <a href="#" class="pagination__page">۳</a>
                <a href="#" class="pagination__page">۴</a>
                <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-left"></i></a>
            </nav>

        </div> <!-- end posts -->

        <!-- Sidebar 1 -->
        <aside class="col-lg-4 sidebar sidebar--1 sidebar--right">

            <!-- Widget Categories -->
            <aside class="widget widget_categories">
                <h4 class="widget-title">دسته بندی نوشته ها</h4>
                <ul>
                    <li><a href="categories.html">تکنولوژی <span class="categories-count">۵</span></a></li>
                    <li><a href="categories.html">فرهنگ و هنر <span class="categories-count">۷</span></a></li>
                    <li><a href="categories.html">موبایل و گجت <span class="categories-count">۵</span></a></li>
                    <li><a href="categories.html">کتاب <span class="categories-count">۸</span></a></li>
                    <li><a href="categories.html">سامت و زیبایی <span class="categories-count">۱۰</span></a></li>
                    <li><a href="categories.html">سبک زندگی <span class="categories-count">۶</span></a></li>
                </ul>
            </aside> <!-- end widget categories -->

            <!-- Widget Recommended (Rating) -->
            <aside class="widget widget-rating-posts">
                <h4 class="widget-title">منتخب سردبیر</h4>
                <article class="entry">
                    <div class="entry__img-holder">
                        <a href="single-post.html">
                            <div class="thumb-container thumb-60">
                                <img data-src="{{ asset('assets/img/content/thumb/post-9.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="entry__body">
                        <div class="entry__header">

                            <h2 class="entry__title">
                                <a href="single-post.html">بهترین کتاب‌های کودک و نوجوان برای تربیت فرزندان موفق</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#">بهرامی راد</a>
                                </li>
                                <li class="entry__meta-date">
                                    ۴ اردیبهشت ۱۳۹۸
                                </li>
                            </ul>
                            <ul class="entry__meta">
                                <li class="entry__meta-rating">
                                    <i class="ui-star"></i>
                                    <!--
              --><i class="ui-star"></i>
                                    <!--
              --><i class="ui-star"></i>
                                    <!--
              --><i class="ui-star"></i>
                                    <!--
              --><i class="ui-star-empty"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="entry">
                    <div class="entry__img-holder">
                        <a href="single-post.html">
                            <div class="thumb-container thumb-60">
                                <img data-src="{{ asset('assets/img/content/thumb/post-8.jpg') }}" src="{{ asset('assets/img/empty.png') }}" class="entry__img lazyload" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="entry__body">
                        <div class="entry__header">

                            <h2 class="entry__title">
                                <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#">بهرامی راد</a>
                                </li>
                                <li class="entry__meta-date">
                                    ۴ اردیبهشت ۱۳۹۸
                                </li>
                            </ul>
                            <ul class="entry__meta">
                                <li class="entry__meta-rating">
                                    <i class="ui-star"></i>
                                    <!--
              --><i class="ui-star"></i>
                                    <!--
              --><i class="ui-star"></i>
                                    <!--
              --><i class="ui-star"></i>
                                    <!--
              --><i class="ui-star-empty"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </aside> <!-- end widget recommended (rating) -->
        </aside> <!-- end sidebar 1 -->
    </div> <!-- content secondary -->


</div> <!-- end main container -->