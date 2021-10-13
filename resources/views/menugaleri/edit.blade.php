@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Edit Menu Galeri
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('menugaleri.update', $galeri->id) }}" id="myForm" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="image1">Dokumentasi Halaman Sekolah</label>
                    <input type="file" name="image1" class="form-control" id="image1" aria-describedby="image1" value="{{$galeri->image1}}" >
                    <img src="{{asset('storage/' . $galeri->image1)}}" width="100px">
                </div>
                <div class="form-group">
                    <label for="content1">Keterangan 1</label>
                    <input type="content1" name="content1" class="form-control" id="content1" aria-describedby="content1" value="{{$galeri->content1}}"></input>
                </div>
                <div class="form-group">
                    <label for="image2">Dokumentasi Kegiatan Outing Class</label>
                    <input type="file" name="image2" class="form-control" id="image2" aria-describedby="image2" value="{{$galeri->image2}}" >
                    <img src="{{asset('storage/' . $galeri->image2)}}" width="100px">
                </div>
                <div class="form-group">
                    <label for="content2">Keterangan 2</label>
                    <input type="content2" name="content2" class="form-control" id="content2" aria-describedby="content2" value="{{$galeri->content2}}"></input>
                </div>
                <div class="form-group">
                    <label for="image3">Dokumentasi Kegiatan Sekolah</label>
                    <input type="file" name="image3" class="form-control" id="image3" aria-describedby="image3" value="{{$galeri->image3}}" >
                    <img src="{{asset('storage/' . $galeri->image3)}}" width="100px">
                </div>
                <div class="form-group">
                    <label for="content3">Keterangan 3</label>
                    <input type="content3" name="content3" class="form-control" id="content3" aria-describedby="content3" value="{{$galeri->content3}}"></input>
                </div>
                <button type="submit" class="btn btn-primary float-right">Update Profil Sekolah</button> 
            </form>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('menugaleri.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection