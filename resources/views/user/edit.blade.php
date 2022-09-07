@extends('template.base')

@section('content')

<div class="container">
            <div class="row">
                <div class="col md-12 mt-5">
                <a href="{{url('produk')}}"><fa class="btn btn-primary">Kembali</a>
                    <div class="card mt-3">
                        <div class="card-header">
                        Edit Data User
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/produk', $user->id)}}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$user->nama}}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Username</label>
                                        <input type="text" class="form-control" name="nama" value="{{$user->username}}">
                                    </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">email</label>
                                    <input type="text" class="form-control" name="username" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">pasword</label>
                                    <input type="text" class="form-control" name="pasword">
                                </div>
                            
                            <button class="btn btn-dark float-right"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection