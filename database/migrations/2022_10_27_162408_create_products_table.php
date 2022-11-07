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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('collection_id')->nullable();
            $table->char('description');
            $table->double('price');
            $table->char('image_1')->nullable();
            $table->char('image_2')->nullable();
            $table->char('image_3')->nullable();
            $table->char('image_4')->nullable();
            $table->integer('quantity')->default(1)->nullable();
            $table->integer('unique')->default(0)->nullable();
            $table->integer('published')->default(0);
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
        Schema::dropIfExists('products');
    }
};
