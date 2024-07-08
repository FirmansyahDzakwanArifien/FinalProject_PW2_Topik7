<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $fillable = ['nip', 'nama', 'gender', 'tmp_lahir', 'tgl_lahir', 'telpon', 'alamat', 'divisi_id'];
}
