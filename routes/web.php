<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoloController;

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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// category
Route::get('/category', 'CategoryController@category');
Route::post('store/category', 'CategoryController@store')->name('store.category');
Route::get('all/category', 'CategoryController@allcategory')->name('all.category');
Route::get('delete/category/{id}', 'CategoryController@destroy');
Route::get('edit/category/{id}', 'CategoryController@edit');
Route::post('updat/category/{id}', 'CategoryController@Updat');

// category select then subcategory uthanor show
Route::post('subcategory', 'ProductController@getSubcategory')->name('get.subcategory');

// Sub Category
Route::get('/Sub/category', 'SubCategoryController@subcate');
Route::post('store/sub/category', 'SubCategoryController@store')->name('store.sub.category');
Route::get('all/sub/category', 'SubCategoryController@allsub');
Route::get('delete/sub/category/{id}', 'SubCategoryController@destroy');

// Size
Route::get('/size', 'SizeController@size');
Route::post('store/size', 'SizeController@store')->name('store.size');
Route::get('all/admin/size', 'SizeController@allsize')->name('all.size');
Route::get('size/edit{id}', 'SizeController@edit');
Route::post('updat/size/{id}', 'SizeController@updat');
Route::get('size/delete{id}', 'SizeController@destroy');

// color
Route::get('/color', 'ColorController@color');
Route::post('store/color', 'ColorController@store')->name('store.color');
Route::get('all/color', 'ColorController@allcolor')->name('all.color');

// product
Route::get('/product', 'ProductController@product');
Route::post('store/product', 'ProductController@store')->name('store.product');
Route::get('show/all/product', 'ProductController@allproduct');
Route::get('view/product/{id}', 'ProductController@show');
Route::get('delete/product/{id}', 'ProductController@destroy');
Route::get('edit/product/{id}', 'ProductController@edit');

// Admin order list
Route::get('customar/order/list', 'orderController@OrderList');
Route::get('user/list', 'orderController@UserList');
Route::get('delete/order/{id}', 'orderController@destroy');

// User order list
Route::get('user/order/list', 'orderController@userOrder');


// post
Route::get('/', 'PostController@post');
Route::get('category/post/user/{id}', 'PostController@categorypost');
Route::get('show/post/{id}', 'PostController@show');



//user Login
Route::get('user/login', 'loginController@login');
Route::post('store/user/login', 'loginController@store')->name('store.user.login'); /* register data Add databes */
Route::post('user/login', [App\Http\Controllers\loginController::class, 'loginn']); /* register email, name, pass logine */
Route::get('user/logout', [App\Http\Controllers\loginController::class, 'logout']); /* logout */


// cart
Route::post('/add_to_cart', [App\Http\Controllers\CartController::class, 'addToCart']);
Route::get('view/cart', [App\Http\Controllers\CartController::class, 'viewcart']);
Route::get('delete/cart/product/{id}', 'CartController@destroy');
Route::get('user/address', 'CartController@address');
Route::post('store/order', 'CartController@Store')->name('store.order');

// contact
Route::get('/contact', 'contactController@contact');


// search
Route::get('search', [App\Http\Controllers\searchController::class, 'search']);
