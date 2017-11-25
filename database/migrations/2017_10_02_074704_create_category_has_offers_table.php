<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryHasOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_has_offers', function (Blueprint $table) {
          $table->integer('category_id')->unsigned();
          $table->integer('offer_id')->unsigned();
          $table->foreign('category_id')->references('id')->on('categories');
          $table->foreign('offer_id')->references('id')->on('offers');
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
        Schema::dropIfExists('category_has_offers');
    }
}
