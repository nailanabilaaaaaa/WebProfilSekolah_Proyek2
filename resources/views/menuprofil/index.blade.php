@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Menu Profil</h2>
                <div class="float-right my-2">
                    <a class="btn btn-success" href="{{ route('menuprofil.create') }}"> Input Menu Profil</a>
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
            <th>Profil Sekolah</th>
            <th>Motto Sekolah</th>
            <th>Visi Sekolah</th>
            <th>Misi Sekolah</th>
            <th>Tujuan Sekolah</th>
            <th width="280px">ACTION</th>
        </tr>
        @foreach ($profil as $data)
        <tr>
            <td>{{ $data->profil_sekolah }}</td>
            <td>{{ $data->motto_sekolah }}</td>
            <td>{{ $data->visi_sekolah }}</td>
            <td>{{ $data->misi_sekolah }}</td>
            <td>{{ $data->tujuan_sekolah }}</td>
            <td>
                <form action="{{ route('menuprofil.destroy',$data->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('menuprofil.show',$data->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('menuprofil.edit',$data->id) }}">Edit</a>
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection