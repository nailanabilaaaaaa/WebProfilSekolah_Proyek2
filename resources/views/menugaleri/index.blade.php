@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Menu Galeri</h2>
                <div class="float-right my-2">
                    <a class="btn btn-success" href="{{ route('menugaleri.create') }}"> Input Menu Galeri</a>
                </div>
            </div>
        </div>
    </div>
    
    <table class="table table-bordered">
        <tr>
            <th>Dokumentasi Halaman Sekolah</th>
            <th>Keterangan 1</th>
            <th>Dokumentasi Kegiatan Outing Class</th>
            <th>Keterangan 2</th>
            <th>Dokumentasi Kegiatan Sekolah</th>
            <th>Keterangan 3</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($galeri as $data)
        <tr>
            <td><img width="150px" src="{{asset('storage/'.$data->image1)}}"></td>
            <td>{{ $data->content1 }}</td>
            <td><img width="150px" src="{{asset('storage/'.$data->image2)}}"></td>
            <td>{{ $data->content2 }}</td>
            <td><img width="150px" src="{{asset('storage/'.$data->image3)}}"></td>
            <td>{{ $data->content3 }}</td>
            <td>
                <form action="{{ route('menugaleri.destroy',$data->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('menugaleri.show',$data->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('menugaleri.edit',$data->id) }}">Edit</a>
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection