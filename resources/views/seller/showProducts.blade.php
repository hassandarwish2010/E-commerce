@extends('seller.index')
@section('style')

@endsection
@section('content')

<h2 class="text-center">Manage products</h2>
<br />
<div class="panel panel-default panel-shadow">
    <div class="panel-heading">
        <ul>
            <li><i class="fa fa-file-text-o"></i> All the current products</li>
            <a href="{{ route('addproduct',array('categ_name'=>$categ_name,
            'group_name'=>$group_name)) }}"
                class="btn btn-info">Add a prroduct</a>
        </ul>
    </div>

    <div class="panel-body">

        <table class="table table-striped table-bordered table-hover table-responsive" id="productTable">
            <thead>
                <tr>
                  
                    <th>Serial Num</th>
                    <th>Style </th>
                    <th>Description </th>
                    <th>Material</th>
                    <th>Product Price</th>
                    <th>Price after sale</th>  
                    <th>Last updated</th>
                    <th>Actions</th>
                </tr>
                {{ csrf_field() }}
            </thead>
            <tbody>
                @foreach($products as $product)
               
                        <tr class="item">
                            <td>{{$product->product_serial_num}}</td>
                            <td>{{$product->style->style_name}}</td>
                            <td>{{$product->product_desc}}</td>
                            <td>{{$product->material->mater_name}}</td>
                            <td>{{$product->product_price}}</td>
                            <td>{{$product->product_price_sale}}</td>
                            
                                <td></td>
                            <td>
                                <button class="show-modal btn btn-success">
                                <span class="glyphicon glyphicon-eye-open"></span> </button>

                                
                                <a href="{{ route('editproduct',array('id'=>$product->id,'categ_name'=>$categ_name,'group_name'=>$group_name)) }}"class="btn btn-info glyphicon glyphicon-edit"></a>

                                

                                <button class="delete-modal btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span> </button>
                            </td> 
                        </tr>
                        
                @endforeach
                
                
            </tbody>
        </table>

    </div>
</div>
@endsection

@section('script')

@endsection
