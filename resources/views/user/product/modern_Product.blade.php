<!-- start Hotest products-->
  <div class="container">
        <h1 style="margin-top: 30px">Hotest Products</h1>
        @foreach ($products->chunk(4) as $productchunk)
        <div class="row">
            @foreach ($productchunk as $product)
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="{{ asset('images/'.$product->images->toArray()[0]['img_name']) }}" class="im"  alt="a" /> 
                        <div class="middle">
                            <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#Quikviewmodal-{{ $product->id }}" data-id="{{ $product->id }}">Quik Show</button>
                        </div>
                        
                        
                    </div>
                    <div class="slider-main-detail">
                        <div class="slider-detail">
                            <div class="product-detail">
                                
                                <h5 class="detail-price">$ {{ $product->id }}</h5>
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
                                    <a href="{{route('addtocartt',['id'=>$product->id])}}" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
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
                <div class="">
                       
                    <div class="row"> 
                         <div class="col-sm-6">
                            <div class="roww">
                                <div class="col-sm-12">
                                    <div class="col-xs-12" id="slider">
                                        <!-- Top part of the slider -->
                                        <div class="row">
                                            <div class="col-sm-12" id="carousel-bounding-box">
                                                <div class="carousel slide" id="myCarousel">
                                                    <!-- Carousel items -->
                                                    <div class="carousel-inner">
                                                        <div class="active item" data-slide-number="0">
                                                            <img src="{{ asset('images/'.$product->images->toArray()[0]['img_name']) }}">
                                                          </div>
                                                          @foreach ($product->images as $img )
                                                        <div class="item" data-slide-number="1">
                                                            <img src="{{ asset('images/'.$img->img_name) }}"></div>
                    
                                                          @endforeach
                                                        
                                                      
                                                    </div>
                                                    <!-- Carousel nav -->
                                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                                    </a>
                                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" id="slider-thumbs">
                                    <!-- Bottom switcher of slider -->
                                    <ul class="hide-bullets">
                                       
                                     @foreach ($product->images as $img )
                                     <li class="col-sm-3">
                                        <a class="thumbnail" id="carousel-selector-1"><img src="{{ asset('images/'.$img->img_name) }}"></a>
                                    </li>
                
                                     @endforeach
                                    
                                    </ul>
                                </div>
                               
                                <!--/Slider-->
                            </div>                         
    

                          </div>
                          <!--=================start center================================-->

                          <div class="col-sm-3 cente ctr">
                            <p class='popprise text-left'> $ {{ $product->product_price }}<p>
                            <p class="popprise text-left">style :{{ $product->style->style_name }}<p>
                            <p class="popprise text-left">Category :{{ $product->style->category->categ_name }}<p>
                            <hr>   
                            <p class="text-left popdetails">Colors and Sizes</p>
                            @foreach ($product->colors as $color)
                            <p class="popprise text-left">Color : {{ $color->color_name }}</p>              @foreach ($color->sizes as $size)
                                <input type="radio" class="small" >{{ $size->size_name }}<br>
                                @endforeach
                            <hr> 
                           
                            @endforeach
                              
                            
                            
                            <div>
                              <span class="redd"></span>
                              <span class="bluee"></span>
                            </div>
                            <hr>
                            <p class="text-left prodmain ">PRODUCT INFORMATION:</p>
                            <ul class="list text-justify ulsize">
                              <li >material : {{ $product->material->mater_name }}</li>
                              {{--  @if($product->styleDetails[0])
                              <li >type : {{ $product->styleDetails[0]->style_details_type}}</li>
                              <li >value : {{ $product->styleDetails[0]->style_details_value }}
                              
                              </li>
                              @endif  --}}
                            </ul>
                          </div>

                          <!--=================start right================================-->
                          <div class="col-sm-3 right">
                            <div class="place">
                              <p class="text-left small">
                                shiped to <span> cairo </span>(<a href="#">change</a>)
                              </p>
                              <p class=" small"> deliverd at </p>
                            </div>
                            <a href="{{route('addtocartt',['id'=>$product->id])}}" class="btn btn-success addtocart"> ADD TO CART</a>
                            <p class="text-left small "> Company name : {{ $product->company->name }}</p>
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

<h6 class="text-center">{!! $products->render() !!}</h6>