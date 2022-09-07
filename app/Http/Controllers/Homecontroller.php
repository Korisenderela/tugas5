<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showberanda(){
        return view('admin.beranda');
    }
    function showProduk(){
        return view('produk');
    }
    function showKategori(){
        return view('kategori');
    }
      
    function test($produk, $hargaMin =0, $hargaMax =0){
        if($produk == 'hijab'){
            echo "Tampilkan Produk Hijab";
        }elseif($produk == 'sepeda'){
            echo "Produk Hijab";
        }
        echo "<br>";
        echo "Harga Min adalah $hargaMin <br>";
        echo "Harga Max adalah $hargaMax <br>";
    }
}
