@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Edit Menu Profil
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
            <form method="post" action="{{ route('menuprofil.update', $profil->id) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="profil_sekolah">Profil Sekolah</label>
                    <textarea type="profil_sekolah" name="profil_sekolah" class="form-control" id="profil_sekolah" value="{{ $profil->profil_sekolah }}" ariadescribedby="profil_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="motto_sekolah">Motto Sekolah</label>
                    <textarea type="motto_sekolah" name="motto_sekolah" class="form-control" id="motto_sekolah" value="{{ $profil->motto_sekolah }}" ariadescribedby="motto_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="visi_sekolah">Visi Sekolah</label>
                    <textarea type="visi_sekolah" name="visi_sekolah" class="form-control" id="visi_sekolah" value="{{ $profil->visi_sekolah }}" ariadescribedby="visi_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="misi_sekolah">Misi Sekolah</label>
                    <textarea type="misi_sekolah" name="misi_sekolah" class="form-control" id="misi_sekolah" value="{{ $profil->misi_sekolah }}" ariadescribedby="misi_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="tujuan_sekolah">Tujuan Sekolah</label>
                    <textarea type="tujuan_sekolah" name="tujuan_sekolah" class="form-control" id="tujuan_sekolah" value="{{ $profil->tujuan_sekolah }}" ariadescribedby="tujuan_sekolah" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary float-right">Update Profil Sekolah</button> 
            </form>
            </div>
            <a class="btn btn-success" href="{{ route('menuprofil.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection