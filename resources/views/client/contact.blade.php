@extends('client.layout')
@section('content')
    <main>
        <!-- contact_section - start -->
        <section class="contact_section sec_ptb_130 clearfix">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

                    <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                        <div class="contact_content">
                            <div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".1s">
                                <h4 class="small_title">Contact Us</h4>
                                <h2 class="big_title mb-0">
                                    Every Single Update To Contact Us
                                </h2>
                                <span class="biggest_title">Contact</span>
                            </div>
                            <p class="mb_30 wow fadeInUp2" data-wow-delay=".2s">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan
                                tium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                et quasi architecto beatae vitae dict
                            </p>
                            <ul class="contact_information_list ul_li_block clearfix">
                                <li class="wow fadeInUp2" data-wow-delay=".3s">
                                    <div class="item_icon bg_default_orange"><i class="fal fa-map-marker-alt"></i></div>
                                    <div class="item_content">
                                        <h4>Locations</h4>
                                        <p>205 Main Street, USA</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp2" data-wow-delay=".4s">
                                    <div class="item_icon bg_default_yellow"><i class="fal fa-envelope"></i></div>
                                    <div class="item_content">
                                        <h4>Email Us</h4>
                                        <p>support@gmail.com</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp2" data-wow-delay=".5s">
                                    <div class="item_icon bg_default_lightblue"><i class="fal fa-phone"></i></div>
                                    <div class="item_content">
                                        <h4>Phone Us</h4>
                                        <p>+012 (345) 678 99</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                        <div class="contact_form">
                            <form id="contact-form" action="https://codeskdhaka.com/html/frintem-prev/assets/mail.php"
                                method="POST">
                                <div class="form_item wow fadeInUp2" data-wow-delay=".1s">
                                    <span class="input_title">Full Name</span>
                                    <div class="position-relative">
                                        <input id="input_user" type="text" name="name" placeholder="Write Your Name">
                                        <label class="input_icon" for="input_user"><i class="fal fa-user"></i></label>
                                    </div>
                                </div>

                                <div class="form_item wow fadeInUp2" data-wow-delay=".2s">
                                    <span class="input_title">Email Address</span>
                                    <div class="position-relative">
                                        <input id="input_email" type="email" name="email"
                                            placeholder="Write Your Email">
                                        <label class="input_icon" for="input_email"><i class="fal fa-envelope"></i></label>
                                    </div>
                                </div>

                                <div class="form_item wow fadeInUp2" data-wow-delay=".3s">
                                    <span class="input_title">Phone Number</span>
                                    <div class="position-relative">
                                        <input id="input_phone" type="tel" name="phone"
                                            placeholder="Write Your Phone Number">
                                        <label class="input_icon" for="input_phone"><i class="fal fa-phone"></i></label>
                                    </div>
                                </div>

                                <div class="form_item wow fadeInUp2" data-wow-delay=".4s">
                                    <span class="input_title">Leave A Message</span>
                                    <textarea name="message" placeholder="Write Your Message"></textarea>
                                </div>

                                <button type="submit" class="custom_btn bg_default_orange wow fadeInUp2"
                                    data-wow-delay=".5s">
                                    send message
                                    <span><i class="fal fa-arrow-right"></i></span>
                                </button>
                                <p class="ajax-response"></p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- contact_section - end -->


        <!-- google map - start -->
        <div class="map_section wow fadeIn clearfix" data-wow-delay=".1s">
            <div id="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="12"
                data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083"
                data-mlon="-74.1522848">
            </div>
        </div>
        <!-- google map - end -->


    </main>
    <!-- main body - end -->
@endsection
