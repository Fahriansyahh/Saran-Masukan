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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('transaksi_id');
            $table->unsignedBigInteger('pengirim_id');
            $table->foreign('pengirim_id')->references('pengirim_id')->on('pengirims')->onDelete('cascade');
            $table->foreignId('metode_id')->constrained('metode_pembayarans')->onDelete('restrict');
            $table->decimal('total_pembayaran', 12, 2);
            $table->dateTime('tanggal_transaksi');
            $table->enum('status_pembayaran', ['pending', 'sukses', 'gagal'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
