@extends('admin.index')
@section('content')

    <div class="row col-xs-12 custyle">
    <table class="table table-striped custab">
    <thead>
       
        <tr>
            <th>ID</th>
            <th>Serial_name</th>
            <th>Price</th>
            <th>com_id</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach ($products as $product)
        
   
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->product_serial_num}}</td>
                <td>{{$product->product_price}}</td>
                <th>{{$product->comp_id}}</th>
               
                <td class="text-center"> <a href="{{route('deleteadminprodect',['id'=>$product->id])}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            @endforeach
            <h6 class="text-center">{!! $products->render() !!}</h6>
    </table>
    </div>

    
@endsection