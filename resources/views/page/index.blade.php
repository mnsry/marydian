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
                    @php
                        $pages = \TCG\Voyager\Models\Page::all();
                    @endphp
                    @foreach($pages as $page)
                        <div class="col-md-6">
                            <article class="entry card">
                                <div class="entry__img-holder card__img-holder">
                                    <a href="{{ route('page.show', $page) }}">
                                        <div class="thumb-container thumb-70">
                                            <img data-src="{{ Voyager::Image($page->image) }}" src="{{ Voyager::Image($page->image) }}" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                    <a href="{{ route('page.show', $page) }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{ $page->title }}</a>
                                </div>

                                <div class="entry__body card__body">
                                    <div class="entry__header">

                                        <h2 class="entry__title">
                                            <a href="{{ route('page.show', $page) }}">{{ $page->excerpt }}</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>نویسنده:</span>
                                                <a href="#">
                                                    @php
                                                        $user = \App\Models\User::where('id', $page->author_id)->first();
                                                    @endphp
                                                    {{ $user->name }}
                                                </a>
                                            </li>
                                            <li class="entry__meta-date">
                                                {{ $page->created_at->diffForHumans() }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <nav class="pagination">
                    <span class="pagination__page pagination__page--current">۱</span>
{{--                    <a href="#" class="pagination__page">۲</a>--}}
{{--                    <a href="#" class="pagination__page">۳</a>--}}
{{--                    <a href="#" class="pagination__page">۴</a>--}}
                    <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-left"></i></a>
                </nav>
            </div> <!-- end posts -->

            <!-- Sidebar -->
            <aside class="col-lg-4 sidebar sidebar--right">

                <!-- Widget Popular Posts -->
                <aside class="widget widget-popular-posts">
                    <h4 class="widget-title">محبوب ترین مقالات</h4>
                    <ul class="post-list-small">
                        @foreach($pages as $page)
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="{{ route('page.show', $page) }}">
                                                <img data-src="{{ Voyager::Image($page->image) }}" src="{{ Voyager::Image($page->image) }}" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="{{ route('page.show', $page) }}">{{ $page->title }}</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>نویسنده:</span>
                                                @php
                                                    $user = \App\Models\User::where('id', $page->author_id)->first();
                                                @endphp
                                                <a href="#">{{ $user->name }}</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                {{ $page->created_at->diffForHumans() }}
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        @endforeach
                    </ul>
                </aside> <!-- end widget popular posts -->

                <!-- Widget Ad 300 -->
{{--                <aside class="widget widget_media_image">--}}
{{--                    <a href="#">--}}
{{--                        <img src="{{ asset('assets/img/content/mag-1.jpg') }}" alt="">--}}
{{--                    </a>--}}
{{--                </aside>--}}
                <!-- end widget ad 300 -->

            </aside> <!-- end sidebar -->

        </div> <!-- end content -->
    </div> <!-- end main container -->

@endsection
