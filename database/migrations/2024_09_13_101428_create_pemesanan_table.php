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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan', 50);
            $table->string('alamat', 50);
            $table->string('nohp', 50);
            $table->date('tglmasuk');
            $table->date('tglkeluar');
            $table->string('total_pembayaran', 50);
            $table->string('no_kamar', 50);
            $table->string('admin', 50);


        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
