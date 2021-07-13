<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccesoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('condition');
            $table->string('country');
            $table->text('description');
            $table->text('foto');
            $table->string('model');
            $table->string('price');
            $table->string('sku');
            $table->string('warranty');
            $table->string('weight');
            $table->foreignId('color_id');
            $table->foreignId('brand_id');
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
        Schema::dropIfExists('accesories');
    }
}