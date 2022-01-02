<?php

namespace App\Http\Controllers;

use App\Models\Beranda;

class BerandaController extends Controller {
    function index(){
        $data['list_produk'] = Beranda::take(4)->get();
        $unggulan['list_unggulan'] = Beranda::all();
        return view('web.template.base', $data );
    }
    function filter(){
    $nama = request('nama');
    $stok = explode(",", request('stok'));

    $data['list_produk'] = Beranda::where('nama','like', "%$nama%")->get();

        $data['nama'] = $nama;
        $unggulan['nama'] = $nama; 
        $data['stok'] = request('stok'); 
        return view('web.template.base', $data);
    }

}