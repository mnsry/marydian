@extends('layouts.master')

@section('description', setting('site.description'))
@section('keywords', setting('site.keywords'))
@section('title', setting('site.title'))

@section('content')
    <div class="main-container container" id="main-container">
        <!-- post content -->
        <div class="blog__content mb-72">
            <h1 class="page-title mt-4">ثبت نام در سیستم</h1>

            <div class="row justify-content-center mt-4">
                <!-- Contact Form -->
                <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="contact-email">
                        <label for="name">نام <abbr title="required" class="required">*</abbr></label>
                        <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="contact-email">
                        <label for="email"> ایمیل</label>
                        <input name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="این فیلد الزامی نیست">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

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
                        <input name="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="contact-subject">
                        <label for="password-confirm">تکرار پسورد <abbr title="required" class="required">*</abbr></label>
                        <input name="password_confirmation" id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                    </div>

                    <input type="submit" class="btn btn-lg btn-color btn-button" value="ثبت نام">

                    <a class="left pt-8 mt-1" href="{{ route('login') }}">
                        یا ورود به سیستم
                    </a>
                </form>

            </div>
        </div>
    </div>
@endsection

