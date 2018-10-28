<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->integer('quantity');
            $table->double('price', 8, 2);
            $table->text('description');
            $table->string('images_url1')->default('def1.png');
            $table->string('images_url2')->default('def2.png');
            $table->string('images_url3')->default('def3.png');
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('cats');
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
}
