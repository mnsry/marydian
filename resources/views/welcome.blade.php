@extends('layouts.master')

@section('description', setting('site.description'))
@section('keywords', setting('site.keywords'))
@section('title', setting('site.title'))

@section('content')

    <div class="main-container container pt-80 pb-80" id="main-container">
        <!-- post content -->
        <div class="blog__content mb-72">
            <div class="container">
                <img src="{{ Voyager::Image(setting('site.home_banner')) }}" alt="">
                <br><br>
                <h1>خوش آمدید</h1>
                <br><br>
                {!! setting('site.home_content') !!}
            </div>
        </div>

    </div>

@endsection
