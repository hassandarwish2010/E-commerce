@extends('layouts.index')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-mid-4"> 
            <div id="accordion">
                    
                    <h3 class="accordion-header">Category</h3>
                    <div class="accordion-content">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                            <div class="container">
                                <ul class="no-bullet clearfix content-list">
                                    @foreach($categories as $category)
                                        <li>
                                            <label><input type="checkbox" value="">{{$category->categ_name}}</label>
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
                            <div class="container">
                                <ul class="no-bullet clearfix content-list">
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
                            <div class="container">
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
                                <div class="container">
                                    <ul class="no-bullet clearfix content-list">
                                        <li>
                                            <label><input type="checkbox" value="">Option 2</label>
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
                                <div class="container">
                                    <ul class="no-bullet clearfix content-list">
                                        <li>
                                            <label><input type="checkbox" value="">Option 2</label>
                                        </li>
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
                                <div class="container">
                                    <ul class="no-bullet clearfix content-list">
                                        <li>
                                            <label><input type="checkbox" value="">Option 2</label>
                                        </li>
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
                                <div class="container">
                                    <ul class="no-bullet clearfix content-list">
                                        <li>
                                            <label><input type="checkbox" value=""></label>
                                        </li>
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
                            <div class="container">
                                @foreach($products as $product)
                                    @if($product->style->category->id == $categ_id)
                                    
                                        @foreach($colors as $color)
                                            @if($color->products->id == $product->id)
                                            
                                                <ul class="no-bullet clearfix content-list">
                                                    <li>
                                                        <label><input type="checkbox" value=""> {{$color->name}}</label>
                                                    </li>
                                                </ul>
                                            @endif
                                        @endforeach
                                    
                                    @endif
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
                            <div class="container">
                            @foreach($products as $product)
                                    @if($product->style->category->id == $categ_id)
                                    
                                        @foreach($materials as $material)
                                        
                                            @if($material->products->id == $product->id)
                                            
                                                <ul class="no-bullet clearfix content-list">
                                                    <li>
                                                        <label><input type="checkbox" value="">$material->mater_name</label>
                                                    </li>
                                               </ul>
                                            @endif
                                        @foreach
                                    @endif
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
                            <div class="container">
                                <ul class="no-bullet clearfix content-list">
                                    <li>
                                        <label><input type="checkbox" value="">Option 2</label>
                                    </li>
                                </ul>
                            </div>
                    </div>

                    <h3 class="accordion-header">Condition</h3>
                    <div class="accordion-content">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                            <div class="container">
                                <ul class="no-bullet clearfix content-list">
                                    <li>
                                        <label><input type="checkbox" value="">Option 2</label>
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
                            <div class="container">
                                <ul class="no-bullet clearfix content-list">
                                    <li>
                                        <label><input type="checkbox" value="">Option 2</label>
                                    </li>
                                </ul>
                            </div>
                    </div>


            </div>
        </div>
        <div class="col-mid-8 col-sm-12">
        </div>
    </div>
</div>


       <!-- <script>
            jQuery('#accordion').accordion({ collapsible:true, active:false, autoHeight:         false, disabled:true});
jQuery('#accordion h3.ui-accordion-header').click(function(){
      jQuery(this).next().slideToggle();
});
jQuery('.accordion-expand-all').click(function(){
      jQuery('#accordion h3.ui-accordion-header').next().slideDown();
});
        </script>-->
                
@endsection

