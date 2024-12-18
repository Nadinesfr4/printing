@extends('client.layout')
@section('content')
    <!-- details_section - start= -->
    <section class="details_section service_details sec_ptb_130 bg_gray clearfix">
        <div class="container">
            @foreach ($data as $item)
                <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">


                    <div class="col-lg-8 col-md-8">
                        <div class="details_content">
                            <div class="wow fadeInUp2" data-wow-delay=".1s">
                                <h2 class="item_title mb_15">{{ $data->nama_produk }}</h2>
                                <p class="mb_30">{{ $data->deskripsi_produk }}</p>
                            </div>

                            <div class="details_image mb_30 wow fadeInUp2" data-wow-delay=".3s">
                                <img src="{{ asset('storage/' . $data->gambar_produk) }}" alt="image_not_found">
                            </div>

                            <div class="design_guideline_info mb_50">
                                <div class="guideline_content wow fadeInUp2" data-wow-delay=".1s">
                                    <h3 class="title_text mb_30">Design Guideline</h3>
                                    <ul class="guideline_list ul_li_block clearfix">
                                        <li>Small Postcards4.13" x 5.83"</li>
                                        <li>NEW Standard Postcards4" x 6"</li>
                                        <li>Standard Postcards4" x 7"</li>
                                        <li>Rounded Postcards4" x 8"</li>
                                        <li>NEW Square Postcards4.7" x 4.7"</li>
                                        <li>NEW Rack Cards3.67" x 8.5"</li>
                                        <li>Medium Postcards5" x 7"</li>
                                        <li>NEW Half Page Postcards5.5" x 8.5"</li>
                                        <li>NEW Large Postcards6” x 9”</li>
                                    </ul>
                                </div>

                                <div class="guideline_content wow fadeInUp2" data-wow-delay=".1s">
                                    <h3 class="item_title mb_30">Download Design Guideline</h3>
                                    <p class="mb_30">
                                        Sed ut perspicias unde omnis iste natus error sit voluptate accusntium dolorem que
                                        laudantium totam rem aper
                                    </p>
                                    <ul class="btns_group ul_li_block clearfix">
                                        <li>
                                            <a class="custom_btn btn_border" href="#!">
                                                photoshop
                                                <span class="bg_default_orange"><i class="fal fa-arrow-right"></i></span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="custom_btn btn_border" href="#!">
                                                illustrator
                                                <span class="bg_default_yellow"><i class="fal fa-arrow-right"></i></span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="custom_btn btn_border" href="#!">
                                                jpge
                                                <span class="bg_default_lightblue"><i class="fal fa-arrow-right"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="details_image mb_30 wow fadeInUp2" data-wow-delay=".1s">
                                <img src="assets/images/details/service/img_02.jpg" alt="image_not_found">
                            </div>

                            <p class="mb-0 wow fadeInUp2" data-wow-delay=".1s">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto
                                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                aut
                                odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                nesciunt.
                                Neque porro quisquam est qui dolorem ipsum quia dolor sit amet
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-8">
                        <aside class="sidebar_section clearfix">

                            <div class="widget wow fadeInUp2 sb_service_category" data-wow-delay=".1s">
                                <ul class="ul_li_block clearfix">
                                    <li><a href="#!">Banner Printing</a></li>
                                    <li><a href="#!">Flyer Design Printing</a></li>
                                    <li><a href="#!">Logo Printing</a></li>
                                    <li><a href="#!">T - Shirt Printing</a></li>
                                    <li><a href="#!">Business Cart Printing</a></li>
                                    <li><a href="#!">Design & Branding</a></li>
                                </ul>
                            </div>

                            <div class="widget wow fadeInUp2 sb_download_btns clearfix" data-wow-delay=".1s">
                                <div class="btns_group clearfix">
                                    <ul class="ul_li_block clearfix">
                                        <li>
                                            <a class="custom_btn bg_default_orange"
                                                href="https://wa.me/6285735501035?text=Isi Pesan" target="_blank">
                                                Hubungi Penjual
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                    fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                    <path
                                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />

                                            </a>
                                        </li>
                                        <li>
                                            @if ($data->buy === 1)
                                                <a class="custom_btn bg_default_yellow" href="#!" id="buy-now">
                                                    Beli Langsung
                                                    <span><i class="fal fa-arrow-right"></i></span>
                                                </a>
                                            @endif
                                        </li>
                                    </ul>
                                </div>

                                <div class="share_links d-flex align-items-center justify-content-center clearfix">
                                    <span class="social_title">Share Now</span>
                                    <ul class="primary_social_links ul_li clearfix">
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget wow fadeInUp2 sb_banner p-0 clearfix" data-wow-delay=".1s">
                                <img src="assets/images/sidebar/banner/img_01.jpg" alt="image_not_found">
                            </div>

                        </aside>
                    </div>

                </div>
            @endforeach
        </div>
    </section>
    <!-- details_section - end -->


    <!-- cta_section - start -->
    <section class="cta_section sec_ptb_130 bg_default_orange clearfix">
        <div class="container">
            <div
                class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 order-lg-last">
                    <div class="cta_image_1 wow fadeInUp2" data-wow-delay=".1s">
                        <img src="assets/images/cta/img_01.png" alt="image_not_found">
                    </div>
                </div>

                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                    <div class="cta_content text-white">
                        <div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".1s">
                            <h4 class="small_title text-white">Needs Any Helps</h4>
                            <h2 class="big_title mb-0 text-white">
                                Always Ready To Print Your Dream Works
                            </h2>
                            <span class="biggest_title">Quote</span>
                        </div>
                        <p class="mb_30 border_left_yellow text-white wow fadeInUp2" data-wow-delay=".2s">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                            beatae vitae dicta sunt explicabo
                        </p>
                        <a class="custom_btn bg_white wow fadeInUp2" data-wow-delay=".3s" target="_blank"
                            href="team.html">
                            meet with us
                            <span><i class="fal fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- cta_section - end -->


    <!-- pricing_section - start -->
    <section class="pricing_section sec_ptb_130 bg_gray deco_wrap clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-7 col-sm-9 col-xs-12">
                    <div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
                        <h4 class="small_title">Pricing Plan</h4>
                        <h2 class="big_title mb-0">
                            We Have A Smart Pricing Plan For Printing
                        </h2>
                        <span class="biggest_title">Pricing</span>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
                    <div class="pricing_plan text-center">
                        <div class="item_header">
                            <span class="sub_title">Print Plan</span>
                            <h3 class="item_title">Regular Plan</h3>
                        </div>

                        <div class="item_body">
                            <div class="item_icon">
                                <img src="assets/images/pricing/icon_01.png" alt="image_not_found">
                            </div>
                            <strong class="pricing_text"><sup>$</sup>39.99</strong>
                            <p class="mb-0">
                                Sed ut perspiis unde omnis iste natus error sit voluptatem accusantiu dolmque laudantium
                                totam rem aperiam
                            </p>
                        </div>

                        <div class="item_footer">
                            <a class="custom_btn bg_default_orange" href="#!">
                                choose plan
                                <span><i class="fal fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
                    <div class="pricing_plan text-center">
                        <div class="item_header">
                            <span class="sub_title">Print Plan</span>
                            <h3 class="item_title">Smart Plan</h3>
                        </div>

                        <div class="item_body">
                            <div class="item_icon">
                                <img src="assets/images/pricing/icon_02.png" alt="image_not_found">
                            </div>
                            <strong class="pricing_text"><sup>$</sup>58.96</strong>
                            <p class="mb-0">
                                Sed ut perspiis unde omnis iste natus error sit voluptatem accusantiu dolmque laudantium
                                totam rem aperiam
                            </p>
                        </div>

                        <div class="item_footer">
                            <a class="custom_btn bg_default_orange" href="#!">
                                choose plan
                                <span><i class="fal fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".7s">
                    <div class="pricing_plan text-center">
                        <div class="item_header">
                            <span class="sub_title">Print Plan</span>
                            <h3 class="item_title">Regular Plan</h3>
                        </div>

                        <div class="item_body">
                            <div class="item_icon">
                                <img src={{ asset('assets/images/pricing/icon_03.png') }} alt="image_not_found">
                            </div>
                            <strong class="pricing_text"><sup>$</sup>99.99</strong>
                            <p class="mb-0">
                                Sed ut perspiis unde omnis iste natus error sit voluptatem accusantiu dolmque laudantium
                                totam rem aperiam
                            </p>
                        </div>

                        <div class="item_footer">
                            <a class="custom_btn bg_default_orange" href="#!">
                                choose plan
                                <span><i class="fal fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="deco_image shape_1">
            <img src={{ asset('assets/images/pricing/shape_01.png') }} alt="image_not_found">
        </div>
        <div class="deco_image shape_2">
            <img src={{ asset('assets/images/pricing/shape_02.png') }} alt="image_not_found">
        </div>
    </section>
    <!-- pricing_section - end= -->


    </main>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const buyNowButton = document.getElementById('buy-now');

            if (buyNowButton) {
                buyNowButton.addEventListener('click', function(event) {
                    event.preventDefault();

                    const userConfirmation = confirm("Apakah Anda yakin ingin melanjutkan ke pembayaran?");
                    if (userConfirmation) {
                        // Jalankan Snap pop-up menggunakan token dari server
                        snap.pay('{{ $snapToken }}', {
                            onSuccess: function(result) {
                                alert("Pembayaran berhasil!");
                                console.log(result); // Simpan hasil jika perlu
                            },
                            onPending: function(result) {
                                alert("Pembayaran masih dalam proses.");
                                console.log(result); // Simpan hasil jika perlu
                            },
                            onError: function(result) {
                                alert("Terjadi kesalahan saat memproses pembayaran.");
                                console.error(result); // Debug error
                            }
                        });
                    } else {
                        alert("Pembayaran dibatalkan.");
                    }
                });
            }
        });
    </script>
@endsection
