<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('siswa', 'Api\SiswaController');
Route::get('most', 'FrontendController@most');
Route::get('trending', 'FrontendController@trending');
Route::get('kpop', 'FrontendController@kpop');
Route::get('restoran1', 'FrontendController@restoran1');
Route::get('film1', 'FrontendController@film1');
Route::get('budaya1', 'FrontendController@budaya1');
Route::get('kategori', 'FrontendController@kategori');
Route::get('tag', 'FrontendController@tag');
Route::get('restoran', 'FrontendController@restoran');
Route::get('budaya', 'FrontendController@budaya');

Route::group(['prefix' => 'admin'], function () { });

// Route::resource('kategori', 'Api\KategoriController');
// Route::resource('artikel', 'Api\ArtikelController');
// Route::resource('tag', 'Api\TagController');



// Route::group(
//     ['prefix' => 'admin', 'middleware' => ['auth:api']],
//     function () {
//         Route::get('/', function () {
//             return view('backend.index');
//         });
//         route::resource('kategori', 'Api\KategoriController');
//         route::resource('tag', 'Api\TagController');
//         route::resource('artikel', 'Api\ArtikelController');
//     }
// );
