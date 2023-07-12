<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mark',125);
            $table->string('model',125);
            $table->string('serial',125);
            $table->string('size_disk',125);
            $table->string('type_disk',125);
            $table->string('ram',125);
            $table->string('processor',125);
            $table->string('system',125);
            $table->integer('usb_ports');
            $table->integer('audio_ports');
            $table->integer('microphone_ports');
            $table->integer('hdmi_ports');
            $table->integer('vga_ports');
            $table->integer('dvi_ports');
            $table->integer('sd_ports');
            $table->integer('cd_ports');
            $table->integer('ps2_ports');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');
    }
};
