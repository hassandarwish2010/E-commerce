@extends('layouts.index')

@section('content')
{{-- <script>
	$(document).on('click','.remove-item-cart',function(){
	 var url=$(this).attr('href');
	 $.ajax({
		url:url,
		dataType:'json',
	
		type:'get',
		beforeSend:function(){

		   },success:function(data){
			if(data.status==true){
				$('.test').text(response);
			   }
			   }
			});
	return false;
})
</script> --}}

<div class="container">
	<div class="row">
		<div class="col-xs-11">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
						
						</div>
					</div>
				</div>
				<div class="panel-body">
				     	@if(Session()->has('cartt')&& $totalPrice>0)
						@foreach ($products as $product)
						
						

						{{--  <input type="button" value='{{ $product['item']['id'] }}' name="rowId" id='rowId{{$product['item']['id']}}'>  --}}

					<div class="row">
						<div class="col-md-2"><img class="img-responsive" src="{{asset('images/'.$product['item']['images'][0]['img_name'])}}">
						</div>
						<div class="col-md-2">
							<h4 class="product-name"><strong>{{$product['item']['style']['style_name']}}</strong></h4><h4><small>{{$product['item']['product_desc']}}</small></h4>
						</div>
						<div class="col-md-2">
							<h4 class="product-name"><strong>{{$product['item']['colors'][0]['color_name']}}</strong></h4>
							
						</div>
						
						<div class="col-md-6">
						   <div class="col-md-4">
							<h6><strong>${{$product['item']['product_price']}}</strong></strong></h6>
						
							</div>

							<div class="col-md-4">
									<input type="button" class="btn btn-success" value="{{$product['qty']}}" >
							</div>

							<div class="col-md-2">
								
									<h6><strong>${{$product['price']}}</strong></strong></h6>
								</div>											
							<div class="col-md-2">
									<a  class="glyphicon glyphicon-trash remove-item-cart" href="{{route('remove',['id'=>$product['item']['id']])}}"></a>
							
								<a  class="" href="{{route('update',['id'=>$product['item']['id']])}}">+</a>
							</div>
						</div>
					</div>
					<hr>
					
          @endforeach
       

				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
				
							<h4 class="text-right">Total <strong>:${{$totalPrice}}</strong></h4>
						</div>
					<div class="col-xs-3">
							<a href="{{route('checkout')}}" type="button" class="btn btn-success ">
								Checkout
							</a>
					</div>
				</div>
			   
			   @else

               <h3 class="popprise text-center">Your Cart is Empty</h3>
               @endif

        </div>
       
			</div>
		</div>
	</div>
</div>



{{--  <script>
		$(document).ready(function(){
			
			 $("#checkshow").click(function(){

alert("one")

				})
		
		}
	 
		);
		</script>  --}}
@endsection