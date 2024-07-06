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
        Schema::create('pengajuan_cutis', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->integer('jumlah');
            $table->text('ket');
            $table->enum('status', ['Disetujui','Tidak Disetujui']);
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
        Schema::dropIfExists('pengajuan_cutis');
    }
};
