<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('menu_name');
            $table->string('menu_type');
            $table->string('menu_category');
            $table->string('menu_code');
            $table->string('menu_description');
            $table->string('menu_availability');
            $table->string('menu_unit');
            $table->string('menu_delivery_time');
            $table->string('menu_discount')->nullable();
            $table->string('menu_delivery_fee')->nullable();
            $table->string('menu_image');
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
        Schema::dropIfExists('food_menus');
    }
}
