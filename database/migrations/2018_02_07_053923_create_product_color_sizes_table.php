<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductColorSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_color_sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_colors_id')->unsigned();
            $table->integer('size_id')->unsigned();
            $table->foreign('size_id')->references('id')->on('sizes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('product_colors_id')->references('id')->on('product_colors')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('product_color_sizes');
    }
}
