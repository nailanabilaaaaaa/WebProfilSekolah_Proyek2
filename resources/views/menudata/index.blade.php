@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Menu Data</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('menudata.create') }}"> Tambah Menu Data</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
    <tr>
        <th>Pendidikan Guru PNS</th>
        <th>Jumlah PNS</th>
        <th>PNS Tersertifikasi</th>
        <th>Pendidikan Guru Non PNS</th>
        <th>Jumlah Non PNS</th>
        <th>Non PNS Tersertifikasi</th>
        <th>Tahun</th>
        <th>Kelas 1</th>
        <th>Kelas 2</th>
        <th>Kelas 3</th>
        <th>Kelas 4</th>
        <th>Kelas 5</th>
        <th>Kelas 6</th>
        <th>Jumlah Siswa</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($data as $data)
        <tr>
            <td>{{ $data->pendidikan1 }}</td>
            <td>{{ $data->jumlah1 }}</td>
            <td>{{ $data->tersertifikasi1}}</td>
            <td>{{ $data->pendidikan2 }}</td>
            <td>{{ $data->jumlah2 }}</td>
            <td>{{ $data->tersertifikasi2}}</td>
            <td>{{ $data->tahun }}</td>
            <td>{{ $data->kelas1 }}</td>
            <td>{{ $data->kelas2 }}</td>
            <td>{{ $data->kelas3 }}</td>
            <td>{{ $data->kelas4 }}</td>
            <td>{{ $data->kelas5 }}</td>
            <td>{{ $data->kelas6 }}</td>
            <td>{{ $data->jumlah }}</td>
            <td>
                <form action="{{ route('menudata.destroy', $data->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('menudata.show', $data->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('menudata.edit', $data->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
