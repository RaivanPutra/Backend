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
        Schema::create('detail_tranksaksi', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')->references('menu_id')->on('menu');
            $table->integer('jumlah');
            $table->double('subtotal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_tranksaksi');
    }
};
