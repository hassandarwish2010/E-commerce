@foreach ($productwithstyle->chunk(3) as $productchunk)
<div class="row">
    @foreach ($productchunk as $product)
    <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="slider-item">
                    <div class="slider-image">
                         <img src="{{asset('images/'.$product->images->toArray()[0]['img_name'])}}" class="im"  alt="a" /> 
                    </div>
                    <div class="slider-image">
                       </div>
                    <div class="slider-main-detail">
                        <div class="slider-detail">
                            <div class="product-detail">
                               
                                <h5 class="detail-price">$  {{ $product->product_price }} </h5>
                                {{-- @foreach ($category_by_group  as $categories )
                                {{ $categories->group_name }}
                                @endforeach --}}
                                
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

  
       @include('user.product.modal')
   
            @endforeach
</div>
     

            @endforeach