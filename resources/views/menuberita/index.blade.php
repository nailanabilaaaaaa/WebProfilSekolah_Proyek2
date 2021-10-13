@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Menu Berita</h2>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('menuberita.create') }}"> Input Menu Berita</a>
            </div>
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
        <th>Judul</th>
        <th>Konten</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($berita as $berita)
        <tr>
            <td>{{ $berita->title }}</td>
            <td>{{ $berita->content }}</td>
            <td>
                <form action="{{ route('menuberita.destroy', $berita->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('menuberita.show', $berita->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('menuberita.edit', $berita->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button> 
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection
