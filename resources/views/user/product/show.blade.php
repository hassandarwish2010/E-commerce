@extends('layouts.index')
@section('style')
<style>
h3.accordion-header {
        margin-bottom: -4px;
}
.accor-content{
    
     overflow-y: scroll;
     width:170px;
    height:100px;
}
.accor-content-cond{
    
}
.divaccor{
    height:700px;
}


.ui-accordion .ui-accordion-content {
    padding: 1em 0.2em;}

div.accor-content ul{
    list-style-type: none;
}
div.accor-content li
{
    margin-left: -37px;
}
span.fa-circle{
    
    font-size: 40px;
    
}

</style>
@endsection
@section('content')
{{ $categories }}

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 divaccor"> 
            <div id="accordion">
                    
                    <h3 class="accordion-header">Category</h3>
                    <div class="accordion-content">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                            <div class="accor-content" >
                                <ul class="  content-list">
                                    @foreach($categories as $category)
                                        <li>
                                           <a href='#'>{{ $category->categ_name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                    </div>
                    <h3 class="accordion-header">Brand</h3>
                    <div class="accordion-content">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                            <div  class="accor-content">
                                <ul class="no-bullet  content-list">
                                    @foreach($brands as $brand)
                                            <li>
                                                <label><input type="checkbox" value="">{{$brand->brand_name}}</label>
                                            </li>
                                    @endforeach
                                </ul>
                            </div>
                    </div>
                    <h3 class="accordion-header">{{$categ_name}} Style</h3>
                    <div class="accordion-content">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                            <div class="container" class="accor-content" >
                                <ul class="no-bullet clearfix content-list">
                                    @foreach($styles as $style)
                                        <li>
                                            <label><input type="checkbox" value="">{{$style->style_name}}</label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                    </div>
                    @if($categ_name =='Dresses' || $categ_name=='Skirts'|| $categ_name=='Jackets & Coats' )
                        <h3 class="accordion-header">Lenght</h3>
                        <div class="accordion-content">
                                <div class="form-group has-feedback">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                                <div  class="accor-content">
                                    <ul class="no-bullet clearfix content-list">
                                        <li>
                                            <label><input type="checkbox" value="">Maxi</label>
                                           
                                        </li>
                                        <li>
                                            <label><input type="checkbox" value="">Knee length</label>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    @endif
                    @if($categ_name =='Dresses'|| $categ_name=='Shirts' || $categ_name=='T-Shirts' || $categ_name=='Polos'  )
                        <h3 class="accordion-header">Sleeve Length</h3>
                        <div class="accordion-content">
                                <div class="form-group has-feedback">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                                <div  class="accor-content">
                                    <ul class="no-bullet clearfix content-list">
                                        
                                            <li><label><input type="checkbox" value="">Sleeveless</label></li>
                                            <li><label><input type="checkbox" value="">Full Sleeve</label></li>
                                            <li><label><input type="checkbox" value="">Short Sleeve</label></li>
                                            <li><label><input type="checkbox" value="">Three Quarter Sleeve</label></li>
                                            <li><label><input type="checkbox" value="">Single Sleeve</label></li>
                                            
                                       
                                    </ul>
                                </div>
                        </div>
                    @endif
                    @if($categ_name =='Dresses' || $categ_name=='Tops' || $categ_name=='Shirts' ||$categ_name=='T-Shirts' || $categ_name=='Polos' )
                        <h3 class="accordion-header">Neck Style</h3>
                        <div class="accordion-content">
                                <div class="form-group has-feedback">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                                <div  class="accor-content">
                                    <ul class="no-bullet clearfix content-list">
                                        
                                            <li><label><input type="checkbox" value="">Round Neck</label></li>
                                            <li><label><input type="checkbox" value="">Asymmetrical Neck</label></li>
                                            <li><label><input type="checkbox" value="">Off Shoulder</label></li>
                                            <li><label><input type="checkbox" value=""> V Neck</label></li>
                                            <li><label><input type="checkbox" value=""> Straight Neck</label></li>
                                            <li><label><input type="checkbox" value="">Sweetheart Neck</label></li>
                                            <li><label><input type="checkbox" value="">Square Neck</label></li>
                                            <li><label><input type="checkbox" value="">Halter Neck</label></li>
                                            <li><label><input type="checkbox" value="">Cowl Neck</label></li>
                                            <li><label><input type="checkbox" value="">Shirt Neck</label></li>
                                            
                                        
                                    </ul>
                                </div>
                        </div>
                    @endif
                    @if($categ_name =='Dresses' )
                        <h3 class="accordion-header">Occasion</h3>
                        <div class="accordion-content">
                                <div class="form-group has-feedback">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                                <div  class="accor-content" >
                                    <ul class="no-bullet clearfix content-list">
                                        <li><label><input type="checkbox" value="">Casual</label></li>
                                        <li><label><input type="checkbox" value="">Special Occasion</label></li>
                                        <li><label><input type="checkbox" value="">Workwear</label></li>
                                    </ul>
                                </div>
                        </div>
                    @endif
                    <h3 class="accordion-header">Color</h3>
                    <div class="accordion-content">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                            <div  class="accor-content">
                                @foreach($colors as $color)
                                    <a href="" style="text-decoration: none;">
                                        <span class="fa fa-circle" style="color:{{$color->color_name}}"></span>
                                    </a>
                                @endforeach
                                    
                                  
                            </div>
                    </div>
                    <h3 class="accordion-header">Material</h3>
                    <div class="accordion-content">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                            <div  class="accor-content">
                                @foreach($materials as $material)
                                               <ul class="no-bullet clearfix content-list">
                                                    <li>
                                                        <label><input type="checkbox" value="">{{$material->mater_name}}</label>
                                                    </li>
                                               </ul>
                                @endforeach
                            </div>
                    </div>
                    <!-- query sizes-->
                    <h3 class="accordion-header">Size</h3>
                    <div class="accordion-content">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                            <div  class="accor-content">
                                @foreach($sizes as $size)
                                     <a href="" style="text-decoration: none;">
                                        <div style="height: 25px;
                                                width: 27px;
                                                border: 1px solid black;
                                                float: left;
                                                padding-left: 4px;
                                                margin-right: 3px;"> 
                                            <span > {{$size->size_name}}</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                    </div>

                    <h3 class="accordion-header">Condition</h3>
                    <div class="accordion-content">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                            <div  class="accor-content-cond">
                                <ul class="no-bullet clearfix content-list">
                                    <li>
                                        <label><input type="checkbox" value="">New</label>
                                    </li>
                                </ul>
                            </div>
                    </div>
                    <!--price false-->
                    <h3 class="accordion-header">Price</h3>
                    <div class="accordion-content">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                            <div  class="accor-content-cond">
                                <ul class="no-bullet clearfix content-list">
                                    <li>
                                        <label><input type="checkbox" value="">Option 2</label>
                                    </li>
                                </ul>
                            </div>
                    </div>
                    


            </div>
        </div>
        <div class="col-md-8 col-sm-12">
        <h1 style="margin-top: 30px">Hotest Products</h1>
        @foreach ($products->chunk(3) as $productchunk)
        <div class="row">
            @foreach ($productchunk as $product)
            <div class="col-md-4 col-sm-6 col-xs-12">
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
                                <h5 class="detail-price">{{$product->price}}</h5>
                                <h5 class="detail-price">{{$product->sale}}</h5>
                                <h5 class="detail-price">{{$product->desc}}</h5>
                                
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
        <div class="col-md-2 ">
            ggggggggggggggggggggggggg
            ggggggggggggggggggg
            gggggggggggggggg
        </div>

    </div>
</div>
@endsection
@section('script')


<script>
            jQuery('#accordion').accordion({ collapsible:true, active:false, autoHeight:         false, disabled:true});
jQuery('#accordion h3.accordion-header').click(function(){
      jQuery(this).next().slideToggle();
});
jQuery('.accordion').click(function(){
      jQuery('#accordion h3.accordion-header').next().slideDown();
});
        </script>        
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
@endsection

