<!DOCTYPE html>
<html lang="en">

@extends('client.layout')
@section('content')
    <!-- banner_section - start -->
    @include('client.aspect.banner')

    <!-- feature_section - start
       ================================================== -->
    <section class="feature_section sec_ptb_130 bg_gray deco_wrap clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12">
                    <div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
                        <h4 class="small_title">Our Core Features</h4>
                        <h2 class="big_title mb-0">
                            Experience Allows Us To Printing Things
                        </h2>
                        <span class="biggest_title">Features</span>
                    </div>
                </div>
            </div>

            <div class="stairs_wrap row justify-content-lg-between justify-content-md-center justify-content-md-center">
                <div class="stair_col col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
                    <div class="feature_card">
                        <a class="item_image plus_effect" target="_blank" href="portofolio_details">
                            <img src={{ asset('assets/images/feature/img_02.jpg') }} alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <span class="item_type">Any Type Of Printing</span>
                            <h3 class="item_title">Design & Branding</h3>
                        </div>
                    </div>
                </div>

                <div class="stair_col col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
                    <div class="feature_card">
                        <a class="item_image plus_effect" target="_blank" href="portofolio_details">
                            <img src={{ asset('assets/images/feature/img_03.jpg') }} alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <span class="item_type">Any Type Of Printing</span>
                            <h3 class="item_title">3d & Logo Printing</h3>
                        </div>
                    </div>
                </div>

                <div class="stair_col col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".7s">
                    <div class="feature_card">
                        <a class="item_image plus_effect" target="_blank" href="portofolio_details">
                            <img src={{ asset('assets/images/feature/img_04.jpg') }} alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <span class="item_type">Any Type Of Printing</span>
                            <h3 class="item_title">T - Shirt Printing</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <span class="deco_image triangle_shape wow fadeInUp2" data-wow-delay=".1s"></span>
    </section>
    <!-- feature_section - end
       ================================================== -->


    <!-- whoweare_section - start
       ================================================== -->
    <section class="whoweare_section bg_default_yellow clearfix">
        <div class="container-fluid p-0">
            <div
                class="row g-0 align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="whoweare_image wow fadeIn">
                        <img src={{ asset('assets/images/about/img_04.jpg') }} alt="icon_not_found">
                        <a class="play_btn popup_video bg_white" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="whoweare_content">
                        <div class="section_title mb_50 wow fadeInUp2" data-wow-delay=".2s">
                            <h4 class="small_title">Who We Are ?</h4>
                            <h2 class="big_title mb-0">
                                Most Professional Printing Agency
                            </h2>
                            <span class="biggest_title">We Do</span>
                        </div>

                        <div class="whoweare_about_content wow fadeInUp2" data-wow-delay=".3s">
                            <p>
                                Sed ut perspicitis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiaeaque ipsa quae ab illo inventore veritatis et quasi architecto
                                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                aut odit aut fugit
                            </p>
                            <div class="avatar_wrap">
                                <div class="avatar_image">
                                    <img src={{ asset('assets/images/meta/img_01.png') }} alt="image_not_found">
                                </div>
                                <div class="avatar_content">
                                    <h4 class="avatar_name">Kristofer C. Bello</h4>
                                    <span class="avatar_title">CEO &amp; Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- whoweare_section - end
       ================================================== -->


    <!-- product_section - start -->
    <section class="service_section sec_ptb_130 clearfix">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
                        <h4 class="small_title">What We Offers</h4>
                        <h2 class="big_title mb-0">
                            We Provide Lot’s Of Printing & Branding Service
                        </h2>
                        <span class="biggest_title">Services</span>
                    </div>
                </div>
            </div>

            <div class="row g-0 justify-content-lg-between">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="service_split clearfix">
                        <div class="item_content">
                            <div class="service_boxed bg_default_yellow text-center">
                                <div class="item_icon">
                                    <img src={{ asset('assets/images/services/icon_02.png') }} alt="icon_not_found">
                                </div>
                                <h3 class="item_title">Color Printing</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error voluptate</p>
                                <a class="text_btn" target="_blank" href="product_detail">
                                    <span>Read More</span>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <a class="item_image" target="_blank" href="product_detail">
                            <img src={{ asset('assets/images/services/img_12.jpg') }} alt="image_not_found">
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay=".4s">
                    <div class="service_split clearfix">
                        <div class="item_content">
                            <div class="service_boxed bg_default_blue text-center text-white">
                                <div class="item_icon">
                                    <img src={{ asset('assets/images/services/icon_03.png') }} alt="icon_not_found">
                                </div>
                                <h3 class="item_title">3D Printing</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error voluptate</p>
                                <a class="text_btn" target="_blank" href="product_detail">
                                    <span>Read More</span>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <a class="item_image" target="_blank" href="product_detail">
                            <img src={{ asset('assets/images/services/img_13.jpg') }} alt="image_not_found">
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay=".5s">
                    <div class="service_split clearfix">
                        <a class="item_image" target="_blank" href="product_detail">
                            <img src={{ asset('assets/images/services/img_14.jpg') }} alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <div class="service_boxed bg_default_orange text-center text-white">
                                <div class="item_icon">
                                    <img src={{ asset('assets/images/services/icon_04.png') }} alt="icon_not_found">
                                </div>
                                <h3 class="item_title">Digital Printing</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error voluptate</p>
                                <a class="text_btn" target="_blank" href="product_detail">
                                    <span>Read More</span>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay=".6s">
                    <div class="service_split clearfix">
                        <a class="item_image" target="_blank" href="service_details">
                            <img src={{ asset('assets/images/services/img_15.jpg') }} alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <div class="service_boxed bg_default_past text-center text-white">
                                <div class="item_icon">
                                    <img src={{ asset('assets/images/services/icon_06.png') }}alt="icon_not_found">
                                </div>
                                <h3 class="item_title">T - Shirt Printing</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error voluptate</p>
                                <a class="text_btn" target="_blank" href="product_detail">
                                    <span>Read More</span>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- product_section - end -->


    <!-- funfact_section - start -->
    <section class="funfact_section sec_ptb_130 clearfix" data-background="assets/images/backgrounds/bg_01.jpg">
        <div class="container">
            <div class="funfact_wrap">

                <div class="funfact_item text-center wow fadeInUp2" data-wow-delay=".1s">
                    <div class="content_wrap">
                        <div class="item_icon">
                            <span class="bg_default_orange">
                                <i class="fal fa-heart"></i>
                            </span>
                        </div>
                        <strong class="counte_text" data-from="0" data-to="356435">356435</strong>
                        <h3 class="item_title">Loving Customer</h3>
                    </div>
                </div>

                <div class="funfact_item text-center wow fadeInUp2" data-wow-delay=".3s">
                    <div class="content_wrap">
                        <div class="item_icon">
                            <span class="bg_default_lightblue">
                                <i class="fal fa-trophy-alt"></i>
                            </span>
                        </div>
                        <strong class="counte_text" data-from="0" data-to="653142">653142</strong>
                        <h3 class="item_title">Awards Winns</h3>
                    </div>
                </div>

                <div class="funfact_item text-center wow fadeInUp2" data-wow-delay=".5s">
                    <div class="content_wrap">
                        <div class="item_icon">
                            <span class="bg_default_yellow">
                                <i class="fal fa-truck"></i>
                            </span>
                        </div>
                        <strong class="counte_text" data-from="0" data-to="485620">485620</strong>
                        <h3 class="item_title">Transportations</h3>
                    </div>
                </div>

                <div class="funfact_item text-center wow fadeInUp2" data-wow-delay=".7s">
                    <div class="content_wrap">
                        <div class="item_icon">
                            <span class="bg_default_purple">
                                <i class="fal fa-laptop-code"></i>
                            </span>
                        </div>
                        <strong class="counte_text" data-from="0" data-to="475868">475868</strong>
                        <h3 class="item_title">Digital Computer</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- funfact_section - end -->


    <!-- cta_section - start -->
    <section class="cta_section sec_ptb_130 bg_default_blue deco_wrap clearfix">
        <div class="container">
            <div
                class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

                <div class="col-lg-5 col-md-7 col-sm-9 col-xs-12">
                    <div class="cta_image_2 wow fadeIn" data-wow-delay=".1s">
                        <img src="assets/images/cta/img_02.png" alt="image_not_found">
                    </div>
                </div>

                <div class="col-lg-6 col-md-7 col-sm-9 col-xs-12">
                    <div class="cta_content ml__30 text-white">
                        <div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".2s">
                            <h4 class="small_title">Needs Any Helps</h4>
                            <h2 class="big_title mb-0 text-white">
                                Always Ready To Print Your Dream Works
                            </h2>
                            <span class="biggest_title">Quote</span>
                        </div>
                        <p class="mb_30 border_left_yellow text-white wow fadeInUp2" data-wow-delay=".3s">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                            beatae vitae dicta sunt explicabo
                        </p>
                        <ul class="check_info_list ul_li_block clearfix mb_50 wow fadeInUp2" data-wow-delay=".4s">
                            <li>Smashing Podcast Episode 19 With Andy Bell What Is CUBE ?</li>
                            <li>Inspired Design Decisions With Giovanni Pintori: Publicity Becomes </li>
                            <li>Django Highlights: Wrangling Static Assets And Media Files</li>
                            <li>A Practical Guide To Testing React Applications With Jest</li>
                        </ul>
                        <a class="custom_btn bg_default_orange wow fadeInUp2" data-wow-delay=".5s" target="_blank"
                            href="contact">
                            Contact Us
                            <span><i class="fal fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="deco_image deco_image_1 wow fadeInUp2" data-wow-delay=".1s">
            <img src="assets/images/cta/shape_01.png" alt="shape_not_found">
        </div>
    </section>
    <!-- cta_section - end -->


    <!-- portfolio_section - start -->
    <section class="portfolio_section sec_ptb_130 pb-0 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
                        <h4 class="small_title">Our Recent Works</h4>
                        <h2 class="big_title mb-0">
                            Let’s See Our Latest Project That Recently Done
                        </h2>
                        <span class="biggest_title">Works</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="masonry_portfolio_grid grid wow fadeInUp2" data-wow-delay=".3s">
                <div class="grid-sizer"></div>
                <div class="grid-item">
                    <div class="portfolio_fullimage">
                        <a class="plus_effect" target="_blank" href="portofolio_details">
                            <img src="assets/images/portfolio/masonry/img_01.jpg" alt="image_not_found">
                        </a>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="portfolio_fullimage">
                        <a class="plus_effect" target="_blank" href="portofolio_details">
                            <img src="assets/images/portfolio/masonry/img_02.jpg" alt="image_not_found">
                        </a>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="portfolio_fullimage">
                        <a class="plus_effect" target="_blank" href="portofolio_details">
                            <img src="assets/images/portfolio/masonry/img_03.jpg" alt="image_not_found">
                        </a>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="portfolio_fullimage">
                        <a class="plus_effect" target="_blank" href="portofolio_details">
                            <img src="assets/images/portfolio/masonry/img_04.jpg" alt="image_not_found">
                        </a>
                    </div>
                </div>

                <div class="grid-item w_50">
                    <div class="portfolio_fullimage">
                        <a class="plus_effect" target="_blank" href="portofolio_details">
                            <img src="assets/images/portfolio/masonry/img_05.jpg" alt="image_not_found">
                        </a>
                    </div>
                </div>

                <div class="grid-item w_50">
                    <div class="portfolio_fullimage">
                        <a class="plus_effect" target="_blank" href="portofolio_details">
                            <img src="assets/images/portfolio/masonry/img_06.jpg" alt="image_not_found">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio_section - end -->



    <!-- blog_section - start -->
    <section class="blog_section sec_ptb_130 clearfix">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-7 col-sm-9 col-xs-12">
                    <div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
                        <h4 class="small_title">Latest News & Blog</h4>
                        <h2 class="big_title mb-0">
                            Get More Update For News & Articles
                        </h2>
                        <span class="biggest_title">Blogs</span>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
                    <div class="blog_fullimage_2 text-white">
                        <img src="assets/images/blog/fullimage/img_02.jpg" alt="image_not_found">
                        <div class="item_content">
                            <ul class="post_meta ul_li clearfix">
                                <li><a href="#!"><i class="fal fa-user-circle"></i> David Warner</a></li>
                                <li><a href="#!"><i class="far fa-comments"></i> Comments (05)</a></li>
                            </ul>
                            <h3 class="item_title">
                                <a target="_blank" href="blog_details">
                                    Solving Common Cross Plat Form Issues When Working With Flutter Ways
                                </a>
                            </h3>
                        </div>
                        <a class="text_btn absolute_btn" target="_blank" href="blog_details"><span>Read More</span> <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
                    <div class="blog_fullimage_2 text-white">
                        <img src="assets/images/blog/fullimage/img_03.jpg" alt="image_not_found">
                        <div class="item_content">
                            <ul class="post_meta ul_li clearfix">
                                <li><a href="#!"><i class="fal fa-user-circle"></i> David Warner</a></li>
                                <li><a href="#!"><i class="far fa-comments"></i> Comments (05)</a></li>
                            </ul>
                            <h3 class="item_title">
                                <a target="_blank" href="blog_details">
                                    A Practical Guide To Testing React Applications With Jest Web Designers Can Help
                                </a>
                            </h3>
                        </div>
                        <a class="text_btn absolute_btn" target="_blank" href="blog_details"><span>Read More</span> <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".7s">
                    <div class="blog_fullimage_2 text-white">
                        <img src="assets/images/blog/fullimage/img_04.jpg" alt="image_not_found">
                        <div class="item_content">
                            <ul class="post_meta ul_li clearfix">
                                <li><a href="#!"><i class="fal fa-user-circle"></i> David Warner</a></li>
                                <li><a href="#!"><i class="far fa-comments"></i> Comments (05)</a></li>
                            </ul>
                            <h3 class="item_title">
                                <a target="_blank" href="blog_details">
                                    Smashing Podcast Episode 18 With Mina Markham Hows Can Learn React
                                </a>
                            </h3>
                        </div>
                        <a class="text_btn absolute_btn" target="_blank" href="blog_details"><span>Read More</span> <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- blog_section - end -->


    </main>
    <!-- main body - end -->

    </body>
@endsection

</html>
