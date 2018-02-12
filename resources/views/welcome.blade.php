@extends('layouts.index')

@section('content')

<!-- start slider image for advertise-->
<div class="container">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <div class="row">
                           <div class="container">
                            <div class="text-right">
                                <img data-animation="animated zoomInLeft" src="img/main-banner3.jpg">
                            </div>
                            </div>
                        </div>
                     </div> 
                    <!-- Item 2 -->
                    <div class="item slide2">
                        <div class="row">
                           <div class="container">
                            <div class="text-right">
                                <img data-animation="animated zoomInLeft" src="img/main-banner3.jpg">
                            </div>
                           </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="item slide3">
                        <div class="row">
                            <div class="container">
                                <div class="text-right">
                                    <img data-animation="animated zoomInLeft" src="img/main-banner3.jpg">
                                </div>     
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="item slide4">
                        <div class="row">
                            <div class="container">
                                <div class="text-right">
                                    <img data-animation="animated zoomInLeft" src="img/main-banner3.jpg">
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End Item 4 -->
            
                </div>
                <!-- End Wrapper for slides-->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
<!-- end slider image for advertise-->

<!-- start slider for sale products-->

<div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h3> Latest Product </h3>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 hidden-xs">
                <div class="controls pull-right">
                    <a class="left fa fa-chevron-left btn btn-info " href="#carousel-example" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-info" href="#carousel-example" data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel" data-type="multi">
            <div class="carousel-inner">
               
                    @foreach ($products->chunk(4) as $key => $productchunk)
                    <div class="item{{ $key == 0 ? ' active' : '' }}">
                        <div class="row">
                            @foreach ($productchunk as $product)
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="slider-item">
                                    <div class="slider-image">
                                        <img src="img/images.jpg" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="slider-main-detail">
                                        <div class="slider-detail">
                                            <div class="product-detail">
                                                <h5>{{ $product->id }}</h5>
                                                <h5 class="detail-price">$187.87</h5>
                                            </div>
                                        </div>
                                        <div class="cart-section">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-6">
                                                    <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                
            </div>
        </div>
        
    </div>
<!-- end slider image for advertise-->

 <!-- start Hotest products-->
  <div class="container">
        <h1 style="margin-top: 30px">Hotest Products</h1>
        @foreach ($products->chunk(4) as $productchunk)
        <div class="row">
            @foreach ($productchunk as $product)
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="img/images.jpg" class="img-responsive" alt="a" />
                        <div class="middle">
                            <div class="text">John Doe</div>
                        </div>
                        
                    </div>
                    <div class="slider-main-detail">
                        <div class="slider-detail">
                            <div class="product-detail">
                                <h5>{{ $product->id }}</h5>
                                <h5 class="detail-price">$187.87</h5>
                            </div>
                        </div>
                        <div class="cart-section">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-6 review">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-6">
                                    <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br>

    @endforeach
</div>

<!-- end Hotest products-->
@include('layouts.our_team');
@include('layouts.our_clients');
@endsection('content')