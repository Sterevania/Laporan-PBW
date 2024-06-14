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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['guest']], function () {
    Route::get("/", "PageController@ceklogin")->name('login');
    Route::post("/login", "AuthController@ceklogin");
});

Route::group(['middleware' => ['auth']], function () {
    Route::get("/user", "PageController@formedituser");
    Route::post("/updateuser", "PageController@updateuser");
    Route::get("/logout", "AuthController@ceklogout");
    Route::get("/home", "PageController@home");
    Route::get("/ecommerce_601", "PageController@ecommerce_601");
    Route::get("/ecommerce_601/add-form", "PageController@formAddEcommerce");
    Route::post("/save", "PageController@saveEcommerce");
    Route::get("/ecommerce_601/edit-form/{id}", "PageController@formeditEcommerce");
    Route::put("/update/{id}", "PageController@updateEcommerce");
    Route::get("/delete/{id}", "PageController@deleteEcommerce");
});
