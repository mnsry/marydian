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
                تماس با ما
            </li>
        </ul>
    </div>

    <div class="main-container container" id="main-container">
        <!-- post content -->
        <div class="blog__content mb-72">
            <h1 class="page-title">تماس با ما</h1>

            <img src="{{ Voyager::Image(setting('contact.contact_banner')) }}" class="page-featured-img" alt="">

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4>با ما تماس بگیرید</h4>

                    {!! setting('contact.contact') !!}

                    <!-- Contact Form -->
                    <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="#">
                        <div class="contact-name">
                            <label for="name">نام <abbr title="required" class="required">*</abbr></label>
                            <input name="name" id="name" type="text">
                        </div>
                        <div class="contact-email">
                            <label for="email">ایمیل <abbr title="required" class="required">*</abbr></label>
                            <input name="email" id="email" type="email">
                        </div>
                        <div class="contact-subject">
                            <label for="email">موضوع</label>
                            <input name="subject" id="subject" type="text">
                        </div>
                        <div class="contact-message">
                            <label for="message">پیام <abbr title="required" class="required">*</abbr></label>
                            <textarea id="message" name="message" rows="7" required="required"></textarea>
                        </div>

                        <input type="submit" class="btn btn-lg btn-color btn-button" value="فرستادن" id="submit-message">
                        <div id="msg" class="message"></div>
                    </form>

                </div>
            </div>
        </div> <!-- end post content -->
    </div> <!-- end main container -->

@endsection
