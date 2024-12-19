<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


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

// Route::get('/blog_grid', function () {
//     return view ('client.blog_grid',[
//          "tittle" => "Blog",
//          "page" => "Blog Grid"
//     ]);
// });

// Route::get('/blog_grid/{id}', [BlogController::class, 'show'])->name('blog.show');

// Rute untuk halaman blog tanpa parameter (semua post)
// Route::get('/blog_grid', [BlogController::class, 'index'])->name('blog.index');

// // Rute untuk halaman blog detail berdasarkan ID
// Route::get('/blog_grid/{id}', [BlogController::class, 'show'])->name('blog.show');


Route::get('/blog_details', function () {
    return view ('client.blog_details',[
         "tittle" => "Blog",
         "page" => "Blog Details"
    ]);
});

// Rute untuk dashboard (CRUD admin)
Route::resource('dashboard', BlogController::class);

// Rute untuk blog grid (client)
Route::get('/blog_grid', [BlogController::class, 'blogGrid'])->name('blog.index');

// Route::get('/blog_grid/{id}', [BlogController::class, 'show'])->name('blog.show');
