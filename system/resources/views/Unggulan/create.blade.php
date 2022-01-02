@extends('template.base')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                   Tambah data Produk
                </div>
                    <div class="card-body">
                        <form action="{{url('admin/unggulan')}}" method="post">
                        @csrf 
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <input type="file" name="gambar"> 
                                
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection