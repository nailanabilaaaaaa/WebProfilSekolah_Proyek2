@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Detail Menu Profil
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Profil Sekolah : </b>{{$profil->profil_sekolah}}</li>
                    <li class="list-group-item"><b>Motto Sekolah : </b>{{$profil->motto_sekolah}}</li>
                    <li class="list-group-item"><b>Visi Sekolah : </b>{{$profil->visi_sekolah}}</li>
                    <li class="list-group-item"><b>Misi Sekolah : </b>{{$profil->misi_sekolah}}</li>
                    <li class="list-group-item"><b>Tujuan Sekolah : </b>{{$profil->tujuan_sekolah}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('menuprofil.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection