<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          //  This is Realations for the messages Table ..
     Schema::table('messages', function (Blueprint $table) {
        $table->foreign('message_type_id')->references('id')->on('message_types');

    });
     //  This is Realations for the galleries Table ..
     Schema::table('galleries', function (Blueprint $table) {
        $table->foreign('category_id')->references('id')->on('gallery_categories');

    });
     //  This is Realations for the services Table ..
     Schema::table('services', function (Blueprint $table) {
        $table->foreign('service_type_id')->references('id')->on('service_types');
    });
         //  This is Realations for the products Table ..
     Schema::table('products', function (Blueprint $table) {
        $table->foreign('product_type_id')->references('id')->on('product_types');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
