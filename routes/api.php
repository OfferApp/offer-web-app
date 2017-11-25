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

Route::post('customerlogin', 'API\CustomerController@login');
Route::post('customerregister', 'API\CustomerController@register');
Route::post('customersetPassword', 'API\CustomerController@setPassword');


Route::group(['middleware' => 'auth:api'], function(){
<<<<<<< master
<<<<<<< master
<<<<<<< Updated upstream
Route::get('customerdetails', 'API\CustomerController@details');
=======
<<<<<<< refs/remotes/origin/master
Route::post('details', 'API\CustomerController@details');
=======
=======
>>>>>>> Finale Update done
=======
>>>>>>> Final Update done
  Route::get('customerdetails', 'API\CustomerController@details');
  Route::post('customereditProfile', 'API\CustomerController@editProfile');
  Route::post('customereditProfilePicture', 'API\CustomerController@editProfilePic');
  Route::post('customeroffersdetails', 'API\CustomerController@offersDetails');
  Route::post('customerofferdetails', 'API\CustomerController@offerByIdDetails');
  Route::post('customerofferbookmark', 'API\CustomerController@offerBookmark');
  Route::post('customergetbookmarks', 'API\CustomerController@getBookmarks');





<<<<<<< master
<<<<<<< master
>>>>>>> Final Update done
>>>>>>> Stashed changes
=======
>>>>>>> Finale Update done
=======
>>>>>>> Final Update done
});
