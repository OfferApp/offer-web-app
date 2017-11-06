<?php
use App\Vendor;
use App\Offer;
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

      Route::get('/vendorprofile', function(){
        $vendor = Vendor::where('user_id', Auth::guard('web_vendor')->user()->id)->first();
        $offers = Offer::where('vendor_id',Auth::guard('web_vendor')->user()->id)
                                 ->get();
      return view('vendorprofile',compact(['vendor','offers']));
    })->name('vendorProfile');
      Route::get('/dashboard', 'VendorAccount\AccountController@index')
      ->name('dashboard');
      Route::get('/newVendorAccount', 'VendorAccount\AccountController@create')
      ->name('setAccount');
      Route::post('/newVendorPersonalInfo', 'VendorAccount\AccountController@setPersonalInfo')
      ->name('setPersonalInfo');
      Route::post('/newVendorAvatar', 'VendorAccount\AccountController@setAvatar')
      ->name('setAvatar');
      Route::post('/newVendorPassword', 'VendorAccount\AccountController@setPassword')
      ->name('setPassword');
      Route::post('/newVendorLocation', 'VendorAccount\AccountController@setLocation')
      ->name('setLocation');

      Route::get('/newoffer', 'Offer\OfferController@create')->name('setOffer');
      Route::get('/editoffer', 'Offer\OfferController@edit')->name('editOffer');
      Route::post('/editoffer', 'Offer\OfferController@store')->name('storeEdit');
      Route::get('/viewoffer', 'Offer\OfferController@index')->name('viewOffer');
      Route::get('/aboutus', 'Offer\OfferController@edit')->name('aboutUs');
      Route::get('/contactus', 'Offer\OfferController@edit')->name('contactUs');


});


Route::post('/newVendorAccount', 'HomeController@fileUpload')->name('uploadFile');
