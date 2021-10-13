<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class MenuGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::get();
        return view('menugaleri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galeri = Galeri::all();
        return view('menugaleri.create');
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
            'image1' => 'required',
            'content1' => 'required',
            'image2' => 'required',
            'content2' => 'required',
            'image3' => 'required',
            'content3' => 'required',
        ]);

        //eloquent untuk insert data mahasiswa
        $galeri = new Galeri();
        $galeri->content1 = $request->get('content1');
        $galeri->content2 = $request->get('content2');
        $galeri->content3 = $request->get('content3');

        //Menyimpan gambar
        if($request->file('image1')){
            $filename = $request->file('image1')->store('img/profil', 'public');
            $galeri->image1 = $filename;
        }
        if($request->file('image2')){
            $filename = $request->file('image2')->store('img/profil', 'public');
            $galeri->image2 = $filename;
        }
        if($request->file('image3')){
            $filename = $request->file('image3')->store('img/profil', 'public');
            $galeri->image3 = $filename;
        }
        $galeri->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('menugaleri.index')
            ->with('success', 'Galeri Berhasil Ditambahkan');
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
        $galeri = Galeri::find($id);
        return view('menugaleri.detail', compact('galeri'));
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
        $galeri = Galeri::find($id);
        return view('menugaleri.edit', compact('galeri'));
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
            'image1' => 'required',
            'content1' => 'required',
            'image2' => 'required',
            'content2' => 'required',
            'image3' => 'required',
            'content3' => 'required',
        ]);

        //eloquent untuk insert data mahasiswa
        $galeri = Galeri::find($id);
        $galeri->content1 = $request->get('content1');
        $galeri->content2 = $request->get('content2');
        $galeri->content3 = $request->get('content3');
        

        //Menghapus gambar profil yang sama
        if($galeri->image1 && file_exists(storage_path('app/public' . $galeri->image1))){
            \Storage::delete('public/' . $galeri->image1);
        }
        if($galeri->image2 && file_exists(storage_path('app/public' . $galeri->image2))){
            \Storage::delete('public/' . $galeri->image2);
        }
        if($galeri->image3 && file_exists(storage_path('app/public' . $galeri->image3))){
            \Storage::delete('public/' . $galeri->image3);
        }
        
        //Menyimpan gambar
        if($request->file('image1')){
            $filename = $request->file('image1')->store('img/profil', 'public');
            $galeri->image1 = $filename;
        }
        if($request->file('image2')){
            $filename = $request->file('image2')->store('img/profil', 'public');
            $galeri->image2 = $filename;
        }
        if($request->file('image3')){
            $filename = $request->file('image3')->store('img/profil', 'public');
            $galeri->image3 = $filename;
        }
        $galeri->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('menugaleri.index')
            ->with('success', 'Galeri Berhasil Diupdate');
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
        Galeri::find($id)->delete();
        return redirect()->route('menugaleri.index')
            -> with('success', 'Galeri Berhasil Dihapus');
    }
}
