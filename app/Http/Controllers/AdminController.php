<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Divisi;
use App\Models\JatahCuti;
use App\Models\Pengajuan_Cuti;

class AdminController extends Controller
{
    public function index(){
        
        $pegawaiCount = Pegawai::count();
        $divisiCount = Divisi::count();
        $jatahcutiCount = JatahCuti::count();
        $pengajuan_cutiCount = Pengajuan_Cuti::count();
        return view('admin.index', compact('pegawaiCount', 'divisiCount', 'jatahcutiCount', 'pengajuan_cutiCount'));

    }
}
