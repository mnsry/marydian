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
            <a href="{{ route('page') }}" class="breadcrumbs__url">صفحات</a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">
            {{ $page->title }}
        </li>
    </ul>
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
                            {{ $page->excerpt }}
                        </h1>

                        <div class="entry__meta-holder">
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

                            <ul class="entry__meta">
                                <li class="entry__meta-views">
                                    <i class="ui-eye"></i>
                                    <span>21</span>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end entry header -->

                    <div class="entry__img-holder">
                        <img src="{{ Voyager::Image($page->image) }}" alt="" class="entry__img">
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
                            {!! $page->body !!}
                            <!-- tags -->
                            <div class="entry__tags">
                                <i class="ui-tags"></i>
                                <span class="entry__tags-label">برچسب ها:</span>
                                @foreach( explode(',', $page->meta_keywords) as $key)
                                    <a href="#" rel="tag">{{ $key }}</a>
                                @endforeach

                            </div> <!-- end tags -->
                        </div> <!-- end entry article -->
                    </div> <!-- end entry article wrap -->

                </article> <!-- end standard post -->
            </div> <!-- end content box -->
        </div> <!-- end post content -->

        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">

            <!-- Widget Popular Posts -->
            <aside class="widget widget-popular-posts">
                <h4 class="widget-title">محبوب ترین مقالات</h4>
                <ul class="post-list-small">
                    @php
                        $pages = \TCG\Voyager\Models\Page::inRandomOrder()->limit(2)->get();
                    @endphp
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
                                    <a href="{{ route('page.show', $page) }}">{{ $page->excerpt }}</a>
                                </h3>
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
                        </article>
                    </li>
                    @endforeach
                </ul>
            </aside> <!-- end widget popular posts -->

        </aside> <!-- end sidebar -->

    </div> <!-- end content -->
</div> <!-- end main container -->

@endsection
