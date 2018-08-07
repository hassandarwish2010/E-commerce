<div class="col-md-8 col-sm-12">
    @if(!empty($products))
    @include('user.product.products.by_categ_name')
    @elseif(!empty($productwithbrands))
    @include('user.product.products.productwithbrands')
    @elseif(!empty($productwithstyle))
    @include('user.product.products.productwithstyle')
    @elseif(!empty($productwithmaterial))
    @include('user.product.products.productwithmaterial')
    @elseif(!empty($productwithcolor))
    @include('user.product.products.productwithcolor')
    @elseif(!empty($productwithsize))
    @include('user.product.products.productwithsize')
   @else 
            <h4 class="text-center"><string>No Product now</string></h4>
            @endif 
</div>
            