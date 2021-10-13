@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>SD NEGERI 1 BARENG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('menuprogram.create') }}"> Tambah Program</a>
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
        <th>No</th>
        <th>Kegiatan Setiap Hari</th>
        <th>No</th>
        <th>Kegiatan Seminggu Sekali</th>
        <th>No</th>
        <th>Kegiatan Lainnya</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($program as $program)
        <tr>
            <td>{{ $program->no1 }}</td>
            <td>{{ $program->kegiatan1 }}</td>
            <td>{{ $program->no2 }}</td>
            <td>{{ $program->kegiatan2 }}</td>
            <td>{{ $program->no3 }}</td>
            <td>{{ $program->lainnya }}</td>
            <td>
                <form action="{{ route('menuprogram.destroy', $program->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('menuprogram.show', $program->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('menuprogram.edit', $program->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
