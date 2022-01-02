<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Produk;

class ShopController extends Controller {
    function index(){
        $data['list_produk'] = Produk::all();
        return view('web.produk.shop', $data );

    }
    function filter(){
    $nama = request('nama');
    $stok = explode(",", request('stok'));

    $data['list_produk'] = Produk::where('nama','like', "%$nama%")->get();
        $data['nama'] = $nama; 
        $data['stok'] = request('stok'); 
        return view('web.produk.shop', $data);
    }
    function show(Produk $produk){
        $produk = Produk::take(1)->get();
        return view('web.produk.show', ['produk'=>$produk]);
    }
}