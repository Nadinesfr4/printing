<div class="sidebar-menu-wrapper">
    <div class="sidebar_mobile_menu">

        <span class="close_btn"><i class="fal fa-times"></i></span>

        <div class="mobile_menu_list clearfix">
                <li><a {{ ($tittle === "home") ? 'active' : '' }} href="home">Home</a></li>

                <li><a {{ ($tittle === "product") ? 'active' : '' }} href="product">Product</a></li>

                <li class="dropdown">
                    <a href="#!" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portofolio</a>
                        <li class="dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="portfolio_metro">Portfolio Metro</a></li>
                                <li><a href="portfolio_masonry">Portfolio Masonry</a></li>
                                <li><a href="portfolio_details">Portfolio Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#!" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News</a>
                    <ul class="dropdown-menu">
                        <li><a href="blog_grid">Blog Grid</a></li>
                        <li><a href="blog_standard">Blog Standard</a></li>
                        <li><a href="blog_details">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="contact">Contact</a></li>    
            </ul>
        </div>

    </div>
    <div class="overlay"></div>
</div>