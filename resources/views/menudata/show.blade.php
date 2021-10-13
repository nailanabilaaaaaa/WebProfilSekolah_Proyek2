@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 100rem;">
                <div class="card-header">
                    Detail Menu Data
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Pendidikan Guru PNS: </b>{{ $data->pendidikan1 }}</li>
                        <li class="list-group-item"><b>Jumlah Guru PNS: </b>{{ $data->jumlah1 }}</li>
                        <li class="list-group-item"><b>Guru PNS Tersertifikasi: </b>{{ $data->tersertifikasi1 }}</li>

                        <li class="list-group-item"><b>Pendidikan Guru Non PNS : </b>{{ $data->pendidikan2 }}</li>
                        <li class="list-group-item"><b>Jumlah Guru Non PNS : </b>{{ $data->jumlah2 }}</li>
                        <li class="list-group-item"><b>Guru Non PNS Tersertifikasi : </b>{{ $data->tersertifikasi2 }}</li>

                        <li class="list-group-item"><b>Tahun Ajaran : </b>{{ $data->tahun }}</li>
                        <li class="list-group-item"><b>Kelas 1 : </b>{{ $data->kelas1 }}</li>
                        <li class="list-group-item"><b>Kelas 2 : </b>{{ $data->kelas2 }}</li>
                        <li class="list-group-item"><b>Kelas 3 : </b>{{ $data->kelas3 }}</li>
                        <li class="list-group-item"><b>Kelas 4 : </b>{{ $data->kelas4 }}</li>
                        <li class="list-group-item"><b>Kelas 5 : </b>{{ $data->kelas5 }}</li>
                        <li class="list-group-item"><b>Kelas 6 : </b>{{ $data->kelas6 }}</li>
                        <li class="list-group-item"><b>Jumlah Siswa : </b>{{ $data->jumlah }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('menudata.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
