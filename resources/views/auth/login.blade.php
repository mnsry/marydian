@extends('layouts.master')

@section('description', setting('site.description'))
@section('keywords', setting('site.keywords'))
@section('title', setting('site.title'))

@section('content')
    <div class="main-container container" id="main-container">
        <!-- post content -->
        <div class="blog__content mb-72">
            <h1 class="page-title mt-4">ورود به سیستم</h1>

            <div class="row justify-content-center mt-4">
                <!-- Contact Form -->
                <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="{{ route('login') }}">
                    @csrf

                    <div class="contact-email">
                        <label for="mobile">موبایل <abbr title="required" class="required">*</abbr></label>
                        <input name="mobile" id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>
                        @error('mobile')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="contact-subject">
                        <label for="password">پسورد <abbr title="required" class="required">*</abbr></label>
                        <input name="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-lg btn-color btn-button" value="ورود به سیستم">

                    <a class="left pt-8 mt-1" href="{{ route('register') }}">
                        ثبت نام کنید
                    </a>
                </form>

            </div>

            <div class="row justify-content-center mt-4">
                <a href="https://wa.me/+989186007276">
                    اگر پسورد را فراموش کردید پیام بدهید
                </a>
            </div>
        </div>
    </div>
@endsection
