<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/bawaan', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('frontend.front');
});



Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/Mnet', function () {
    return view('frontend.video-post');
});

Route::get('/Budaya', function () {
    return view('frontend.video-post2');
});

Route::get('/Restoran', function () {
    return view('frontend.video-post3');
});

Route::get('/log', function () {
    return view('frontend.login');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/submit-video', function () {
    return view('frontend.submit-video');
});

Route::get('/single-post', function () {
    return view('frontend.single-post');
});

Route::get('/archive', function () {
    return view('frontend.archive');
});

Route::group(
    ['prefix' => 'admin', 'middleware' => 'auth'],
    function () {
        Route::get('/', function () {
            return view('backend.index');
        });
        route::resource('kategori', 'KategoriController');
        route::resource('tag', 'TagController');
        route::resource('artikel', 'ArtikelController');
        route::resource('restoran', 'RestoranController');
        route::resource('budaya', 'BudayaController');
    }
);

Route::group(
    ['prefix' => '/'],
    function () {
        route::get('budaya', 'FrontendController@budaya');
        route::get('restoran', 'FrontendController@restoran');
        route::get('about', 'FrontendController@about');
        route::get('blog', 'FrontendController@blog');
        route::get('contact', 'FrontendController@contact');
        route::get('services', 'FrontendController@services');
        route::get('blog/{artikel}', 'FrontendController@singleblog');
        route::get('blog-tag/{tag}', 'FrontendController@blogtag');
        route::get('blog-kategori/{kategori}', 'FrontendController@blogkategori');
    }
);

// Route::resource('kategori', 'KategoriController');
// Route::resource('artikel', 'ArtikelController');
// Route::resource('tag', 'TagController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');
