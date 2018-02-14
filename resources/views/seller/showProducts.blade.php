@extends('seller.index')
@section('content')
<style>
        .panel-heading {
            padding: 0;
        }
        .panel-heading ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        .panel-heading li {
            float: left;
            border-right:1px solid #bbb;
            display: block;
            padding: 14px 16px;
            text-align: center;
        }
        .panel-heading li:last-child:hover {
            background-color: #ccc;
        }
        .panel-heading li:last-child {
            border-right: none;
        }
        .panel-heading li a:hover {
            text-decoration: none;
        }

        .table.table-bordered tbody td {
            vertical-align: baseline;
        }
    </style>

<div class="">
    <h2 class="text-center">Manage products</h2>
    <br />
    <div class="panel panel-default">
        <div class="panel-heading">
            <ul>
                <li><i class="fa fa-file-text-o"></i> All the current products</li>
                <a href="{{ route('addproduct') }}" class="btn btn-info">Add a prroduct</a>
            </ul>
        </div>
    
        <div class="panel-body">
                <table class="table table-striped table-bordered table-hover table-responsive" id="productTable">
                    <thead>
                        <tr>
                            <th valign="middle">#</th>
                            <th>Serial Num</th>
                            <th>Style Name</th>
                            <th>Product Price</th>
                            <th>Price after sale</th>  
                            <th>Product Qty</th>
                            <th>Active</th>
                            <th>Last updated</th>
                            <th>Actions</th>
                        </tr>
                        {{ csrf_field() }}
                    </thead>
                    <tbody>
                        @foreach($products as $indexKey => $product)
                            @if($product->style->category->id == $categ_id)
                                <tr class="item{{$product->id}}">
                                    <td class="col1">{{ $indexKey+1 }}</td>
                                    <td>{{$product->product_serial_num}}</td>
                                    <td>{{$product->style->style_name}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td>{{$product->product_price_sale}}</td>
                                    <td>{{$product->product_quan}}</td>
                                    
                                    <td class="text-center"><input type="checkbox" class="published" id="" data-id="{{$product->id}}"{{-- @if ($product->is_published) checked @endif--}} ></td>
                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $product->updated_at)->diffForHumans() }}</td>
                                    <td>
                                        <button class="show-modal btn btn-success" data-id="{{$product->id}}" data-serial="{{$product->product_serial_num}}" data-content="{{$product->style->style_name}}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>

                                        <button class="btn btn-info"  data-toggle="modal" data-target="#editmodal-{{ $product->id }}" data-id="{{ $product->id }}">
                                        <span class="glyphicon glyphicon-edit"></span> Edit</button>

                                        <button class="delete-modal btn btn-danger" data-id="{{$product->id}}" data-title="{{$product->style->style_name}}" data-content="{{$product->style->style_name}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                    </td>
                                </tr>
                                <!-- Modal form to edit a form -->
                                <div id="editmodal-{{ $product->id }}" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <form   method="post" id="myForm" >
                                                <input type="hidden" name="_method" value="put">
                                                    {{ csrf_field() }}
                                                <div class="alert alert-danger print-error-msg" style="display:none">
                                                    <ul></ul>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="serial">serial:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="product_serial_num" id="serial" value="{{$product->product_serial_num}}" autofocus>
                                                        <small>serial number </small>
                                                        <p class="errorserial text-center alert alert-danger hidden"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="price">price:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="product_price" id="product_price_show" value="{{$product->product_price}}">
                                                        <small>price number </small>
                                                        <p class="errorprice text-center alert alert-danger hidden"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="desc">desc:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="product_desc" id="desc" value="{{$product->product_desc}}" >
                                                        <small>desc  </small>
                                                        <p class="errordesc text-center alert alert-danger hidden"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Quantity">Quantity:</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" name="product_quan" id="Quantity" value="{{$product->product_quan}}"  >
                                                        <small>Quantity  </small>
                                                        <p class="errorQuantity text-center alert alert-danger hidden"></p>
                                                    </div>
                                                </div>
                                                <input type="hidden" class="form-control" name="style_id" id="style_id" value="1">
                                                <input type="hidden" value="1" class="form-control" name="comp_id"  id="comp_id" >
                                                <input type="hidden" value="1" class="form-control" name="mater_id" id="mater_id" value="1">
                                                <div class="form-group">
                                                <button class="btn btn-success edit-product pull-right" type="submit">Edit</button>
                                                </div>
                                            </form>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                                    <span class='glyphicon glyphicon-remove'></span> Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endif
                        @endforeach
                    </tbody>
                </table>
        </div><!-- /.panel-body -->
    </div><!-- /.panel panel-default -->
</div>
<!-- /.col-md-8 -->
<!-- Modal form to show a Product -->
    <div id="showModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="title_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Content:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="content_show" cols="40" rows="5" disabled></textarea>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Modal form to add a post -->
    <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal"  role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="serial">serial:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="serial" autofocus>
                                <small>serial number </small>
                                <p class="errorserial text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="price">price:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="price" >
                                <small>price number </small>
                                <p class="errorprice text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="desc">desc:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="desc" >
                                <small>desc  </small>
                                <p class="errordesc text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="Quantity">Quantity:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="Quantity" >
                                <small>Quantity  </small>
                                <p class="errorQuantity text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success add" data-dismiss="modal">
                            <span id="" class='glyphicon glyphicon-check'></span> Add
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Modal form to delete a form -->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Are you sure you want to delete the following post?</h3>
                    <br />
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_delete" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="title_delete" disabled>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger delete" data-dismiss="modal">
                            <span id="" class='glyphicon glyphicon-trash'></span> Delete
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')
           
                    <!-- AJAX CRUD operations -->
       <script type="text/javascript">

           /* $("modal-body").on("click",".edit-product",function(e){
                alert("sdfhhf");
                $(this).parents("form").ajaxForm(options);
              });
            
            
              var options = { 
                complete: function(response) 
                {
                    if($.isEmptyObject(response.responseJSON.error)){
                        alert('edit Successfully.');
                    }else{
                        printErrorMsg(response.responseJSON.error);
                    }
                }
              };
            
            
              function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                });
              }
              */
              $(function(){
                  $('#myForm').submit(function(e){
                        e.preventDefault();

                        var data = $(this).serialize();

                        $.ajax({
                            url:'{{route('editproduct',$product->id)}}',
                            type:'post',
                            data:data,
                            success:function(response){
                                alert(response);
                            }
                        }).fail(function(res){
                            console.log(res);
                        });
                  });
              });
        </script>
        @endsection