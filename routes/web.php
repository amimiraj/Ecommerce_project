<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes([
    'register' => true, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);




//-------------------------------------------------------Admin panel---------------------------------------------------------------------
//logout-----
Route::get('logout', 'Auth\LoginController@logout')->middleware('auth');

Route::get('/dashboard', 'AdminController@index')->name('dashboard')->middleware('auth');
Route::get('/home', 'HomeController@index')->middleware('auth');


//category======
Route::resource('categories', 'CategoryController')->middleware('auth');
Route::get('/all-category', 'CategoryController@all_category')->middleware('auth');
Route::get('/delete-category/{id}', 'CategoryController@delete_category')->middleware('auth');
Route::get('/edit-category/{id}', 'CategoryController@edit_category')->middleware('auth');

//manufacturer=============
Route::get('/add-manufacturer', 'ManufacturerController@add_manufacturer')->middleware('auth');
Route::get('/all-manufacturer', 'ManufacturerController@all_manufacturer')->middleware('auth');
Route::post('/save-manufacturer', 'ManufacturerController@save_manufacturer')->middleware('auth');
Route::get('/edit-manufacturer/{id}', 'ManufacturerController@edit_manufacturer')->middleware('auth');
Route::post('/update-manufacturer/{id}', 'ManufacturerController@update_manufacturer')->middleware('auth');
Route::delete('/delete-manufacturer/{id}', 'ManufacturerController@delete_manufacturer')->middleware('auth');

//Product =============
Route::resource('product', 'ProductController')->middleware('auth');
Route::post('/save-product', 'ProductController@save_product')->middleware('auth');
Route::get('/all-product', 'ProductController@all_product')->middleware('auth');
Route::delete('/delete/{any}', 'ProductController@delete')->middleware('auth');
Route::get('/edit/{any}', 'ProductController@edit')->middleware('auth');

//Slider=========
Route::get('sliders/create', 'SliderController@create')->middleware('auth');
Route::get('sliders/all_slider', 'SliderController@all_slider')->middleware('auth');
Route::post('sliders/store', 'SliderController@store')->middleware('auth');
Route::get('sliders/edit/{any}', 'SliderController@edit')->middleware('auth');
Route::post('sliders/update/{any}', 'SliderController@update')->middleware('auth');
Route::delete('sliders/delete/{any}', 'SliderController@delete')->middleware('auth');


//------order show---------------
Route::get('/show-order', 'OrderController@show_orders')->middleware('auth');
Route::get('/delete-order/{order_id}', 'OrderController@delete_order')->middleware('auth');


//invoice
Route::get('/order-invoice/{order_id}', 'InvoiceController@order_invoice')->middleware('auth');
Route::get('/invoice-print/{order_id}', 'InvoiceController@invoice_print')->middleware('auth');

//--------------------------------------------------end----------------------------------------------------
//------------------------------front end---------------------------------------------------------------------------------------------
Route::get('/', 'WelcomeController@index');


//product details
Route::get('/product-details/{product_id}/{category_id}', 'WelcomeController@product_details');


//contact
Route::get('/contact', 'ContactController@contact');
Route::post('/save-contact', 'ContactController@save_contact');
Route::get('/show-contact', 'ContactController@show_contact');
Route::get('/delete-contact/{id}', 'ContactController@delete_contact');


//------category wise product show---------------
Route::get('/product-category', 'MenuController@product_category');
Route::get('/product-category/{category_id}', 'MenuController@all_category_product');


//.........cart...............
Route::post('/add-cart/{id}', 'CartController@add_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/remove-cart/{product_id}', 'CartController@remove_cart');
Route::post('/update-cart/{product_id}', 'CartController@update_cart');


//............checkout product.............
Route::get('/checkout', 'CheckoutController@index');
Route::get('/place-order', 'CheckoutController@place_order');
Route::post('/save-customer', 'CheckoutController@save_customer');
Route::post('/customer-login', 'CheckoutController@customer_login');
Route::post('/customer-logout', 'CheckoutController@customer_logout');

//..........customer_shipping........
Route::get('/customer-shipping', 'CheckoutController@customer_shipping');
Route::post('/save-shipping', 'CheckoutController@save_shipping');

//..........Customer logout..........
Route::get('/customer-logout', 'CheckoutController@customer_logout');

//........customer payment..............
Route::get('/customer-payment', 'CheckoutController@customer_payment');
Route::post('/save-order', 'CheckoutController@save_order');

//..........order confirm.........
Route::get('/order-confirm', 'CheckoutController@order_confirm');

//Search--------------------
Route::post('/search', 'WelcomeController@search');

//.......Bkash.............
Route::post('token', 'PaymentController@token');
Route::get('createpayment', 'PaymentController@createpayment');
Route::get('executepayment', 'PaymentController@executepayment');


//email--------------------------------
Route::get('/send-email', function () {

    $details = [
        'title' => 'mail from miraj',
        'body' => 'this is for testing'
    ];
    \Mail::to("akibmiraj1998@gmail.com")->send(new\App\Mail\TestMail($details));
    return "Email sent";
});
