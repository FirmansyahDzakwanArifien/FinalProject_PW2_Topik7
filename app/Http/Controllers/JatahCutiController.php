<?php

namespace App\Http\Controllers;

use App\Models\JatahCuti;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class JatahCutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_jatah = JatahCuti::all();
        return view('admin.jatah_cuti.index', compact('list_jatah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jatah_cutis = Pegawai::all();
        return view('admin.jatah_cuti.create', compact('jatah_cutis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'tahun' => 'required|integer',
            'jumlah' => 'required|integer',
            'nip' => 'required|string',
        ]);

        JatahCuti::create($validated);
        return redirect('dashboard/jatah_cuti')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { {
            $jatah_cuti = JatahCuti::find($id);
            return view('admin.jatah_cuti.show', compact('jatah_cuti'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jatah_cuti = JatahCuti::find($id);
        $pegawais = Pegawai::all();
        return view('admin.jatah_cuti.edit', compact('jatah_cuti', 'pegawais'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'tahun' => 'required|integer',
            'jumlah' => 'required|integer',
            'nip' => 'required|string',
        ]);

        $jatah_cuti = JatahCuti::find($id);
        $jatah_cuti->update($validated);
        return redirect('dashboard/jatah_cuti')->with('update', 'Data Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jatah_cuti = JatahCuti::find($id);
        $jatah_cuti->delete();

        return redirect('dashboard/jatah_cuti')->with('delete', 'Data Berhasil di Hapus');
    }
}
