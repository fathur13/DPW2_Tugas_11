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
                        <h3>{{$unggulan->nama}}</h3>
                        <hr>
                        <img src="{{url('/assets/web/img/ $unggulan->gambar')}} alt="{{$unggulan->gambar}}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection