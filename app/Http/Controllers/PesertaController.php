<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Jurusan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $peserta = Peserta::where('nama', 'like', "%$cari%")->Paginate(5);

        $no = 5 * ($peserta->currentPage() - 1);
        return view('peserta.index', compact('peserta', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('peserta.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|max:100|unique:peserta,nama',
            'tempat' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|unique:peserta,telepon',
            'email' => 'required|unique:peserta,email',
            'password' => 'required|min:5',
            'jurusan' => 'required',
        ]);
        Peserta::create([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat,
            'tanggal_lahir' => $request->tanggal,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'password' => $request->password,
            'jurusan_id' => $request->jurusan,
        ]);
            Alert::success("Selamat", 'data berhasil di buat');
        return redirect()->route('peserta.index');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|max:100|unique:peserta,nama',
            'tempat' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|unique:peserta,telepon',
            'email' => 'required|unique:peserta,email',
            'password' => 'required|min:5',
            'jurusan' => 'required',
        ]);
        Peserta::create([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat,
            'tanggal_lahir' => $request->tanggal,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'password' => $request->password,
            'jurusan_id' => $request->jurusan,
        ]);
        return redirect()->route('loginp');
    }

    public function login(Request $request)
    {

        $login = Peserta::where('email', '=', $request->email)->where('password', '=', $request->password)->get();
        if (count($login) > 0) {
            session_start();
            $_SESSION['id'] = $login[0];
             return redirect()->route('home');
        } else {
            Alert::warning('Maaf', 'email atau password salah');
            return redirect()->route('loginp');
        }
    }

    public function logout(Request $request)
    {
        session_start();
        unset($_SESSION['id']);
session_destroy();
 return redirect()->route('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jurusan = Jurusan::all();
        $peserta = Peserta::findOrFail($id);
        return view('peserta.edit', compact('peserta', 'jurusan'));
         // $gambar = $request->gambar;
        // $namaFile = time() . rand(100, 999) . '.' . $gambar->getClientOriginalExtension();
        // $gambar->move(public_path() . '/upload', $namaFile);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $peserta = Peserta::findOrFail($id);
        $request->validate([
            'nama' => 'required|min:3|max:100',
            'tempat' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'password' => 'required|min:5',
            'jurusan' => 'required',
        ]);
        $peserta->update([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat,
            'tanggal_lahir' => $request->tanggal,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'password' => $request->password,
            'jurusan_id' => $request->jurusan,
        ]);
            Alert::success("Selamat", 'data berhasil di update');
        return redirect()->route('peserta.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $peserta = Peserta::findOrFail($id);
        $peserta->delete();
            Alert::success("Selamat", 'data berhasil di hapus');

        return redirect()->route('peserta.index');
    }
}
