@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        filter
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/unggulan/filter')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama jpmblo</label>
                                <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Stok</label>
                                <input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">jharga Min</label>
                                        <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">jharga Max</label>
                                        <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-search">Filter</i></button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Data unggulan
                        <a href="{{url('admin/unggulan/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                                @foreach ($list_unggulan as $unggulan)   
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/unggulan', $unggulan->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('admin/unggulan', $unggulan->id)}}/edit" class="btn btn-warning"><div class="fa fa-edit"></div></a>
                                            @include('template.utils.delete', ['url' => url('admin/unggulan', $unggulan->id)])
                                        </div>
                                    </td>
                                    <td>{{$unggulan->nama}}</td>
                                    <td>{{$unggulan->harga}}</td>
                                    <td>{{$unggulan->stok}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection