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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->dateTime('feedback_date', 0)->nullable();
            $table->string('image')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('position_en')->nullable();
            $table->string('position_ar')->nullable();
            $table->string('feedback_en')->nullable();
            $table->string('feedback_ar')->nullable();
            $table->integer('order')->nullable();
            $table->tinyInteger('active')->default(1);
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
        Schema::dropIfExists('feedback');
    }
};
