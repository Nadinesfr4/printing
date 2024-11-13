<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('home',[
        "tittle" => "Home"
    ]);
});

Route::get('/product', function () {
    return view ('product',[
        "tittle" => "Product",
        "page" => "Product"
    ]);
});

Route::get('/contact', function () {
    return view ('contact',[
        "tittle" => "Contact",
        "page" => "Contact Us"
    ]);
});

Route::get('/product_detail', function () {
    return view ('product_detail',[
        "tittle" => "Product",
        "page" => "Product Deatils"
    ]);
});

Route::get('/portfolio_metro', function () {
    return view ('portfolio_metro',[
        "tittle" => "Portofolio",
        "page" => "Portfolio metro"
    ]);
});

Route::get('/portfolio_masonry', function () {
    return view ('portfolio_masonry',[
         "tittle" => "Portofolio",
         "page" => "Portofolio Masonry"
    ]);
});

Route::get('/portofolio_details', function () {
    return view ('portofolio_details',[
         "tittle" => "Portofolio",
         "page" => "Portofolio Details"
    ]);
});

Route::get('/blog_grid', function () {
    return view ('blog_grid',[
         "tittle" => "Blog",
         "page" => "Blog Grid"
    ]);
});

Route::get('/blog_standard', function () {
    return view ('blog_standard',[
         "tittle" => "Blog",
         "page" => "Blog Standard"
    ]);
});

Route::get('/blog_details', function () {
    return view ('blog_details',[
         "tittle" => "Blog",
         "page" => "Blog Details"
    ]);
});

