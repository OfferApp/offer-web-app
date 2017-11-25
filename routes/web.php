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

//Logged in users/vendor cannot access or send requests these pages
Route::group(['middleware' => 'vendor_guest'], function() {

      Route::get('vendor_register', 'VendorAuth\RegisterController@showRegistrationForm')
      ->name('showregisterform');
      Route::post('vendor_register', 'VendorAuth\RegisterController@register')
      ->name('register');
      Route::get('vendor_login', 'VendorAuth\LoginController@showLoginForm')
      ->name('showloginform');
      Route::post('vendor_login', 'VendorAuth\LoginController@login')
      ->name('login');
});

Route::post('vendor_verification/$id', 'VendorAuth\LoginController@verified')
            ->name('email_verification');


//Only logged in vendors can access or send requests to these pages
Route::group(['middleware' => 'vendor_auth'], function(){

      Route::get('vendor_logout',function (){
      Auth::guard('web_vendor')->logout();
      return redirect('/');
      })->name('logout');

      Route::get('/', function(){
      return view('home');
      })->name('home');

      Route::get('/newVendorAccount', 'VendorAccount\AccountController@create')
      ->name('setAccount');

      Route::get('/newoffer', 'Offer\OfferController@create')->name('setOffer');
      Route::get('/editoffer', 'Offer\OfferController@edit')->name('editOffer');
      Route::get('/viewoffer', 'Offer\OfferController@edit')->name('viewOffer');
      Route::get('/aboutus', 'Offer\OfferController@edit')->name('aboutUs');
      Route::get('/contactus', 'Offer\OfferController@edit')->name('contactUs');


});


Route::post('/newVendorAccount', 'HomeController@fileUpload')->name('uploadFile');
