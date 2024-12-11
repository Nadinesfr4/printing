<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('client.home',[
        "tittle" => "Home"
    ]);
});

Route::get('/product', function () {
    return view ('client.product',[
        "tittle" => "Product",
        "page" => "Product"
    ]);
});

Route::get('/contact', function () {
    return view ('client.contact',[
        "tittle" => "Contact",
        "page" => "Contact Us"
    ]);
});

Route::get('/product_detail', function () {
    return view ('client.product_detail',[
        "tittle" => "Product",
        "page" => "Product Deatils"
    ]);
});

Route::get('/portfolio_metro', function () {
    return view ('client.portfolio_metro',[
        "tittle" => "Portofolio",
        "page" => "Portfolio metro"
    ]);
});

Route::get('/portfolio_masonry', function () {
    return view ('client.portfolio_masonry',[
         "tittle" => "Portofolio",
         "page" => "Portofolio Masonry"
    ]);
});

Route::get('/portofolio_details', function () {
    return view ('client.portofolio_details',[
         "tittle" => "Portofolio",
         "page" => "Portofolio Details"
    ]);
});

Route::get('/blog_grid', function () {
    return view ('client.blog_grid',[
         "tittle" => "Blog",
         "page" => "Blog Grid"
    ]);
});

Route::get('/blog_details', function () {
    return view ('client.blog_details',[
         "tittle" => "Blog",
         "page" => "Blog Details"
    ]);
});

Route::resource('dashboard',BlogController::class);
