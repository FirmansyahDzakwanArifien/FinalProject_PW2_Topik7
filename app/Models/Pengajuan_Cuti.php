<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan_Cuti extends Model
{
    use HasFactory;
    protected $table = 'pengajuan_cutis';
    protected $fillable = ['tgl_awal', 'tgl_akhir', 'jumlah', 'ket', 'status', 'nip'];
}
