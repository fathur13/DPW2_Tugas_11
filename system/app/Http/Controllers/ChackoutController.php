<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ChackoutController extends Controller {
    function index(){
        $data['list_produk'] = Produk::take(4)->get();
        return view('web.produk.chackout', $data );

    }
    function filter(){
    $nama = request('nama');
    $stok = explode(",", request('stok'));

    $data['list_produk'] = Produk::where('nama','like', "%$nama%")->get();
        $data['nama'] = $nama; 
        $data['stok'] = request('stok'); 
        return view('web.produk.chackout', $data);
    }

}