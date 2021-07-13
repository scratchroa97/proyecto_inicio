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
            $table->text('fotos');
            $table->integer('precio');
            $table->boolean('sd_slot');
            $table->boolean('dual_sim');
            $table->boolean('fast_charge');
            $table->foreignId('id_color');
            $table->foreignId('id_brand');
            $table->foreignId('id_screen');
            $table->foreignId('id_ram_memory');
            $table->foreignId('id_rom_memory');
            $table->foreignId('id_battery');
            $table->foreignId('id_processor');
            $table->foreignId('id_graphic');
            $table->foreignId('id_operating_system');
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