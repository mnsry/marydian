@extends('layouts.master')

@section('description', setting('site.description'))
@section('keywords', setting('site.keywords'))
@section('title', setting('site.title'))

@section('content')

    <div class="main-container container" id="main-container">
        <br>
        <div class="row">
            <img src="{{ Voyager::Image(setting('site.home_banner')) }}" alt="">
        </div>
        <br><br>
        <div class="row">
            {!! setting('site.home_content') !!}
        </div>
    </div>

@endsection
