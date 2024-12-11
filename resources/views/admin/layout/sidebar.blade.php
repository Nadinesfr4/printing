 <!-- ========== Left Sidebar Start ========== -->
 <div class="left-side-menu">

     <div class="h-100" data-simplebar>

         <!-- User box -->
         <div class="user-box text-center">
             <img src="{{ asset('') }}dashboards/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                 class="rounded-circle avatar-md">
             <div class="dropdown">
                 <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                     data-bs-toggle="dropdown">Geneva Kennedy</a>
                 <div class="dropdown-menu user-pro-dropdown">

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <i class="fe-user me-1"></i>
                         <span>My Account</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <i class="fe-settings me-1"></i>
                         <span>Settings</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <i class="fe-lock me-1"></i>
                         <span>Lock Screen</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <i class="fe-log-out me-1"></i>
                         <span>Logout</span>
                     </a>

                 </div>
             </div>
             <p class="text-muted">Admin Head</p>
         </div>

         <!--- Sidemenu -->
         <div id="sidebar-menu">

             <ul id="side-menu">

                 <li class="menu-title">Navigation</li>

                 <li>
                     <a href="#sidebarDashboards" data-bs-toggle="collapse">
                         <i data-feather="airplay"></i>
                         <span class="badge bg-success rounded-pill float-end">4</span>
                         <span> Dashboards </span>
                     </a>
                     <div class="collapse" id="sidebarDashboards">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="index.html">Dashboard 1</a>
                             </li>
                         </ul>
                     </div>
                 </li>

                 <li class="menu-title mt-2">Apps</li>
                 <li>
                     <a href="{{ route('blog.index') }}">
                         <i class="fe-book"></i>
                         <span> Blog </span>
                     </a>
                 </li>

                 <li>
                     <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                         <i data-feather="shopping-cart"></i>
                         <span> Ecommerce </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="sidebarEcommerce">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="ecommerce-dashboard.html">Dashboard</a>
                             </li>
                             <li>
                                 <a href="{{route('product.index')}}">Products</a>
                             </li>
                             {{-- <li>
                                 <a href="ecommerce-product-detail.html">Product Detail</a>
                             </li>
                             <li>
                                 <a href="ecommerce-product-edit.html">Add Product</a>
                             </li>
                             <li>
                                 <a href="ecommerce-customers.html">Customers</a>
                             </li>
                             <li>
                                 <a href="ecommerce-orders.html">Orders</a>
                             </li>
                             <li>
                                 <a href="ecommerce-order-detail.html">Order Detail</a>
                             </li>
                             <li>
                                 <a href="ecommerce-sellers.html">Sellers</a>
                             </li>
                             <li>
                                 <a href="ecommerce-cart.html">Shopping Cart</a>
                             </li>
                             <li>
                                 <a href="ecommerce-checkout.html">Checkout</a>
                             </li> --}}
                         </ul>
                     </div>
                 </li>
             </ul>

         </div>
         <!-- End Sidebar -->

         <div class="clearfix"></div>

     </div>
     <!-- Sidebar -left -->

 </div>
 <!-- Left Sidebar End -->
