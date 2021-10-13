@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Edit Menu Berita
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
            <form method="post" action="{{ route('menuberita.update', $berita->id) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="title">Judul Berita</label>
                    <input type="title" name="title" class="form-control" id="title" value="{{ $berita->title }}" aria-describedby="title" ></input>
                </div>
                <div class="form-group">
                    <label for="content">Konten Berita</label>
                    <textarea type="content" name="content" class="form-control" id="content" value="{{ $berita->content }}" aria-describedby="content" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary float-right">Update Berita</button>
            </form>
            </div>
            <a class="btn btn-success" href="{{ route('menuberita.index') }}">Kembali</a> 
        </div>
    </div>
</div>
@endsection
