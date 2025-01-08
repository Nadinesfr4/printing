        <!-- backtotop - start -->
        <div id="thetop"></div>
        <div id="backtotop">
            <a href="#" id="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <div>
            <a href="https://wa.me/6285735501035?text=Isi Pesan" target="_blank" id="wa">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path
                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                </svg>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- preloader - start -->
        <div class="preloader">
            <div class="animation_preloader">
                <div class="spinner"></div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row vh-100">
                    <div class="col-3 loader_section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader_section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader_section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader_section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader - end -->

        <header class="header_section sticky_header header_default clearfix">
            <div class="header_top {{ Request::is('/') ? 'bg_default_blue text-white' : 'bg_light' }} clearfix">
                <div class="maxw_1420 container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <ul class="header_contact_info ul_li clearfix">
                                <li><i class="far fa-map-marker-alt"></i> 20 Main Street, USA</li>
                                <li><i class="far fa-envelope-open"></i> support@gmail.com</li>
                                <li><i class="far fa-clock"></i> Sun - Monday, 09 am - 04 pm</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="header_items_list ul_li_right clearfix">
                                @if (Request::is('/'))
                                    <li>
                                        <div class="header_social_links d-flex align-items-center">
                                            <span class="social_title text-white">Social Links:</span>
                                            <ul class="primary_social_links ul_li clearfix">
                                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                @else
                                    <li>
                                        <ul class="primary_social_links ul_li clearfix">
                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                        </ul>
                                    </li>
                                @endif
                                <li>
                                    <div class="select_option mb-0">
                                        <select>
                                            <option data-display="Select">Select Your Language</option>
                                            <option value="English" selected>English</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="Portuguese">Portuguese</option>
                                            <option value="Franch">Franch</option>
                                            <option value="Indonesian">Indonesian</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian header_bottom dengan logika untuk kelas tambahan -->
            <div class="header_bottom {{ Request::is('/') ? '' : 'bg_default_blue' }}">
                {{-- @foreach ($data as $item) --}}
                <div class="maxw_1420 container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand_logo">
                                <a href="/">
                                    <img src="{{ asset('assets/images/logo/logo_01_1x.png') }}"
                                        srcset="{{ asset('assets/images/logo/logo_01_1x.png 1x') }}"
                                        alt="logo_not_found">
                                </a>
                                <ul class="mobilemenu_btns_group ul_li_right clearfix">
                                    <li>
                                        <button type="button" class="search_btn" data-bs-toggle="collapse"
                                            data-bs-target="#search_body_collapse" aria-expanded="false"
                                            aria-controls="search_body_collapse">
                                            <i class="fal fa-search"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="mobile_menu_btn"><i
                                                class="fal fa-bars"></i></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <nav class="main_menu clearfix">
                                <ul class="ul_li_center clearfix">
                                    <li class="{{ $tittle === 'Home' ? 'active' : '' }}">
                                        <a href="/">Home</a>
                                    </li>

                                    <li class="{{ $tittle === 'Product' ? 'active' : '' }}">
                                        <a href="product">Product</a>
                                    </li>

                                    <li class="{{ $tittle === 'Portofolio' ? 'active' : '' }}">
                                        <a href="portfolio_masonry">Portfolio</a>
                                    </li>
            
                                    <li class="{{ ($tittle === 'Blog') ? 'active' : '' }}">
                                        <a href="{{ route('blog.blogGrid') }}">Blog</a>
                                   </li>
            
                                    <li class="{{ ($tittle === 'Contact') ? 'active' : '' }}">
                                        <a href="contact">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-lg-3">
                            <ul class="header_btns_group ul_li_right clearfix">
                                <li>
                                    <button type="button" class="action_btn search_btn bg_default_purple"
                                        data-bs-toggle="collapse" data-bs-target="#search_body_collapse"
                                        aria-expanded="false" aria-controls="search_body_collapse">
                                        <i class="fal fa-search"></i>
                                    </button>
                                </li>
                                <li>
                                    <a class="custom_btn bg_default_yellow" href="contact">
                                        get a quote
                                        <span><i class="fal fa-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div id="search_body_collapse" class="search_body_collapse collapse">
                <div class="search_body">
                    <div class="container maxw_1420">
                        <form action="#">
                            <div class="form_item m-0">
                                <input type="search" name="search" placeholder="Type here...">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        @if (!Request::is('/'))
            <main>
                <!-- breadcrumb_section - start -->
                <section class="breadcrumb_section d-flex align-items-center clearfix"
                    data-background="{{ asset('assets/images/breadcrumb/bg_01.jpg') }}">
                    <div class="container">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s">
                                <h1 class="page_title mb-0">{{ $page }}</h1>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
                                <ul class="breadcrumb_nav ul_li_right clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li>{{ $page }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endif
{{-- @endforeach

<div>
    {{ $data->links() }}
</div> --}}

        
