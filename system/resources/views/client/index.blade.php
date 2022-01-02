<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SIPECARE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{url('public')}}/limupa/images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/responsive.css">
        <!-- Modernizr js -->
        <script src="{{url('public')}}/limupa/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
             @include('client.section.header')
            <!-- Begin Slider With Banner Area -->
             @include('client.section.sidebar')
            <!-- Slider With Banner Area End Here -->
            <!-- Begin Product Area -->
          <div class="product-area pt-60 pb-50">
            <div class="container">
              <div id="produk" class="our-team-area area-padding">
                <div class="container-fuild">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="section-headline text-center">
                        <h2>Produk</h2>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-3">
                      <form action="{{url('filter')}}" method="post">
                        @csrf
                          <div class="card">
                              <div class="card-header">
                                Filter
                              </div>
                              <ul class="list-group list-group-flush col-12">
                                <li class="list-group-item">
                                    <label for="" class="control label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$nama ?? ''}}">
                                </li>
                                <li class="list-group-item">
                                    <label for="" class="control label">Stok</label>
                                <input type="text" class="form-control" name="stok" value="{{$stok ?? ''}}">
                                </li>
                                <li class="list-group-item ">
                                    <div class="row">
                                    <div class="col-6">
                                      <label for="" class="control label">Harga Min</label>
                                    <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ''}}">
                                    </div>
                                    <div class="col-6">
                                     <label for="" class="control label">Harga Max</label>
                                    <input type="text" class="form-control" name="harga_max"  value="{{$harga_max ?? ''}}">
                                    </div>
                                  </div>
                                </li>
                              </ul>
                                <li class="list-group-item">
                                <center>   <button class="btn btn-dark"><i class="fa fa-search"></i> Filter</button> </center>
                                </li>
                           </div>
                      </form>
                    </div>
                    <div class="col-9">
                        <div class="row row-cols-1 row-cols-md-2">
                        @foreach($list_produk as $produk)
                          <div class="col mb-4">
                            <div class="card h-100">
                           
                          <img src="{{url("system/public/$produk->foto")}}" alt="" class="img-fluid">
                  
                              <div class="card-body">
                                <h5 class="card-title">{{$produk->nama}}</h5>
                                <p class="card-text">
                                  Harga Produk : {{$produk->harga}} | Stok Tersedia : {{$produk->stok}} <br>
                                
                                </p>
                              </div>
                              <div class="card-footer">
                               <center><a href="{{url('beli', $produk->id)}}" class="btn btn-warning"><b>BELI</b> <i class="fa fa-shopping-cart"></i></a></center>
                              </div>
                            </div>
                          </div>
                        @endforeach
                        </div>
                         <div class="row">
                      <div class="col-md-12 mt-4">
                        <div class="d-flex justify-content-center">
                          {!! $list_produk->links() !!}
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>          
             </div>
          </div>
            <!-- Product Area End Here -->
           
        
            <!-- Begin Footer Area -->
              @include('client.section.footer')
            
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="{{url('public')}}/limupa/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="{{url('public')}}/limupa/js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="{{url('public')}}/limupa/js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="{{url('public')}}/limupa/js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="{{url('public')}}/limupa/js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="{{url('public')}}/limupa/js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="{{url('public')}}/limupa/js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="{{url('public')}}/limupa/js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="{{url('public')}}/limupa/js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="{{url('public')}}/limupa/js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="{{url('public')}}/limupa/js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="{{url('public')}}/limupa/js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="{{url('public')}}/limupa/js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="{{url('public')}}/limupa/js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="{{url('public')}}/limupa/js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="{{url('public')}}/limupa/js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="{{url('public')}}/limupa/js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="{{url('public')}}/limupa/js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="{{url('public')}}/limupa/js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="{{url('public')}}/limupa/js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="{{url('public')}}/limupa/js/main.js"></script>
    </body>

<!-- index30:23-->
</html>