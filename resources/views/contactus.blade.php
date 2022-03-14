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
                    <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="{{ route('contactus.create') }}">
                        @csrf
                        
                        <div class="contact-name">
                            <label for="name">نام <abbr title="required" class="required">*</abbr></label>
                            <input name="name" id="name" type="text" required>
                        </div>
                        <div class="contact-email">
                            <label for="mobile">موبایل <abbr title="required" class="required">*</abbr></label>
                            <input name="mobile" id="mobile" type="number" required>
                        </div>
                        <div class="contact-subject">
                            <label for="content">موضوع</label>
                            <input name="content" id="content" type="text">
                        </div>
                        <div class="contact-message">
                            <label for="text">پیام <abbr title="required" class="required">*</abbr></label>
                            <textarea id="text" name="text" rows="7" required="required"></textarea>
                        </div>

                        <input type="submit" class="btn btn-lg btn-color btn-button" value="فرستادن">
                    </form>

                </div>
            </div>
        </div> <!-- end post content -->
    </div> <!-- end main container -->

@endsection
