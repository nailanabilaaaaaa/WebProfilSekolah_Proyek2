<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class MenuDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::get();
        return view('menudata.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Data::all();
        return view('menudata.create');
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
            'pendidikan1' => 'required',
            'jumlah1' => 'required',
            'tersertifikasi1' => 'required',
            'pendidikan2' => 'required',
            'jumlah2' => 'required',
            'tersertifikasi2' => 'required',
            'tahun' => 'required',
            'kelas1' => 'required',
            'kelas2' => 'required',
            'kelas3' => 'required',
            'kelas4' => 'required',
            'kelas5' => 'required',
            'kelas6' => 'required',
            'jumlah' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Data::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('menudata.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Data::find($id);
        return view('menudata.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Data::find($id);
        return view('menudata.edit', compact('data'));
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
            'pendidikan1' => 'required',
            'jumlah1' => 'required',
            'tersertifikasi1' => 'required',
            'pendidikan2' => 'required',
            'jumlah2' => 'required',
            'tersertifikasi2' => 'required',
            'tahun' => 'required',
            'kelas1' => 'required',
            'kelas2' => 'required',
            'kelas3' => 'required',
            'kelas4' => 'required',
            'kelas5' => 'required',
            'kelas6' => 'required',
            'jumlah' => 'required',
        ]);

        Data::find($id)->update($request->all());

        return redirect()->route('menudata.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Data::find($id)->delete();
        return redirect()->route('menudata.index')->with('success', 'Data Berhasil Dihapus');
    }
}
