<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan_Cuti;
use App\Models\Pegawai;

class PengajuaCutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pengajuan = Pengajuan_Cuti::all();
        return view('admin.pengajuan_cuti.index', compact('list_pengajuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengajuan_cuti = Pegawai::all();
        return view('admin.pengajuan_cuti.create', compact('pengajuan_cuti'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'tgl_awal' => 'required|date',
            'tgl_akhir' => 'required|date',
            'jumlah' => 'required|string',
            'ket' => 'required|string',
            'status' => 'required|in:Disetujui,Tidak Disetujui,Lupakan',
            'nip' => 'required|string',
        ]);

        Pengajuan_Cuti::create($validated);
        return redirect('dashboard/pengajuan_cuti')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { {
            $pengajuan_cuti = Pengajuan_Cuti::find($id);
            return view('admin.pengajuan_cuti.show', compact('pengajuan_cuti'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengajuan_cuti = Pengajuan_Cuti::find($id);
        $pegawais = Pegawai::all();
        $pengajuan = Pengajuan_Cuti::all();
        return view('admin.pengajuan_cuti.edit', compact('pengajuan_cuti', 'pegawais', 'pengajuan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { {
            $validated = $request->validate([
                'tgl_awal' => 'required|date',
                'tgl_akhir' => 'required|date',
                'jumlah' => 'required|string',
                'ket' => 'required|string',
                'status' => 'required|in:Disetujui,Tidak Disetujui,Lupakan',
                'nip' => 'required|string',
            ]);

            $pengajuan_cuti = Pengajuan_Cuti::find($id);
            $pengajuan_cuti->update($validated);
            return redirect('dashboard/pengajuan_cuti')->with('update', 'Data Berhasil di Perbarui');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengajuan_cuti = Pengajuan_Cuti::find($id);
        $pengajuan_cuti->delete();

        return redirect('dashboard/pengajuan_cuti')->with('delete', 'Data Berhasil di Hapus');
    }
}
