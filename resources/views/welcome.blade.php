@extends('layouts.index')

@section('content')
<style type="text/css">
/* carousel */
.media-carousel 
{
  margin-bottom: 0;
  padding: 0 40px 30px 40px;
  margin-top: 30px;
}
/* Previous button  */
.media-carousel .carousel-control.left 
{
  left: -12px;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Next button  */
.media-carousel .carousel-control.right 
{
  right: -12px !important;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Changes the position of the indicators */
.media-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the colour of the indicators */
.media-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
.media-carousel .carousel-indicators .active 
{
  background: #333333;
}
.media-carousel img
{
  width: 250px;
  height: 100px
}
/* End carousel */
</style>
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
                    @foreach ($products->chunk(4) as $key => $productchunk)
                    <div class="item{{ $key == 0 ? ' active' : '' }}">
                        <div class="row">
                            @foreach ($productchunk as $product)
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="slider-item">
                                    <div class="slider-image">
                                         <img src="{{asset('images/'.$product->images->toArray()[0]['img_name'])}}" class="im"  alt="a" /> 
                                    </div>
                                    <div class="slider-main-detail">
                                        <div class="slider-detail">
                                            <div class="product-detail">
                                               
                                                <h5 class="detail-price">$  {{ $product->product_price }} </h5>
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
                                                      
                                                    <a href="{{route('addtocartt',['id'=>$product->id])}}" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
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
                        <img src="{{asset('images/'.$product->images->toArray()[0]['img_name'])}}" class="im"  alt="a" /> 
                        <div class="middle">
                            <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#Quikviewmodal-{{ $product->id }}" data-id="{{ $product->id }}">Quik Show</button>
                        </div>
                        
                        
                    </div>
                    <div class="slider-main-detail">
                        <div class="slider-detail">
                            <div class="product-detail">
                                
                                <h5 class="detail-price">${{ $product->product_price }}</h5>
                                <h5 class="detail-price">${{ $product->style->style_name}}</h5>

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
                                <a href="{{route('addtocartt',['id'=>$product->id])}}" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
<div id="Quikviewmodal-{{ $product->id }}" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content" style="margin-left:-10em; width:60em">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <div class="p_content">
                       
                    <div class="row"> 
                         <div class="col-sm-4 ">
                            <div class="carousel slide media-carousel" id="media">
                              <div class="carousel-inner">
                                <div class="item  active">               
                                      <a class="thumbnail" href="#"><img alt="" src="{{asset('img/images.jpg')}}"></a>
                                </div>
                                <div class="item">
                                 <a class="thumbnail" href="#"><img alt="" src="{{asset('img/images.jpg')}}"></a>
                                </div>
                                <div class="item">
                                  <a class="thumbnail" href="#"><img alt="" src="{{asset('img/images.jpg')}}"></a>
                                </div>
                              </div>
                              <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                              <a data-slide="next" href="#media" class="right carousel-control">›</a>
                            </div>                          
    
                        <!-- <div class="divslideimg">
                                <div class="numbertext">1 / 6</div>
                                <img src="{{asset('img/images.jpg')}}" style="width:100%">
                              </div>
                        
                              <div class="divslideimg">
                                <div class="numbertext">2 / 6</div>
                                <img src="{{asset('img/images.jpg')}}" style="width:100%">
                              </div>
                        
                              <div class="divslideimg">
                                <div class="numbertext">3 / 6</div>
                                <img src="{{asset('img/images.jpg')}}" style="width:100%">
                              </div>
                                
                              <div class="divslideimg">
                                <div class="numbertext">4 / 6</div>
                                <img src="{{asset('img/images.jpg')}}" style="width:100%">
                              </div>
                        
                              <div class="divslideimg">
                                <div class="numbertext">5 / 6</div>
                                <img src="{{asset('img/images.jpg')}}" style="width:100%">
                              </div>
                                
                              <div class="divslideimg">
                                <div class="numbertext">6 / 6</div>
                                <img src="{{asset('img/images.jpg')}}" style="width:100%">
                              </div>
                                
                              <a class="prevlink" onclick="plusSlides(-1)">❮</a>
                              <a class="nextlink" onclick="plusSlides(1)">❯</a>
                        
                              <div class="divproductdetails-container">
                                <p id="divproductdetails"></p>
                              </div>
                        
                              <div class="row">
                                <div class="columnforproduct">
                                  <img class="imgdownslide cursorproduct" src="{{asset('img/images.jpg')}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                                </div>
                                <div class="columnforproduct">
                                  <img class="imgdownslide cursorproduct" src="{{asset('img/images.jpg')}}" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
                                </div>
                                <div class="columnforproduct">
                                  <img class="imgdownslide cursorproduct" src="{{asset('img/images.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                </div>
                                <div class="columnforproduct">
                                  <img class="imgdownslide cursorproduct" src="{{asset('img/images.jpg')}}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                                </div>
                                <div class="columnforproduct">
                                  <img class="imgdownslide cursorproduct" src="{{asset('img/images.jpg')}}" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                                </div>    
                                <div class="columnforproduct">
                                  <img class="imgdownslide cursorproduct" src="{{asset('img/images.jpg')}}" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                                </div>
                              </div>-->

                          </div>
                
                          <div class="col-sm-4 cente ctr">
                            <p class='popprise text-left'>225 EGY <p>
                            <p class="popdetails text-left"> details<p>
                            <hr>   
                            <p class="text-left popdetails">Color</p>
                            <input type="radio" > yellow<br>
                            <input type="radio" > Green <br>
                            <hr>   
                            <p class="text-left popdetails">Size</p> 
                            <div>  
                                <input type="radio" > M<br>
                                <input type="radio" > L <br>
                                <input type="radio" > xM<br>
                                <input type="radio" > xxL <br>
                            </div>
                            
                            <div>
                              <span class="redd"></span>
                              <span class="bluee"></span>
                            </div>
                            <hr>
                            <p class="text-left prodmain popprise">PRODUCT INFORMATION:</p>
                            <ul class="list text-justify ulsize">
                              <li >First item</li>
                              <li>Second item</li>
                            </ul>
                          </div>
                          <div class="col-sm-4 right">
                            <div class="place">
                              <p class="text-left small">
                                shiped to <span> cairo </span>(<a href="#">change</a>)
                              </p>
                              <p class="text-left small"> deliverd at </p>
                            </div>
                            <a href="{{route('addtocartt',['id'=>$product->id])}}" class="btn btn-success addtocart"> ADD TO CART</a>

                            <p class="text-left small "> Sold BY :</p>
                          </div>
                          <!--......... end right.......-->
                      </div> 
                             <!--......... end row.......-->





                    <!--................-->
                  </div>
            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
      
        </div>
      </div>
  
    <!-- end quik view modal-->
            @endforeach
        </div>
        <br>

    @endforeach
</div>

<!-- end Hotest products-->
<!--start quik view modal-->

@include('layouts.our_team');
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


   /* var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("divslideimg");
      var dots = document.getElementsByClassName("imgdownslide");
      var divproductdetailsText = document.getElementById("divproductdetails");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      divproductdetailsText.innerHTML = dots[slideIndex-1].alt;
    }*/
    </script>
 @endsection('script')