@extends('layouts.master')

@section('description', setting('site.description'))
@section('keywords', setting('site.keywords'))
@section('title', setting('site.title'))

@section('content')

<!-- Breadcrumbs -->
<div class="container">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
            <a href="index.html" class="breadcrumbs__url">خانه</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="index.html" class="breadcrumbs__url">اخبار</a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">
            تکنولوژی
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
                        <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--green">موبایل و گجت</a>
                        <h1 class="single-post__entry-title">
                            گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود
                        </h1>

                        <div class="entry__meta-holder">
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#">بهرامی راد</a>
                                </li>
                                <li class="entry__meta-date">
                                    ۴ اردیبهشت ۱۳۹۸
                                </li>
                            </ul>

                            <ul class="entry__meta">
                                <li class="entry__meta-views">
                                    <i class="ui-eye"></i>
                                    <span>۱۲۴۳</span>
                                </li>
                                <li class="entry__meta-comments">
                                    <a href="#">
                                        <i class="ui-chat-empty"></i>۱۳
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end entry header -->

                    <div class="entry__img-holder">
                        <img src="img/content/thumb/post-8.jpg" alt="" class="entry__img">
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
                            <p>بعد از اعلام تصمیم سامسونگ برای <a href="#">به عقب انداختن عرضه گلکسی فولد</a> شایعاتی مبنی بر احتمال تاخیر در عرضه <a href="#">هواوی میت ایکس</a>منتشر شد که حالا به‌نظر می‌رسد چنین گزارش‌هایی صحت ندارند. یکی از مقام‌های ارشد هواوی طی مصاحبه‌ای با Phoenix Technology اعلام کرده که این اخبار صرفا شایعه هستند و به هیچ عنوان حقیقت ندارند. او در ادامه خاطرنشان کرده که مطابق برنامه‌ی از پیش تعیین شده، هواوی میت ایکس در ماه ژوئن (خرداد-تیر) روانه‌ی بازار خواهد شد.</p>

                            <p>نوع طراحی هواوی میت ایکس سوالاتی را در مورد میزان دوام آن مطرح کرده است. زیرا این گوشی به طرف بیرون باز می‌شود و به همین خاطر دو طرف نمایشگر اولد آن در معرض انواع آسیب‌ها قرار می‌گیرد. در هر صورت، ظاهرا هواوی نسبت به طراحی این گوشی اطمینان زیادی دارد و دلیل برای به تاخیر انداختن عرضه آن نمی‌بیند.</p>

                            <p>از طرفی دیگر، گلکسی فولد از طراحی تاشو به سمت داخل بهره می‌برد ولی طبق بیانیه‌ای که سامسونگ منتشر کرده، ظاهرا بخش‌های از ناحیه لولا احتمالا برای نمایشگر مشکل‌زا هستند و تا حدی می‌توانند به پنل انعطاف‌پذیر این گوشی آسیب برسانند. با توجه به انتشار اخبار مربوط به مشکلات گلکسی فولد، بدون شک هواوی در این مدت باقی مانده نسبت به عرضه نهایی میت ایکس، با دقت بیشتری آزمایش‌های مختلف را انجام می‌دهد.</p>

                            <h2>نمایشگر ۶.۶ اینچی هواوی میت X</h2>
                            <p>این گوشی در حالت تا شده، دو نمایشگر ۶.۶ اینچی با نسبت ۱۹.۵:۹ و یک نمایشگر ۶.۳۸ اینچ با نسبت ۲۵:۹ دارد. نمایشگر کوچک‌تر بیش از هرچیزی برای گرفتن سلفی‌ها کاربرد دارد چراکه دوربین سلفی دقیقا کنار آن قرار می‌گیرد. وقتی نمایشگر محصول را هم باز می‌کنیم، با نمایشگری ۸ اینچی روبرو می‌شویم که تجربه یک تبلت را می‌تواند به ارمغان بیاورد.</p>

                            <figure class="alignleft">
                                <img data-src="img/content/single/Huawei-Mate-X-6.jpg" src="img/empty.png" alt="" class="lazyload">
                                <figcaption>هواوی میت X </figcaption>
                            </figure>

                            <p>هواوی همچنین روی لولای میانی گوشی نیز مانور داد. نکته مهم این لولا این است که دو بخش پشتی محصول را به صورت کامل تا کرده و روی هم می‌نشاند در صورتی که برای مثال در گوشی گلکسی فولد، وقتی این گوشی تا می‌شود، همچنان یک فاصله کوچکی بین دو صفحه تا شده باقی می‌ماند. مدیرعامل هواوی روی صحنه گفت که مهندسان این شرکت، برای سه سال فقط روی این لولا در حال کار بوده‌اند!هواوی میت X از یک جنبه دیگر در طراحی خود می‌درخشد و آن باریکی آن است. این محصول در حالت باز شده تنها ۵.۴ میلی‌متر ضخامت دارد. البته بخش مربوط به ماژول دوربین‌ها، ضخامت بیشتری دارد اما در مجموع در مقایسه با گلکسی فولد، نازکی این محصول بیشتر به چشم می‌آید. همچنین این گوشی در حالت تا شده، ۱۱ میلی‌متر ضخامت دارد در صورتی که گلکسی فولد، ۱۷ میلی‌متر ضخامت دارد.</p>

                            <h2>هواوی میت X</h2>

                            <figure class="alignleft">
                                <img data-src="img/content/single/Huawei-Mate-X-4-610x380.jpg" src="img/empty.png" alt="" class="lazyload">
                                <figcaption>هواوی میت X</figcaption>
                            </figure>

                            <p>هواوی همچنین گلکسی فولد را به دلیل نمایشگر ۷.۲ اینچی داخلی که دارای بریدگی هست نیز مورد تمسخر قرار داد چراکه هواوی میت X هیچ بریدگی ندارد و در حالت باز شده نیز با نمایشگری ۸ اینچی روبرو هستیم. از این نظرها می‌توان گفت طراحی هواوی میت X بهتر از گلکسی فولد به نظر می‌رسد.</p>

                            <h5>مشخصات فنی</h5>
                            <ul>
                                <li>سیستم عامل : - اندروید 9.0 (پای)</li>
                                <li>تراشه : HiSilicon Kirin 980 (هفت نانومتری)</li>
                                <li>حافظه داخلی : 512 گیگابایت، 8 گیگابایت رم</li>
                            </ul>

                            <!-- tags -->
                            <div class="entry__tags">
                                <i class="ui-tags"></i>
                                <span class="entry__tags-label">برچسب ها:</span>
                                <a href="#" rel="tag">نمایشگاه MWC 2019</a>
                                <a href="#" rel="tag">هوآوی</a>
                            </div> <!-- end tags -->

                        </div> <!-- end entry article -->
                    </div> <!-- end entry article wrap -->

                    <!-- Author -->
                    <div class="entry-author clearfix">
                        <img alt="" data-src="img/default-avatar.png" src="img/empty.png" class="avatar lazyload">
                        <div class="entry-author__info">
                            <h6 class="entry-author__name">
                                <a href="#">جلال بهرامی راد</a>
                            </h6>
                            <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                        </div>
                    </div>

                    <!-- Related Posts -->
                    <section class="section related-posts mt-40 mb-0">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">مطالب مرتبط</h3>
                        </div>

                        <!-- Slider -->
                        <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                            <article class="entry thumb thumb--size-1">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-8.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder">
                                        <h2 class="thumb-entry-title">
                                            <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                                        </h2>
                                    </div>
                                    <a href="single-post.html" class="thumb-url"></a>
                                </div>
                            </article>
                            <article class="entry thumb thumb--size-1">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-2-2.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder">
                                        <h2 class="thumb-entry-title">
                                            <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                                        </h2>
                                    </div>
                                    <a href="single-post.html" class="thumb-url"></a>
                                </div>
                            </article>
                            <article class="entry thumb thumb--size-1">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-9.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder">
                                        <h2 class="thumb-entry-title">
                                            <a href="single-post.html">بهترین کتاب‌های کودک و نوجوان برای تربیت فرزندان موفق</a>
                                        </h2>
                                    </div>
                                    <a href="single-post.html" class="thumb-url"></a>
                                </div>
                            </article>
                            <article class="entry thumb thumb--size-1">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-7.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder">
                                        <h2 class="thumb-entry-title">
                                            <a href="single-post.html">جعبه‌گشایی هواوی P30 لایت در دیجی‌کالا مگ</a>
                                        </h2>
                                    </div>
                                    <a href="single-post.html" class="thumb-url"></a>
                                </div>
                            </article>
                            <article class="entry thumb thumb--size-1">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-5.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder">
                                        <h2 class="thumb-entry-title">
                                            <a href="single-post.html">۵ کتاب روانشناسی که برای زندگی بهتر باید بخوانید</a>
                                        </h2>
                                    </div>
                                    <a href="single-post.html" class="thumb-url"></a>
                                </div>
                            </article>
                        </div> <!-- end slider -->

                    </section> <!-- end related posts -->

                </article> <!-- end standard post -->

                <!-- Comments -->
                <div class="entry-comments">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">۳ دیدگاه</h3>
                    </div>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="comment-body">
                                <div class="comment-avatar">
                                    <img alt="" src="img/default-avatar.png">
                                </div>
                                <div class="comment-text">
                                    <h6 class="comment-author">بهرامی راد</h6>
                                    <div class="comment-metadata">
                                        <a href="#" class="comment-date">۴ اردیبهشت ۱۳۹۸</a>
                                    </div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                                    <a href="#" class="comment-reply">پاسخ</a>
                                </div>
                            </div>

                            <ul class="children">
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-avatar">
                                            <img alt="" src="img/default-avatar.png">
                                        </div>
                                        <div class="comment-text">
                                            <h6 class="comment-author">حامد</h6>
                                            <div class="comment-metadata">
                                                <a href="#" class="comment-date">۴ اردیبهشت ۱۳۹۸</a>
                                            </div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                                            <a href="#" class="comment-reply">پاسخ</a>
                                        </div>
                                    </div>
                                </li> <!-- end reply comment -->
                            </ul>

                        </li> <!-- end 1-2 comment -->

                        <li>
                            <div class="comment-body">
                                <div class="comment-avatar">
                                    <img alt="" src="img/default-avatar.png">
                                </div>
                                <div class="comment-text">
                                    <h6 class="comment-author">علی</h6>
                                    <div class="comment-metadata">
                                        <a href="#" class="comment-date">۴ اردیبهشت ۱۳۹۸</a>
                                    </div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                                    <a href="#" class="comment-reply">پاسخ</a>
                                </div>
                            </div>
                        </li> <!-- end 3 comment -->

                    </ul>
                </div> <!-- end comments -->

                <!-- Comment Form -->
                <div id="respond" class="comment-respond">
                    <div class="title-wrap">
                        <h5 class="comment-respond__title section-title">دیدگاه شما</h5>
                    </div>
                    <form id="form" class="comment-form" method="post" action="#">
                        <p class="comment-form-comment">
                            <label for="comment">دیدگاه</label>
                            <textarea id="comment" name="comment" rows="5" required="required"></textarea>
                        </p>

                        <div class="row row-20">
                            <div class="col-lg-4">
                                <label for="name">نام: *</label>
                                <input name="name" id="name" type="text">
                            </div>
                            <div class="col-lg-4">
                                <label for="comment">ایمیل: *</label>
                                <input name="email" id="email" type="email">
                            </div>
                            <div class="col-lg-4">
                                <label for="comment">وبسایت:</label>
                                <input name="website" id="website" type="text">
                            </div>
                        </div>

                        <p class="comment-form-submit">
                            <input type="submit" class="btn btn-lg btn-color btn-button" value="ارسال دیدگاه" id="submit-message">
                        </p>

                    </form>
                </div> <!-- end comment form -->

            </div> <!-- end content box -->
        </div> <!-- end post content -->

        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">

            <!-- Widget Popular Posts -->
            <aside class="widget widget-popular-posts">
                <h4 class="widget-title">محبوب ترین مقالات</h4>
                <ul class="post-list-small">
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                            <div class="post-list-small__img-holder">
                                <div class="thumb-container thumb-100">
                                    <a href="single-post.html">
                                        <img data-src="img/content/thumb/post-8.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="post-list-small__body">
                                <h3 class="post-list-small__entry-title">
                                    <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                                </h3>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#">بهرامی راد</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        ۴ اردیبهشت ۱۳۹۸
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                            <div class="post-list-small__img-holder">
                                <div class="thumb-container thumb-100">
                                    <a href="single-post.html">
                                        <img data-src="img/content/thumb/post-2.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="post-list-small__body">
                                <h3 class="post-list-small__entry-title">
                                    <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                                </h3>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#">بهرامی راد</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        ۴ اردیبهشت ۱۳۹۸
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                            <div class="post-list-small__img-holder">
                                <div class="thumb-container thumb-100">
                                    <a href="single-post.html">
                                        <img data-src="img/content/thumb/post-6.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="post-list-small__body">
                                <h3 class="post-list-small__entry-title">
                                    <a href="single-post.html">چرا لانچرهای اندروید دیگر محبوبیت گذشته را ندارند؟</a>
                                </h3>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#">بهرامی راد</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        ۴ اردیبهشت ۱۳۹۸
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                            <div class="post-list-small__img-holder">
                                <div class="thumb-container thumb-100">
                                    <a href="single-post.html">
                                        <img data-src="img/content/thumb/post-5.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="post-list-small__body">
                                <h3 class="post-list-small__entry-title">
                                    <a href="single-post.html">۵ کتاب روانشناسی که برای زندگی بهتر باید بخوانید</a>
                                </h3>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#">بهرامی راد</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        ۴ اردیبهشت ۱۳۹۸
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                </ul>
            </aside> <!-- end widget popular posts -->

            <!-- Widget Newsletter -->
            <aside class="widget widget_mc4wp_form_widget">
                <h4 class="widget-title">خبرنامه</h4>
                <p class="newsletter__text">
                    <i class="ui-email newsletter__icon"></i>
                    برای اطلاع از آخرین خبرها مشترک شوید
                </p>
                <form class="mc4wp-form" method="post">
                    <div class="mc4wp-form-fields">
                        <div class="form-group">
                            <input type="email" name="EMAIL" placeholder="ایمیل" required="">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-color" value="عضویت">
                        </div>
                    </div>
                </form>
            </aside> <!-- end widget newsletter -->

            <!-- Widget Ad 300 -->
            <aside class="widget widget_media_image">
                <a href="#">
                    <img src="img/content/mag-1.jpg" alt="">
                </a>
            </aside> <!-- end widget ad 300 -->



        </aside> <!-- end sidebar -->

    </div> <!-- end content -->
</div> <!-- end main container -->

@endsection
