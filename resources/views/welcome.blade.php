@extends('layouts.index')

@section('content')
    {{-- <script>
        $(document).on('click','.AddCart',function(){
         var url=$('.AddCart').attr('href');
         //var current=parseInt($('.badge_cart').text()); 
        // current=current+1 ;
    
         //var b=$('.badge_cart').text(current);
         
         $.ajax({
            url:url,
            dataType:'json',
            type:'get',
            beforeSend:function(){

                alert(url);
        
               },success:function(data){
                   }
            });
        return false;
    });
</script> --}}
@include('messages')
<div class="container">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <div class="row">
                           <div class="container">
                            <div class="text-right">
                                <img data-animation="animated zoomInLeft" src="{{asset('img/main-banner3.jpg')}}">
                            </div>
                            </div>
                        </div>
                     </div> 
                    <!-- Item 2 -->
                    <div class="item slide2">
                        <div class="row">
                           <div class="container">
                            <div class="text-right">
                                <img data-animation="animated zoomInLeft" src="{{asset('img/main-banner2.jpg')}}">
                            </div>
                           </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="item slide3">
                        <div class="row">
                            <div class="container">
                                <div class="text-right">
                                    <img data-animation="animated zoomInLeft" src="{{asset('img/main-banner1.jpg')}}">
                                </div>     
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="item slide4">
                        <div class="row">
                            <div class="container">
                                <div class="text-right">
                                    <img data-animation="animated zoomInLeft" src="{{asset('img/main-banner3.jpg')}}">
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
                @if (Session::has('success'))
                <div class="row">
                    <div class="col-xs-12">
                        <div class="alert alert-success">
                                {{Session::get('success')}}
                        </div>

                    </div>
                </div>
                
               @endif
                    @foreach ($products2->chunk(4) as $key => $productchunk)
                    <div class="item{{ $key == 0 ? ' active' : '' }}">
                        <div class="row">
                            @foreach ($productchunk as $product )
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="slider-item">
                                    <div class="slider-image">
                                         <img src="{{asset('images/'.$product->images->toArray()[0]['img_name'])}}" class="im"  alt="a" /> 
                                    </div>
                                    <div class="slider-image">
                                           
                                       </div>
                                    <div class="slider-main-detail">
                                        <div class="slider-detail">
                                            <div class="product-detail">
                                               
                                                <h5 class="detail-price" >$  {{ $product->product_price }} </h5>
                                                {{-- <h5 class="detail-price" >$  {{ $product->company->name }} </h5> --}}

                                                
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
                                                        {{--  <input type="hidden" name='productid' value={{$product->id}}>
                                                        <input type="hidden" name='qty' value={{$product->product_price}}>
                                                      <a href="{{route('addtocartt',['id'=>$product->id])}}">add</a>  --}}
                                                      
                                                    <a href="{{route('addtocartt',['id'=>$product->id])}}" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
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
 
 
@include('user.product.modern_Product');



@include('layouts.our_clients');
@endsection('content')
@section('script')
<script>
$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});


   
    </script>
 @endsection('script')