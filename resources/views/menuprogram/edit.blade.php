@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Edit Data Guru
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
            <form method="post" action="{{ route('menuprogram.update', $program->id) }}" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="no1">No</label>
                <input type="text" name="no1" class="form-control" id="no1" value="{{ $program->no1 }}" aria-describedby="no1">
            </div>
            <div class="form-group">
                <label for="kegiatan1">Kegiatan Setiap Hari</label>
                <input type="text" name="kegiatan1" class="form-control" id="kegiatan1" value="{{ $program->kegiatan1 }}" aria-describedby="kegiatan1">
            </div>
			<div class="form-group">
                <label for="no2">No</label>
                <input type="text" name="no2" class="form-control" id="no2" value="{{ $program->no2 }}" aria-describedby="no2">
            </div>
            <div class="form-group">
                <label for="kegiatan2">Kegiatan Seminggu Sekali</label>
                <input type="text" name="kegiatan2" class="form-control" id="kegiatan2" value="{{ $program->kegiatan2 }}" aria-describedby="kegiatan2">
            </div>
			<div class="form-group">
                <label for="no3">No</label>
                <input type="text" name="no3" class="form-control" id="no3" value="{{ $program->no3 }}" aria-describedby="no3">
            </div>
            <div class="form-group">
                <label for="lainnya">Kegiatan Lainnya</label>
                <input type="text" name="lainnya" class="form-control" id="lainnya" value="{{ $program->lainnya }}" aria-describedby="lainnya">
            </div>
                <button type="submit" class="btn btn-primary float-right">Update Data</button>
            </form>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('menuprogram.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
