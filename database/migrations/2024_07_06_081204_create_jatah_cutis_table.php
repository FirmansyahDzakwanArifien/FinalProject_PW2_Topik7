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
        Schema::create('jatah_cutis', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->integer('jumlah');
            $table->string('nip'); // Ubah tipe data menjadi string
            $table->foreign('nip')->references('nip')->on('pegawais')->onDelete('cascade'); // Definisikan foreign key dengan tipe data yang cocok
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jatah_cutis');
    }
};
