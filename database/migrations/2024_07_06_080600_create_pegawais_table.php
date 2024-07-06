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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->string('nip')->primary();
            $table->enum('gender', ['Laki-Laki','Perempuan']);
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('telpon');
            $table->text('alamat');
            $table->unsignedBigInteger('divisi_id'); // Ubah tipe data menjadi unsignedBigInteger
            $table->foreign('divisi_id')->references('id')->on('divisis')->onDelete('cascade'); // Gunakan metode foreign
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
