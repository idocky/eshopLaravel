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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->integer('price');
            $table->integer('discount_price')->nullable();
            $table->integer('is_published');
            $table->string('photo');
            $table->unsignedBigInteger('composition_id')->nullable();
            $table->unsignedBigInteger('categories_id')->nullable();
            $table->unsignedBigInteger('color_id')->nullable();
            $table->unsignedBigInteger('season_id')->nullable();
            $table->integer('size_table_id');
            $table->unsignedBigInteger('collection_id')->nullable();

            $table->foreign('collection_id')->references('id')->on('collections');
            $table->foreign('season_id')->references('id')->on('seasons');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->foreign('composition_id')->references('id')->on('compositions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
