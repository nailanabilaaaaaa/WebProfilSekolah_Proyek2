@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">Tambah Menu Profil</div>
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
            <form method="post" action="{{ route('menuprofil.store') }}" id="myForm" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="profil_sekolah">Profil Sekolah</label>
                    <textarea type="profil_sekolah" name="profil_sekolah" class="form-control" id="profil_sekolah" aria-describedby="profil_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="motto_sekolah">Motto Sekolah</label>
                    <textarea type="motto_sekolah" name="motto_sekolah" class="form-control" id="motto_sekolah" aria-describedby="motto_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="visi_sekolah">Visi Sekolah</label>
                    <textarea type="visi_sekolah" name="visi_sekolah" class="form-control" id="visi_sekolah" aria-describedby="visi_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="misi_sekolah">Misi Sekolah</label>
                    <textarea type="misi_sekolah" name="misi_sekolah" class="form-control" id="misi_sekolah" aria-describedby="misi_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="tujuan_sekolah">Tujuan Sekolah</label>
                    <textarea type="tujuan_sekolah" name="tujuan_sekolah" class="form-control" id="tujuan_sekolah" aria-describedby="tujuan_sekolah" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
            </div>
            <a class="btn btn-success" href="{{ route('menuprofil.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection