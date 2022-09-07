@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Detail Data Produk
                </div>
                <div class="card-body">
                    <h3>{{$produk->nama}}</h3>
                    <hr>
                    <p>
                        RP. {{number_format($produk->harga)}}
                        stok : {{$produk->stok}}
                        stok : {{$produk->berat}}
                    </p>
                    {!! nl2br ($produk->deskripsi) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection