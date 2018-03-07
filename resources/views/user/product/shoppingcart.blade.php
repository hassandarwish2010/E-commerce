@extends('layouts.index')

@section('content')





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

						@foreach ($products as $product)
						
						

						<input type="hidden" value='{{$product['item']['id']}}' name="rowId" id='rowId{{$product['item']['id']}}'>

					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>{{$product['item']['id']}}</strong></h4><h4><small>{{$product['item']['product_desc']}}</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								
								<h6><strong>${{$product['item']['product_price']}}</strong></strong></h6>
							</div>
							<a  class="glyphicon glyphicon-trash" href="{{route('remove',['id'=>$product['item']['id']])}}"></a>
						
							{{-- <a  class="" href="{{route('update',['id'=>$product['item']['id']])}}">+</a> --}}
							<div class="col-xs-4">
								<input type="button" class="btn btn-success" value="{{$product['qty']}}" >
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
								
								
								
								
								</button>
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