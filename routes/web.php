<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;

Route::get('/',[LandingPageController::class, 'home']);
Route::get('/product',[LandingPageController::class, 'product']);
Route::get('/contact',[LandingPageController::class, 'contact']);
Route::get('/product_detail/{id}',[LandingPageController::class, 'product_detail'])->name('product_detail');


Route::get('/portfolio_metro', function () {
    return view('client.portfolio_metro', [
        "tittle" => "Portofolio",
        "page" => "Portfolio metro"
    ]);
});

Route::get('/portfolio_masonry', function () {
    return view('client.portfolio_masonry', [
        "tittle" => "Portofolio",
        "page" => "Portofolio Masonry"
    ]);
});

Route::get('/portofolio_details', function () {
    return view('client.portofolio_details', [
        "tittle" => "Portofolio",
        "page" => "Portofolio Details"
    ]);
});

// Route::get('/blog_grid', function () {
//     return view('client.blog_grid', [
//         "tittle" => "Blog",
//         "page" => "Blog Grid"
//     ]);
// });


Route::get('/blog_details', function () {
    return view('client.blog_details', [
        "tittle" => "Blog",
        "page" => "Blog Details"
    ]);
});

// Route::resource('dashboard', BlogController::class);

// Rute untuk blog grid (client)
Route::get('/blog_grid', [BlogController::class, 'blogGrid'])->name('blog.blogGrid');

// Route::resource('dashboard',BlogController::class);
Route::prefix('blog')->group(function () {
    Route::get('/',[BlogController::class, 'index'])->name('blog.index');
    Route::get('/create',[BlogController::class, 'create'])->name('blog.create');
    Route::post('/store',[BlogController::class, 'store'])->name('blog.store');
    Route::get('/show/{id}',[BlogController::class, 'show'])->name('blog.show');
    Route::get('/edit/{id}',[BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/update/{id}',[BlogController::class, 'update'])->name('blog.update');
    Route::delete('/hapus/{id}',[BlogController::class, 'destroy'])->name('blog.hapus');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/',[DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/d', [DashboardController::class, 'index_conten']);
});

Route::prefix('produk')->group(function () {
    Route::get('/',[ProdukController::class, 'index'])->name('product.index');
    Route::get('/create', [ProdukController::class, 'create'])->name('product.create');
    Route::post('/store', [ProdukController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('product.edit');
    Route::put('/update/{id}', [ProdukController::class, 'update'])->name('product.update');
    Route::delete('/hapus/{id}', [ProdukController::class, 'destroy'])->name('product.hapus');
});
