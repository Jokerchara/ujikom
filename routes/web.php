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
route::get('/', 'FrontendController@front');

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
        //Kategori
        route::get('kategori', 'KategoriController@index');
        route::post('kategori-store', 'KategoriController@store');
        Route::get('/kategori/{id}/edit', 'KategoriController@edit');
        Route::delete('/kategori-destroy/{id}', 'KategoriController@destroy');

        //Tag
        route::get('tag', 'TagController@index');
        route::post('tag-store', 'TagController@store');
        Route::get('/tag/{id}/edit', 'TagController@edit');
        Route::delete('/tag-destroy/{id}', 'TagController@destroy');

        //Budaya
        route::get('budaya', 'BudayaController@index');
        route::post('budaya-store', 'BudayaController@store');
        Route::get('/budaya/{id}/edit', 'BudayaController@edit');
        Route::delete('/budaya-destroy/{id}', 'BudayaController@destroy');

        //Restoran
        route::get('restoran', 'RestoranController@index');
        route::post('restoran-store', 'RestoranController@store');
        Route::get('/restoran/{id}/edit', 'RestoranController@edit');
        Route::delete('/restoran-destroy/{id}', 'RestoranController@destroy');

        //Film
        route::get('film', 'FilmController@index');
        route::post('film-store', 'FilmController@store');
        Route::get('/film/{id}/edit', 'FilmController@edit');
        Route::delete('/film-destroy/{id}', 'FilmController@destroy');
        
        //Artikel
        route::resource('artikel', 'ArtikelController');
        route::resource('restoran', 'RestoranController');
        route::resource('budaya', 'BudayaController');
        route::resource('film', 'FilmController');
        route::resource('calendar', 'CalendarController');
    }
);

Route::group(
    ['prefix' => '/'],
    function () {
        route::get('budaya', 'FrontendController@budaya');
        route::get('restoran', 'FrontendController@restoran');
        route::get('about', 'FrontendController@about');
        route::get('blog', 'FrontendController@blog');
        route::get('singlebudaya/{budaya}', 'FrontendController@singlebudaya');
        route::get('singlerestoran/{restoran}', 'FrontendController@singlerestoran');
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
Route::get('/calendar', 'CalendarController@index')->name('calendar');
Route::get('/logout', 'HomeController@logout')->name('logout');
