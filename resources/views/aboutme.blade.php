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
                درباره ما
            </li>
        </ul>
    </div>

    <div class="main-container container" id="main-container">
        <!-- post content -->
        <div class="blog__content mb-72">
            <h1 class="page-title">درباره ما</h1>
            <img src="{{ Voyager::Image(setting('aboute.about_banner')) }}" class="page-featured-img" alt="">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="entry__article">
                        {!! setting('aboute.about') !!}
                    </div>
                </div>
            </div>
        </div> <!-- end post content -->
    </div> <!-- end main container -->

@endsection
