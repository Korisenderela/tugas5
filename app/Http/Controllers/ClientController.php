<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ClientController extends Controller {
     
    function ShowIndex(){
     $data['list_produk'] = Produk::all();
     return view('index', $data);
    }
}