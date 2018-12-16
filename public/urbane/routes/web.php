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


// Home Page
Route::get('/', function () {
    return view('urbane.home');
});

// About Page
Route::get('/about', function () {
    return view('urbane.about');
});

// contact Us page
Route::get('/contact', function () {
    return view('urbane.contact');
});

Route::post('/contact', 'ContactController@saveContact');

// Subscription
Route::post('/subscribe', 'SubscriptionController@subscribe');

// Gallery Page 
Route::get('/gallery', function(){
    return view('urbane.gallery');
});

// Export Page 
Route::get('/exports', function (){
    $products = [
        'l1', 'l2', 'l3', 'l4', 'l5', 'l6'
    ];
    return view('urbane.exports')->with('products', $products);
});

// Clothing Page
Route::get('/clothing', function (){
    $products = [
        'ap2','ap3', 'ap4', 'ap5', 'ap6', 'ap13'
    ];
    // return $products;
    return view('urbane.clothing')->with('items', $products);
});

// Collections Page
Route::get('/collection/{prod}', 'ProductController@loadProducts');



// Privacy Page
Route::get('/privacy', function () {
    return view('profile.privacy');
});
// Terms and Condition Page
Route::get('/terms', function () {
    return view('profile.terms');
});
// Services Page
Route::get('/services', function () {
    return view('profile.services');
});


// Authentication Controllers ands routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

////////// Contact ///////
// Get all the messages

// Get Particular Message

////////// Contact ///////

////////// Products ///////
// Get Products Page
Route::get('/admin/products', function(){
    return view('admin.products');
});
// Add Product
Route::post('/add/product', 'ProductController@addProduct');
// Delete any product
Route::post('/del/products', 'ProductController@deleteProduct');
// Get Products Count
Route::get('/get/product/counts', 'ProductController@getProdCount');
Route::get('/get/products', 'ProductController@getProducts');


/////// Category /////////
// Delete any Category

// Add New Category///
Route::post('/add/category', 'ProductController@addCategory');
// Get all the categories
Route::get('/get/category', 'ProductController@getCategories');
Route::post('/del/category', 'ProductController@deleteCategory');



// Products Controllers




// Get Email Counts
Route::get('/get/email/counts', 'ContactController@getContactCount');
Route::get('/get/recent/contacts', 'ContactController@getRecentContacts');
Route::get('/get/subs/counts', 'SubscriptionController@getSubsCount');