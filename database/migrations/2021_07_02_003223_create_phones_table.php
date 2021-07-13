<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('phone_name');
            $table->string('phone_model');
            $table->text('foto');
            $table->integer('precio');
            $table->boolean('sd_slot');
            $table->boolean('dual_sim');
            $table->boolean('fast_charge');
            $table->foreignId('color_id');
            $table->foreignId('brand_id');
            $table->foreignId('screen_id');
            $table->foreignId('ram_memory_id');
            $table->foreignId('rom_memory_id');
            $table->foreignId('battery_id');
            $table->foreignId('processor_id');
            $table->foreignId('graphic_card_id');
            $table->foreignId('operating_system_id');
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
        Schema::dropIfExists('phones');
    }
}