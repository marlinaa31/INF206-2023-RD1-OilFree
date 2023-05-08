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
        Schema::create('order_deliverymen', function (Blueprint $table) {
            $table->id()->unique;
            $table->timestamps();
            $table->string('nama');
            $table->string('no_hp');
            $table->float('berat_minyak');
            $table->string('foto_minyak');
            $table->string('alamat');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_deliverymen');
    }
};
