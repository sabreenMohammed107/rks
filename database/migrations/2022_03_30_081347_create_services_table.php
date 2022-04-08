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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable();
            $table->string('title_ar')->nullable();
            $table->text('service_en')->nullable();
            $table->text('service_ar')->nullable();
            $table->text('text_en')->nullable();
            $table->text('text_ar')->nullable();
            $table->string('image')->nullable();
            $table->string('vedio')->nullable();
            $table->dateTime('post_date', 0)->nullable();
            $table->string('pdf_en')->nullable();
            $table->string('pdf_ar')->nullable();
            $table->unsignedBigInteger('service_type_id')->nullable();
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
        Schema::dropIfExists('services');
    }
};
