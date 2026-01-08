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
        Schema::create('lokasi_aset', function (Blueprint $table) {
            $table->id('lokasi_id'); // Primary Key

            // Foreign Key ke tabel aset
            $table->unsignedBigInteger('aset_id'); //
            $table->foreign('aset_id')
                ->references('aset_id')
                ->on('aset')
                ->onDelete('cascade');

            $table->string('keterangan')->nullable(); //
            $table->text('lokasi_text'); //
            $table->string('rt', 5); //
            $table->string('rw', 5); //

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokasi_aset');
    }
};
