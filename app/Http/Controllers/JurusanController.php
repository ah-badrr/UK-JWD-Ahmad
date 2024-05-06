<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jurusan = Jurusan::where('nama', 'like', "%$cari%")->Paginate(5);

        $no = 5 * ($jurusan->currentPage() - 1);
        return view('jurusan.index', compact('jurusan', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|unique:jurusan,nama',
            'deskripsi' => 'required|min:3',
        ]);
        Jurusan::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);
            Alert::success("Selamat", 'data berhasil di buat');

        return redirect()->route('jurusan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jurusan $jurusan)
    {
        return view('jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jurusan $jurusan)
    {
        if ($request->nama != $jurusan->nama) {
            $request->validate([
                'nama' => 'required|min:3|max:100|unique:jurusan,nama',
            'deskripsi' => 'required|min:3',
            ]);
            Alert::success('Selamat', 'data berhasil diupdate');
        } else {
            $request->validate([
                'nama' => 'required|min:4|max:100',
                  'deskripsi' => 'required|min:3',
            ]);
             Alert::success('Selamat', 'data berhasil diupdate');
        }
        $jurusan->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('jurusan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jurusan $jurusan)
    {
        if ($jurusan->peserta->count() != 0) {
            Alert::warning("Maaf", 'hapus data peserta yang terkait dengan jurusan ini');
        } else {
            $jurusan->delete();
            Alert::success("Selamat", 'data berhasil di hapus');
        }

        return redirect()->route('jurusan.index');
    }
}
