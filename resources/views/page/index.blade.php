@extends('layouts.master')

@section('description', setting('site.description'))
@section('keywords', setting('site.keywords'))
@section('title', setting('site.title'))

@section('content')

    <!-- Breadcrumbs -->
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="{{ route('welcome') }}" class="breadcrumbs__url">خانه</a>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
                صفحات
            </li>
        </ul>
    </div>

    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- Posts -->
            <div class="col-lg-8 blog__content mb-72">
                <h1 class="page-title">مقالات سایت</h1>

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

                <!-- Pagination -->
                <nav class="pagination">
                    <span class="pagination__page pagination__page--current">۱</span>
                    <a href="#" class="pagination__page">۲</a>
                    <a href="#" class="pagination__page">۳</a>
                    <a href="#" class="pagination__page">۴</a>
                    <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-left"></i></a>
                </nav>
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

                <!-- Widget Ad 300 -->
                <aside class="widget widget_media_image">
                    <a href="#">
                        <img src="{{ asset('assets/img/content/mag-1.jpg') }}" alt="">
                    </a>
                </aside> <!-- end widget ad 300 -->

            </aside> <!-- end sidebar -->

        </div> <!-- end content -->
    </div> <!-- end main container -->

@endsection
