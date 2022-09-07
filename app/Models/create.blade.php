@extends('template.base')

@section('content')
    <div class="container">
</div class="row">
<div class="col-md-12 mt-5">
    <div class="card-header">
        tambah data produk
</div>
<div class="card-bdoy">
    <div class="form-group">
        <label for="" class="control-label">nama</label>
        <input type="text" class="form-control" name="nama">
        </div class="row no-gutters">
        <div class="col-md-6"> 
</div>
<div class="card-bdoy">
    <form action="{{url('produk')}}" method ="post">
        @csrf
    <div class="form-group">
        <label for="" class="control-label">harga</label>
        <input type="text" class="form-control" name="nama">
       </div>
       <div class="col-md-3">
       </div>
       </div>
       <div class="col-md-3">
       </div>
<div class="card-bdoy">
    <div class="form-group">
        <label for="" class="control-label">berat</label>
        <input type="text" class="form-control" name="nama"> 
        <div class="card-bdoy">
    <div class="form-group">
        <label for="" class="control-label">stok</label>
        <input type="text" class="form-control" name="nama">
        </div>
<div class="card-bdoy">
    <div class="form-group">
        <label for="" class="control-label">deskripsi</label>
        <textarea=name"deskripsi" class="form-control"name="stock">
        <input type="text" class="form-control" name="nama">
</div>
<button class="btn btn-dark float-right"><i class="fa fa-save"></i simpan></button>
    </div>
</div>
    </div>
</div>
    </div>