<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
          $table->increments('id');
          $table->string('fullName');
          $table->string('shopName');
          $table->string('vendorLogo');
          $table->string('shopAddress');
          $table->string('shopContactNo');
          $table->string('website');
          $table->float('xCoordinate');
          $table->float('yCoordinate');
          $table->string('zipCode');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
          $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
