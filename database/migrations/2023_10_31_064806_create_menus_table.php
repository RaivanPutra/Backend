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
        Schema::create('menu', function (Blueprint $table) {
            $table->id('menu_id');
            $table->string('nama_menu', 255);
            $table->double('harga');
            $table->text('deskripsi');
            $table->unsignedBigInteger('jenis_id');
            $table->foreign('jenis_id')->references('kategori_id')->on('kategori_makanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
