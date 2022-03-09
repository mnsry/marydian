@extends('layouts.master')

@section('description', setting('site.description'))
@section('keywords', setting('site.keywords'))
@section('title', setting('site.title'))

@section('content')

    <div class="main-container container pt-80 pb-80" id="main-container">
        <!-- post content -->
        <div class="blog__content mb-72">
            <div class="container text-center">
                <h1>خوش آمدید</h1>
            </div>
        </div>
    </div>

@endsection
