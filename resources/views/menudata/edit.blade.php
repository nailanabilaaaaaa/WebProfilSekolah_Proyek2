@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Edit Menu Data
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
            <form method="post" action="{{ route('menudata.update', $data->id) }}" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="pendidikan1">Pendidikan Guru PNS</label>
                <input type="text" name="pendidikan1" class="form-control" id="pendidikan1" value="{{ $data->pendidikan1 }}" aria-describedby="pendidikan1">
            </div>
            <div class="form-group">
                <label for="jumlah1">Jumlah Guru PNS</label>
                <input type="text" name="jumlah1" class="form-control" id="jumlah1" value="{{ $data->jumlah1 }}" aria-describedby="jumlah1">
            </div>
            <div class="form-group">
                <label for="tersertifikasi1">Guru PNS Tersertifikasi</label>
                <input type="text" name="tersertifikasi1" class="form-control" id="tersertifikasi1" value="{{ $data->tersertifikasi1 }}" aria-describedby="tersertifikasi1">
            </div>
			
			<div class="form-group">
                <label for="pendidikan2">Pendidikan Guru Non PNS</label>
                <input type="text" name="pendidikan2" class="form-control" id="pendidikan2" value="{{ $data->pendidikan2 }}" aria-describedby="pendidikan2">
            </div>
            <div class="form-group">
                <label for="jumlah2">Jumlah Guru Non PNS</label>
                <input type="text" name="jumlah2" class="form-control" id="jumlah2" value="{{ $data->jumlah2 }}" aria-describedby="jumlah2">
            </div>
            <div class="form-group">
                <label for="tersertifikasi2">Guru Non PNS Tersertifikasi</label>
                <input type="text" name="tersertifikasi2" class="form-control" id="tersertifikasi2" value="{{ $data->tersertifikasi2 }}" aria-describedby="tersertifikasi2">
            </div>
			
			<div class="form-group">
				<label for="tahun">Tahun Pelajaran</label>
				<input type="text" name="tahun" class="form-control" id="tahun" value="{{ $data->tahun }}" aria-describedby="tahun">
			</div>
            <div class="form-group">
                <label for="kelas1">Kelas 1</label>
                <input type="text" name="kelas1" class="form-control" id="kelas1" value="{{ $data->kelas1 }}" aria-describedby="kelas1">
			</div>
            <div class="form-group">
                <label for="kelas2">Kelas 2</label>
                <input type="text" name="kelas2" class="form-control" id="kelas2" value="{{ $data->kelas2 }}" aria-describedby="kelas2">
            </div>
            <div class="form-group">
                <label for="kelas3">Kelas 3</label>
                <input type="text" name="kelas3" class="form-control" id="kelas3" value="{{ $data->kelas3 }}" aria-describedby="kelas3">
            </div>
            <div class="form-group">
                <label for="kelas4">Kelas 4</label>
                <input type="text" name="kelas4" class="form-control" id="kelas4" value="{{ $data->kelas4 }}" aria-describedby="kelas4">
            </div>
            <div class="form-group">
                <label for="kelas5">Kelas 5</label>
                <input type="text" name="kelas5" class="form-control" id="kelas5" value="{{ $data->kelas5 }}" aria-describedby="kelas5">
            </div>
            <div class="form-group">
                <label for="kelas6">Kelas 6</label>
                <input type="text" name="kelas6" class="form-control" id="kelas6" value="{{ $data->kelas6 }}" aria-describedby="kelas6">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah Siswa</label>
                <input type="text" name="jumlah" class="form-control" id="jumlah" value="{{ $data->jumlah }}" aria-describedby="jumlah">
            </div>
			
                <button type="submit" class="btn btn-primary float-right">Update Data</button>
            </form>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('menudata.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
