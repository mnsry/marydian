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
            <li class="breadcrumbs__item">
                <a href="{{ route('home') }}" class="breadcrumbs__url">پست</a>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
                {{ $post->title }}
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            @if(Session::has('message'))
                <h4 class="alert">{{ Session::get('message') }}</h4>
            @endif
        </div>
    </div>

    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- post content -->
            <div class="col-lg-8 blog__content mb-72">
                <div class="content-box">

                    <!-- standard post -->
                    <article class="entry mb-0">

                        <div class="single-post__entry-header entry__header">
                            <h1 class="single-post__entry-title">
                                {{ $post->excerpt }}
                            </h1>

                            <div class="entry__meta-holder">
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#">
                                            @php
                                                $user = \App\Models\User::where('id', $post->author_id)->first();
                                            @endphp
                                            {{ $user->name }}
                                        </a>
                                    </li>
                                    <li class="entry__meta-date">
                                        {{ $post->created_at->diffForHumans() }}
                                    </li>
                                </ul>

                                <ul class="entry__meta">
                                    <li class="entry__meta-views">
                                        <i class="ui-eye"></i>
                                        <span>21</span>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- end entry header -->

                        <div class="entry__img-holder">
                            <img src="{{ Voyager::Image($post->image) }}" alt="" class="entry__img">
                        </div>

                        <div class="entry__article-wrap">

                            <!-- Share -->
                            <div class="entry__share">
                                <div class="sticky-col">
                                    <div class="socials socials--rounded socials--large">
                                        <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                                            <i class="ui-facebook"></i>
                                        </a>
                                        <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                                            <i class="ui-twitter"></i>
                                        </a>
                                        <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                                            <i class="ui-google"></i>
                                        </a>
                                        <a class="social social-pinterest" href="#" title="pinterest" target="_blank" aria-label="pinterest">
                                            <i class="ui-pinterest"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- share -->

                            <div class="entry__article">
                            {!! $post->body !!}
                            <!-- tags -->
                                <div class="entry__tags">
                                    <i class="ui-tags"></i>
                                    <span class="entry__tags-label">برچسب ها:</span>
                                    @foreach( explode(',', $post->meta_keywords) as $key)
                                        <a href="#" rel="tag">{{ $key }}</a>
                                    @endforeach

                                </div> <!-- end tags -->
                            </div> <!-- end entry article -->
                        </div> <!-- end entry article wrap -->

                        <!-- PDF -->
                        <div class="entry-author clearfix">
                            <img alt="" data-src="{{ asset('assets/img/pdf.png') }}" src="{{ asset('assets/img/pdf.png') }}" class="avatar lazyload">
                            <div class="entry-author__info">
                                <p class="entry-author__name">
                                    <a class="alert-danger" href="{{ route('download', $post) }}">دانلود فایل</a>
                                </p>
                                @if(Session::has('message'))
                                    <p class="alert-warning">{{ Session::get('message') }}</p>
                                @endif
                                <p class="mb-0">{{ setting('site.text_download') }}</p>
                            </div>
                        </div>

                    </article> <!-- end standard post -->

                </div> <!-- end content box -->
            </div> <!-- end post content -->

            <!-- Sidebar -->
            <aside class="col-lg-4 sidebar sidebar--1 sidebar--right">

                <!-- Widget Categories -->
                <aside class="widget widget_categories">
                    <h4 class="widget-title">دسته بندی نوشته ها</h4>
                    <ul>
                        @php
                            $categories = \TCG\Voyager\Models\Category::all();
                        @endphp
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('category', $category) }}">
                                    {{ $category->name }}
                                    <span class="categories-count">
                                        @php
                                            $posts = \TCG\Voyager\Models\Post::where('category_id', $category->id)->get();
                                        @endphp
                                        {{ $posts->count() }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </aside> <!-- end widget categories -->

                <!-- Widget Recommended (Rating) -->
                <aside class="widget widget-rating-posts">
                    <h4 class="widget-title">منتخب مقالات</h4>
                    @php
                        $pages = \TCG\Voyager\Models\Page::inRandomOrder()->limit(2)->get();
                    @endphp
                    @foreach($pages as $page)
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="{{ route('page.show', $page) }}">
                                    <div class="thumb-container thumb-60">
                                        <img data-src="{{ Voyager::Image($page->image) }}" src="{{ Voyager::Image($page->image) }}" class="entry__img lazyload" alt="">
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">

                                    <h2 class="entry__title">
                                        <a href="{{ route('page.show', $page) }}">
                                            {{ $page->excerpt }}
                                        </a>
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
                    @endforeach

                </aside> <!-- end widget recommended (rating) -->

            </aside> <!-- end sidebar 1 -->

        </div> <!-- end main container -->

@endsection
