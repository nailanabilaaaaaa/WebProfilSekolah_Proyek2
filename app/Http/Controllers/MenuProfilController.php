<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class MenuProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = Profil::get();
        return view('menuprofil.index', compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profil = Profil::all();
        return view('menuprofil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'profil_sekolah' => 'required',
            'motto_sekolah' => 'required',
            'visi_sekolah' => 'required',
            'misi_sekolah' => 'required',
            'tujuan_sekolah' => 'required',
        ]);

        //eloquent untuk insert data mahasiswa
        Profil::create($request->all());
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('menuprofil.index')
            ->with('success', 'Profil Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $profil = Profil::find($id);
        return view('menuprofil.detail', compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $profil = Profil::find($id);
        return view('menuprofil.edit', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'profil_sekolah' => 'required',
            'motto_sekolah' => 'required',
            'visi_sekolah' => 'required',
            'misi_sekolah' => 'required',
            'tujuan_sekolah' => 'required',
        ]);

        //eloquent untuk insert data mahasiswa

        Profil::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('menuprofil.index')
            ->with('success', 'Profil Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        Profil::find($id)->delete();
        return redirect()->route('menuprofil.index')
            -> with('success', 'Profil Berhasil Dihapus');
    }
}
