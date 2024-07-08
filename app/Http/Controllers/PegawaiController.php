<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Divisi;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pegawai = Pegawai::all();
        return view('admin.pegawai.index', compact('list_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pegawais = Divisi::all();
        return view('admin.pegawai.create', compact('pegawais'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'nip' => 'required|string',
            'nama' => 'required|string',
            'gender' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'telpon' => 'required|string',
            'alamat' => 'required|string',
            'divisi_id' => 'required|string',
        ]);

        Pegawai::create($validated);
        return redirect('dashboard/pegawai')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { {
            $pegawai = Pegawai::where('nip', $id)->first();
            return view('admin.pegawai.show', compact('pegawai'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pegawai = Pegawai::where('nip', $id)->first();
        $divisis = Divisi::all();
        return view('admin.pegawai.edit', compact('pegawai', 'divisis'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nip' => 'required|string',
            'nama' => 'required|string',
            'gender' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'telpon' => 'required|string',
            'alamat' => 'required|string',
            'divisi_id' => 'required|string',
        ]);

        $pegawai = Pegawai::where('nip', $id)->first();
        $pegawai->update($validated);
        return redirect('dashboard/pegawai')->with('update', 'Data Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::where('nip', $id)->first();
        $pegawai->delete();

        return redirect('dashboard/pegawai')->with('delete', 'Data Berhasil di Hapus');
    }
}