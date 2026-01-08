<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mutasi_aset', function (Blueprint $table) {
            $table->id('mutasi_id'); // PK
            $table->unsignedBigInteger('aset_id'); // FK
            $table->date('tanggal'); //
            $table->string('jenis_mutasi'); //
            $table->text('keterangan')->nullable(); //
            $table->timestamps();

            // Relasi ke tabel aset
            $table->foreign('aset_id')->references('aset_id')->on('aset')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mutasi_aset');
    }
};
