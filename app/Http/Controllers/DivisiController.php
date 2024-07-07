<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_divisi = Divisi::all();
        return view('admin.divisi.index', compact('list_divisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisis = Divisi::all();
        return view('admin.divisi.create', compact('divisis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'kode' => 'required|string',
            'name' => 'required|string',
            'manager' => 'required|string',
        ]);

        Divisi::create($validated);
        return redirect('dashboard/divisi')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { {
            $divisi = Divisi::find($id);
            return view('admin.divisi.show', compact('divisi'));
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $divisi = Divisi::find($id);
        return view('admin.divisi.edit', compact('divisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode' => 'required|string',
            'name' => 'required|string',
            'manager' => 'required|string'
        ]);

        $divisi = Divisi::find($id);
        $divisi->update($validated);
        return redirect('dashboard/divisi')->with('update', 'Data Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $divisi = Divisi::find($id);
        $divisi->delete();

        return redirect('dashboard/divisi')->with('delete', 'Data Berhasil di Hapus');
    }
}
