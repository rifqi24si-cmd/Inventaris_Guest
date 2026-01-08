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
        Schema::create('aset', function (Blueprint $table) {
            $table->id('aset_id'); // Primary Key

            // Foreign Key ke tabel kategori_aset
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')
                ->references('kategori_id')
                ->on('kategori_aset')
                ->onDelete('cascade'); // Jika kategori dihapus, aset terkait ikut terhapus

            $table->string('kode_aset')->unique(); // Unique (UNQ)
            $table->string('nama_aset');
            $table->date('tgl_perolehan');
            $table->decimal('nilai_perolehan', 15, 2); // Decimal sesuai gambar
            $table->string('kondisi'); // Contoh: Baik, Rusak Ringan, Rusak Berat

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aset');
    }
};
