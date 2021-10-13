@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 100rem;">
                <div class="card-header">
                    Tambah Berita
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your i
                            nput.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('menuberita.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" name="title" class="form-control" id="title" aria-describedby="title"></input>
                        </div>
                        <div class="form-group">
                            <label for="content">Isi Konten</label>
                            <textarea type="content" name="content" class="form-control" id="content" aria-describedby="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
                <a class="btn btn-success" href="{{ route('menuberita.index') }}">Kembali</a>  
            </div>
        </div>
    </div>
@endsection
