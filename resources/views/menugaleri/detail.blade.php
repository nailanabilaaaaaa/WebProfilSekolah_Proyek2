@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Detail Menu Galeri
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Dokumentasi Halaman Sekolah  : </b>
                    <br><img src="{{asset('storage/' . $galeri->image1)}}" width="100px"></li>
                    <li class="list-group-item"><b>Keterangan 1 : </b>{{$galeri->content1}}</li>
                    <li class="list-group-item"><b>Dokumentasi Kegiatan Outing Class : </b>
                    <br><img src="{{asset('storage/' . $galeri->image2)}}" width="100px"></li>
                    <li class="list-group-item"><b>Keterangan 2 </b>{{$galeri->content2}}</li>
                    <li class="list-group-item"><b>Dokumentasi Kegiatan Sekolah : </b>
                    <br><img src="{{asset('storage/' . $galeri->image3)}}" width="100px"></li>
                    <li class="list-group-item"><b>Keterangan 3 : </b>{{$galeri->content3}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('menugaleri.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection