<?php

use Faker\Generator as Faker;
use App\Role;
use App\User;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Role::class, function (Faker $faker) {

    return [
        'name' => $faker->randomElement([Role::VENDOR_USER, Role::CUSTOMER_USER]),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});


$factory->define(User::class, function (Faker $faker) {
    static $password;

    return [
        'username' => $faker->name,
        'email' => $faker->unique()->freeEmail,
        'mobile'=> $faker->phoneNumber,
        'password' => $password ?: $password = bcrypt('secret'),
        'verified'=>$faker->randomElement([User::VERIFIED_USER,User::UNVERIFIED_USER]),
        'remember_token' => str_random(10),
        'role_id' => $faker->numberBetween(1,2),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});

$factory->define(App\Vendor::class, function (Faker $faker) {


    return [
        'fullName' => $faker->name,
        'shopName' => $faker->word,
        'vendorLogo' => $faker->image('/assets/global/img/portfolio/400x300',400,300),
        'shopAddress' => $faker->streetAddress,
        'shopContactNo' => $faker->phoneNumber,
        'website' => $faker->url,
        'xCoordinate' => $faker->latitude($min = -90, $max = 90),     // 77.147489
        'yCoordinate'=> $faker->longitude($min = -180, $max = 180),  // 86.211205
        'zipCode'=> $faker->postcode,
        'user_id'=> $faker->unique()->numberBetween($min = 1, $max = 20),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

    ];
});

$factory->define(App\Customer::class, function (Faker $faker) {


    return [
        'fullName' => $faker->name,
        'profilePicture' => $faker->image('public/Upload/images',400,300),
        'user_id'=> $faker->numberBetween($min = 1, $max = 20),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

    ];
});
$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'clothingSet' => $faker->numberBetween(0, 1),
        'footwearSet' => $faker->numberBetween(0, 1),
        'electronicSet' => $faker->numberBetween(0, 1),
        'hotelSet' => $faker->numberBetween(0, 1),
        'vendor_id'=> $faker->numberBetween($min = 1, $max = 20),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ];
});

$factory->define(App\Offer::class, function (Faker $faker) {
    return [
        'offerName' => $faker->randomElement(['Buy 1 Get 1 Free','50% OFF', 'Flat 2000 Discount']),
        'offerPic' => $faker->randomElement(['offer1.jpg','offer3.jpg','offer4.jpg','offer6.jpg','offer7.jpg']),
        'offerDescription' => $faker->paragraph(1),
        'offerExpiry' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'offerRating' => $faker->numberBetween(1,5),
        'offerLabel' => $faker->sentence(1),
        'category' => $faker->randomElement(['clothing','footwear','electronic','hotel']),
        'vendor_id' => $faker->numberBetween($min = 1, $max = 20),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

    ];
});

$factory->define(App\Bookmark::class, function (Faker $faker) {
  return [
        'customer_id' => $faker->randomDigit,
        'offer_id' => $faker->numberBetween($min = 1, $max = 20),     // 77.147489
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

    ];
});

$factory->define(App\Category_has_offer::class, function (Faker $faker) {

    return [
      'category_id' => $faker->randomDigit,
      'offer_id' => $faker->numberBetween($min = 1, $max = 20),     // 77.147489
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),


    ];
});
