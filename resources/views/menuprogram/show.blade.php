@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 100rem;">
                <div class="card-header">
                    Detail Data
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>No : </b>{{ $program->no1 }}</li>
                        <li class="list-group-item"><b>Kegiata Setiap Hari : </b>{{ $program->kegiatan1 }}</li>
                        <li class="list-group-item"><b>No : </b>{{ $program->no2 }}</li>
                        <li class="list-group-item"><b>Kegiata Seminggu Sekali : </b>{{ $program->kegiatan2 }}</li>
						<li class="list-group-item"><b>No : </b>{{ $program->no3 }}</li>
                        <li class="list-group-item"><b>Kegiata Lainnya : </b>{{ $program->lainnya }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('menuprogram.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
