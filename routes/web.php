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

Route::get('/map',function(){
  return view('cornford.googlmapper.circle');
});

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

Route::get('vendor_verification/$id', 'VendorAuth\LoginController@verified')
            ->name('email_verification');


//Only logged in vendors can access or send requests to these pages
Route::group(['middleware' => 'vendor_auth'], function(){

      Route::get('vendor_logout',function (){
      Auth::guard('web_vendor')->logout();
      return redirect('/');
      })->name('logout');

      Route::get('/', function(){
        $vendor = Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first();
        $offers = Offer::where('vendor_id',$vendor->id)->get();
        $bookmarks = [];
        $customer = new App\Offer;
        foreach ($offers as $key => $offer) {
          $bookmark = $customer->customerBookmark($offer->id);
          if ($bookmark->isNotEmpty()) {
            $bookmarks[] = $bookmark;
          }

        }

       return view('home',compact('bookmarks'));
      })->name('home');

<<<<<<< Updated upstream
      Route::get('/vendorprofile', function(){
        $vendor = Vendor::where('user_id', Auth::guard('web_vendor')->user()->id)->first();
        $offers = Offer::where('vendor_id',$vendor->id)->get();
      return view('vendorprofile',compact(['vendor','offers']));
    })->name('vendorProfile');
      Route::get('/dashboard', 'VendorAccount\AccountController@index')
      ->name('dashboard');
<<<<<<< HEAD
<<<<<<< master
<<<<<<< master
=======
<<<<<<< refs/remotes/origin/master
>>>>>>> Stashed changes
      Route::get('/newVendorAccount', 'VendorAccount\AccountController@create')
      ->name('setAccount');
      Route::post('/newVendorPersonalInfo', 'VendorAccount\AccountController@setPersonalInfo')
=======
=======
>>>>>>> Final Update done
=======
>>>>>>> gui
      // Route::get('/newVendorAccount', 'VendorAccount\AccountController@create')
      // ->name('setAccount');
      Route::get('/VendorPersonalInfo', 'VendorAccount\AccountController@PersonalInfo')
      ->name('PersonalInfo');
      Route::get('/VendorAvatar', 'VendorAccount\AccountController@Avatar')
      ->name('Avatar');
      Route::get('/VendorPassword', 'VendorAccount\AccountController@Password')
      ->name('Password');
      Route::get('/VendorLocation', 'VendorAccount\AccountController@Location')
      ->name('Location');

      Route::post('/VendorPersonalInfo', 'VendorAccount\AccountController@setPersonalInfo')
<<<<<<< HEAD
<<<<<<< master
>>>>>>> Finale Update done
=======
>>>>>>> Final Update done
=======
>>>>>>> gui
      ->name('setPersonalInfo');
      Route::post('/VendorAvatar', 'VendorAccount\AccountController@setAvatar')
      ->name('setAvatar');
      Route::post('/VendorPassword', 'VendorAccount\AccountController@setPassword')
      ->name('setPassword');
      Route::post('/VendorLocation', 'VendorAccount\AccountController@setLocation')
      ->name('setLocation');

      Route::get('/newoffer', 'Offer\OfferController@create')->name('setOffer');
      Route::get('/editoffer', 'Offer\OfferController@edit')->name('editOffer');
<<<<<<< HEAD
<<<<<<< master
<<<<<<< master
<<<<<<< Updated upstream
      Route::post('/editoffer', 'Offer\OfferController@store')->name('storeEdit');
=======
      Route::post('/newoffer', 'Offer\OfferController@store')->name('storeNew');
      Route::post('/editoffer', 'Offer\OfferController@update')->name('storeEdit');
>>>>>>> Finale Update done
=======
      Route::post('/newoffer', 'Offer\OfferController@store')->name('storeNew');
      Route::post('/editoffer', 'Offer\OfferController@update')->name('storeEdit');
>>>>>>> Final Update done
=======
      Route::post('/newoffer', 'Offer\OfferController@store')->name('storeNew');
      Route::post('/editoffer', 'Offer\OfferController@update')->name('storeEdit');
>>>>>>> gui
      Route::get('/viewoffer', 'Offer\OfferController@index')->name('viewOffer');
=======
      Route::get('/viewoffer', 'Offer\OfferController@edit')->name('viewOffer');
=======
      Route::get('/vendorprofile', function(){
        $vendor = Vendor::where('user_id', Auth::guard('web_vendor')->user()->id)->first();
        $offers = Offer::where('vendor_id',$vendor->id)->get();
      return view('vendorprofile',compact(['vendor','offers']));
    })->name('vendorProfile');
      Route::get('/dashboard', 'VendorAccount\AccountController@index')
      ->name('dashboard');
      // Route::get('/newVendorAccount', 'VendorAccount\AccountController@create')
      // ->name('setAccount');
      Route::get('/VendorPersonalInfo', 'VendorAccount\AccountController@PersonalInfo')
      ->name('PersonalInfo');
      Route::get('/VendorAvatar', 'VendorAccount\AccountController@Avatar')
      ->name('Avatar');
      Route::get('/VendorPassword', 'VendorAccount\AccountController@Password')
      ->name('Password');
      Route::get('/VendorLocation', 'VendorAccount\AccountController@Location')
      ->name('Location');

      Route::post('/VendorPersonalInfo', 'VendorAccount\AccountController@setPersonalInfo')
      ->name('setPersonalInfo');
      Route::post('/VendorAvatar', 'VendorAccount\AccountController@setAvatar')
      ->name('setAvatar');
      Route::post('/VendorPassword', 'VendorAccount\AccountController@setPassword')
      ->name('setPassword');
      Route::post('/VendorLocation', 'VendorAccount\AccountController@setLocation')
      ->name('setLocation');

      Route::get('/newoffer', 'Offer\OfferController@create')->name('setOffer');
      Route::get('/editoffer', 'Offer\OfferController@edit')->name('editOffer');
      Route::post('/newoffer', 'Offer\OfferController@store')->name('storeNew');
      Route::post('/editoffer', 'Offer\OfferController@update')->name('storeEdit');
      Route::get('/viewoffer', 'Offer\OfferController@index')->name('viewOffer');
>>>>>>> Final Update done
>>>>>>> Stashed changes
      Route::get('/aboutus', 'Offer\OfferController@edit')->name('aboutUs');
      Route::get('/contactus', 'Offer\OfferController@edit')->name('contactUs');

      Route::get('/offerdelete', 'Offer\OfferController@destroy' )->name('offerDelete');
});


Route::post('/newVendorAccount', 'HomeController@fileUpload')->name('uploadFile');
