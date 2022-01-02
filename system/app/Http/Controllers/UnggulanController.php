<?php

namespace App\Http\Controllers;

use App\Models\Unggulan;
use Faker;

class UnggulanController extends Controller {
    function index(){
        $data['list_unggulan'] = Unggulan::all();
        return view('unggulan.index', $data );
    }
    function create(){
        return view('unggulan.create');
    }
    function store(){
        $user = new Unggulan; 
        $user->nama = request('nama');
        $user->gambar = request('gambar');
        $user->save();

        return redirect('admin/unggulan')->with('success', 'Yey Berhasil');
    }
    function show(Unggulan $unggulan){
        $data['unggulan'] = $unggulan;
        return view('unggulan.show', $data);
    }
    function edit(Unggulan $unggulan){
        $data['unggulan'] = $unggulan;
        return view('unggulan.edit', $data);
    }
    function update(Unggulan $unggulan){
        $unggulan->nama = request('nama');
        $unggulan->harga = request('harga');
        $unggulan->stok = request('stok');
        $unggulan->deskripsi = request('deskripsi');
        $unggulan->save();
        
        return redirect('admin/unggulan')->with('success', 'Rubah Terus Awkakwak');
    }
    function destroy(unggulan $unggulan){
        $unggulan->delete();

        return redirect('admin/unggulan')->with('danger', 'Hilang Sudah');
    }

    function filter(){
        $nama = request('nama');
        $stok = explode(",", request('stok'));
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');

        
        //cara memfilter melalui nama
        //$data['list_unggulan'] = Produk::where('nama','like', "%$nama%")->get();
        //cara mefilter lebih dari 1 nama
        //$data['list_produk'] = Produk::whereIn('stok',$stok)->get();
        //cara memfilter harga terendah dan tertinggi 
        //$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        //untuk menghilangkan data lebih dari 1
        //$data['list_produk'] = Produk::whereNotIn('stok',$stok)->get();
        //untung neghilangkan item 
        //data['list_produk'] = Produk::where('stok','<>', $nama)->get();
        //untuk menghilangkan harga yang tidak mau di cari
        //$data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
        //untuk menampilkan data yang null
        //$data['list_produk'] = Produk::whereNull('stok')->get();
        //untuk menampilkan data yang not null
        //$data['list_produk'] = Produk::whereNotNull('stok')->get();
        //untuk menampilkan produk yang dibuat sesuai tanggal yang ditentukan
        //$data['list_produk'] = Produk::whereDate('created_at', '2021-11--09')->get();
        //untuk menampilkan data yang sesuai tahunnya
        //$data['list_produk'] = Produk::whereYear('created_at', '2021')->get();
        //untuk menampilkan dat sesuai bulan 
        //$data['list_produk'] = Produk::whereMouth('created_at', '11')->whereYear('created_at', '2021')->get();
        //untuk menampilkan dat sesuai jam 
        //$data['list_produk'] = Produk::whereTime('created_at', '14:02:00')->get();
        //gabungan 
        $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereNotNull('stok', [2])->get();

        $data['nama'] = $nama; 
        $data['stok'] = request('stok'); 
        return view('unggulan.index', $data);
        
    }
}