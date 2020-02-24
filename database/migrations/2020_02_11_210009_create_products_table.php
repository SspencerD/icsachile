<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('code');
            $table->string('name');
            $table->string('description');
            $table->text('long_description')->nullable();
            $table->string('provider')->nullable();
            $table->string('cod_provider')->nullable();
            $table->string('unit_mesure')->nullable();
            $table->string('lot_provider')->nullable();
            $table->float('price');
            $table->float('price_buy')->nullable();
            $table->integer('quantity');

            $table->unsignedBigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->softDeletes(); //hacer un softdelete
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
