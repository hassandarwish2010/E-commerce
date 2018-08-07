<div class="col-sm-2">

      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
            
                <a href="#">Category</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse ">
              <div class="panel-body">
                
                  <div class="checkbox">
                      
                      <ul>
                      
                          @foreach ($category_by_group  as $categories )
                          @foreach ($categories->categories  as $category )
                            <li><a href="{{ url('categ_products/'.$category->categ_name.'/'.$categories->group_name) }}">
                                  {{ $category->categ_name }}
                                </a>
                            </li>
                          @endforeach
                        @endforeach
                          
                        
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      </div>
   {{-- //////////////////////////////////////// --}}
   
   <div class="panel-group" id="accordion2">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 data-toggle="collapse" data-parent="#accordion2" href="#collapse2" class="panel-title expand">
           
              <a href="#">Brands</a>
          </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse ">
            <div class="panel-body">
               
                <div class="checkbox">
                    <ul>
                     
                        @foreach ($category_by_group  as $brands )
                        @foreach ($brands->brands  as $brand )
                          <li><a href="{{ url('brandsProducts/'.$brand->brand_name.'/'.$categories->group_name) }}">
                                {{ $brand->brand_name }}
                              </a>
                           </li>
                        @endforeach
                      @endforeach
                        
                       
                    </ul>
                </div>
            </div>
        </div>
     </div>
    </div>

  
  {{-- //////////////////////////////////////// --}}
   
  <div class="panel-group" id="accordion3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 data-toggle="collapse" data-parent="#accordion3" href="#collapse3" class="panel-title expand">
           
              <a href="#">Styles</a>
          </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse ">
            <div class="panel-body">
               
                <div class="checkbox">
                    <ul>
                     
                        @foreach ($category_by_group  as $categories )
                        @foreach ($categories->categories  as $category )
                        @foreach ($category->styles  as $style )
                          <li><a href="{{ url('styleswProducts/'.$style->style_name.'/'.$categories->group_name) }}">
                            {{ $style->style_name }}
                              </a>
                          </li>
                        @endforeach
                        @endforeach
                      @endforeach
                        
                       
                    </ul>
                </div>
            </div>
        </div>
     </div>
    </div>
      {{-- //////////////////////////////////////// --}}
   
   <div class="panel-group" id="accordion4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 data-toggle="collapse" data-parent="#accordion4" href="#collapse4" class="panel-title expand">
           
              <a href="#">materials</a>
          </h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse ">
            <div class="panel-body">
               
                <div class="checkbox">
                    <ul>
                     
                        @foreach ($category_by_group  as $categories )
                        @foreach ($categories->categories  as $category )
                        @foreach ($category->styles  as $style )
                        @foreach ($style->products as $product )
                          
                            <li><a href="{{ url('material_products/'.$product->material->mater_name.'/'.$categories->group_name) }}">
                              {{ $product->material->mater_name }}
                                </a>
                            </li>
                        @endforeach
                        @endforeach
                        @endforeach
                      @endforeach
                        
                       
                    </ul>
                </div>
            </div>
        </div>
     </div>
    </div>

        {{-- //////////////////////////////////////// --}}
   
   <div class="panel-group" id="accordion6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 data-toggle="collapse" data-parent="#accordion5" href="#collapse5" class="panel-title expand">
           
              <a href="#">Colors</a>
          </h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse ">
            <div class="panel-body">
               
                <div class="checkbox">
                    <ul>
                     
                        @foreach ($category_by_group  as $categories )
                        @foreach ($categories->categories  as $category )
                        @foreach ($category->styles  as $style )
                        @foreach ($style->products as $product )
                          @foreach ($product->colors as $color )
                          <li><a href="{{ url('color_products/'.$color->color_name.'/'.$categories->group_name) }}">
                            {{ $color->color_name }}
                              </a>
                          </li>
                          @endforeach
                          @endforeach
                        @endforeach
                        @endforeach
                      @endforeach
                        
                       
                    </ul>
                </div>
            </div>
        </div>
     </div>
    </div>
     {{-- //////////////////////////////////////// --}}
   
   <div class="panel-group" id="accordion5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 data-toggle="collapse" data-parent="#accordion6" href="#collapse6" class="panel-title expand">
           
              <a href="#">Sizes</a>
          </h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse ">
            <div class="panel-body">
               
                <div class="checkbox">
                    <ul>
                     
                        @foreach ($category_by_group  as $categories )
                        @foreach ($categories->categories  as $category )
                        @foreach ($category->styles  as $style )
                        @foreach ($style->products as $product )
                          @foreach ($product->colors as $color )
                         @foreach ($color->sizes as $size )
                         <li><a href="{{ url('size_products/'.$size->size_name.'/'.$categories->group_name) }}">
                          {{ $size->size_name }}
                            </a>
                         </li>
                         @endforeach
                          @endforeach
                          @endforeach
                        @endforeach
                        @endforeach
                      @endforeach
                        
                       
                    </ul>
                </div>
            </div>
        </div>
     </div>
    </div>
</div>

{{-- /////////////////////////////////

<div class="container">
    <div class="row">
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Panel 1</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-down"></i></span>
				</div>
				<div class="panel-body">Panel content</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Panel 2</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				</div>
				<div class="panel-body">Panel content</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Panel 3</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				</div>
				<div class="panel-body">Panel content</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<h3 class="panel-title">Panel 4</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				</div>
				<div class="panel-body">Panel content</div>
			</div>
		</div>
	</div>
</div> --}}