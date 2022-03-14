@extends('layouts.master')

@section('description', setting('site.description'))
@section('keywords', setting('site.keywords'))
@section('title', setting('site.title'))

@section('content')

    <div class="main-container container pt-24" id="main-container">

        <!-- Content Secondary -->
        <div class="row">

            <!-- Posts -->
            <div class="col-lg-8 blog__content mb-72">

                <!-- Worldwide News -->
                <section class="section">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">دانلود فایل</h3>
                        <a href="#" class="all-posts-url">{{ auth()->user()->name }}</a>
                    </div>
                    @php
                        $posts = \TCG\Voyager\Models\Post::all();
                    @endphp
                    @foreach($posts as $post)
                        <article class="entry card post-list">

                        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ Voyager::Image($post->image) }})">
                            <a href="{{ route('post.show', $post) }}" class="thumb-url"></a>
                            <img src="{{ Voyager::Image($post->image) }}" alt="" class="entry__img d-none">
                            <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">
                                @php
                                    $category = \TCG\Voyager\Models\Category::where('id', $post->category_id)->first();
                                @endphp
                                {{ $category->name }}
                            </a>
                        </div>

                        <div class="entry__body post-list__body card__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="{{ route('post.show', $post) }}">
                                        {{ $post->title }}
                                    </a>
                                </h2>
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
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                    {{ $post->excerpt }}
                                </p>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </section> <!-- end worldwide news -->

                <!-- Pagination -->
                <nav class="pagination">
                    <span class="pagination__page pagination__page--current">۱</span>
                    <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-left"></i></a>
                </nav>

            </div> <!-- end posts -->

            <!-- Sidebar 1 -->
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
                                <a href="#">
                                    {{ $category->name }}
                                    <span class="categories-count">
                                        {{ rand(1, 9) }}
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
                        $pages = \TCG\Voyager\Models\Page::all();
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
        </div> <!-- content secondary -->

    </div> <!-- end main container -->

@endsection
