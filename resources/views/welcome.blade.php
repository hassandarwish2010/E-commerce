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
               
                    @foreach ($products->chunk(4) as $key => $productchunk)
                    <div class="item{{ $key == 0 ? ' active' : '' }}">
                        <div class="row">
                            @foreach ($productchunk as $product)
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="slider-item">
                                    <div class="slider-image">
                                        <img src="{{asset('img/main-banner1.jpg')}}" class="img-responsive" alt="a" />
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
                        <img src="{{asset('img/images.jpg')}}" class="img-responsive" alt="a" />
                        <div class="middle">
                            <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#Quikviewmodal-{{ $product->id }}" data-id="{{ $product->id }}">Quik Show</button>
                        </div>
                        
                    </div>
                    <div class="slider-main-detail">
                        <div class="slider-detail">
                            <div class="product-detail">
                                <h5>{{ $product->id }}</h5>
                                <h5 class="detail-price">{{$product->product_price}}</h5>
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
                        <input type="text" class="form-control" id="id" value="{{ $product->id }}" >
                    <div class="row">
                          <h4 class="text-left colmain"> MEN T_SHERT</h4>
                          <div class="col-sm-4 left productslide">
                                    <div class="mySlides">
                                        <div class="numbertext">1 / 6</div>
                                        <img src="{{asset('img/dress.jpg')}}" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">2 / 6</div>
                                        <img src="{{asset('img/dress.jpg')}}" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">3 / 6</div>
                                        <img src="{{asset('img/dress.jpg')}}" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                        <div class="numbertext">1 / 6</div>
                                        <img src="{{asset('img/dress.jpg')}}" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">2 / 6</div>
                                        <img src="{{asset('img/dress.jpg')}}" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">3 / 6</div>
                                        <img src="{{asset('img/dress.jpg')}}" style="width:100%">
                                    </div>
                                        

                                        
                                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                                    <a class="next" onclick="plusSlides(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row">
                                        <div class="column">
                                        <img class="demo cursor" src="{{asset('img/dress.jpg')}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                                        </div>
                                        <div class="column">
                                        <img class="demo cursor" src="{{asset('img/dress.jpg')}}" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
                                        </div>
                                        <div class="column">
                                        <img class="demo cursor" src="{{asset('img/dress.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="{{asset('img/dress.jpg')}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                                            </div>
                                            <div class="column">
                                            <img class="demo cursor" src="{{asset('img/dress.jpg')}}" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
                                            </div>
                                            <div class="column">
                                            <img class="demo cursor" src="{{asset('img/dress.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                            </div>
                                    </div>
                                   

                          </div>
                
                          <div class="col-sm-4 cente ctr">
                            <p class='popprise text-left'>225 EGY <p>
                            <p class="popdetails text-left"> details<p>
                            <hr>
                            <h6 class="text-left popprise">size:</h6>
                            <div>
                              <span class="btn btn-primary size"> M </span>
                              <span class="btn btn-primary size"> L   </span>
                              <span class="btn btn-primary size"> xm  </span>
                              <span class="btn btn-primary size"> xxl </span>
                              <span class="btn btn-primary size">xxxl </span>
                            </div>
                            <hr>
                            <p class="text-left popdetails">Color</p>
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
                            <a href="#" class="btn btn-success addtocart"> ADD TO CART</a>
                            <p class="text-left small "> Sold BY :</p>
                          </div>
                          <!--......... end right.......-->
                      </div> 
                             <!--......... end row.......-->
                    <!--................-->
                  </div>
                  <script>
                        var slideIndex = 1;
                        showSlides(slideIndex);
                        
                        function plusSlides(n) {
                          showSlides(slideIndex += n);
                        }
                        
                        function currentSlide(n) {
                          showSlides(slideIndex = n);
                        }
                        
                        function showSlides(n) {
                          var i;
                          var slides = document.getElementsByClassName("mySlides");
                          var dots = document.getElementsByClassName("demo");
                          var captionText = document.getElementById("caption");
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
                          captionText.innerHTML = dots[slideIndex-1].alt;
                        }
                     </script>
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