<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->string('alamat');
            $table->string('nohp');
            $table->date('tglmasuk');
            $table->date('tglkeluar');
            $table->decimal('total_pembayaran', 10, 2);
            $table->string('no_kamar');
            $table->string('admin');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history');
    }
};
