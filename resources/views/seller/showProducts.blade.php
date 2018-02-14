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
                <a href="#" class="add-modal"><li>Add a prroduct</li></a>
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
                                        <button class="show-modal btn btn-success" data-id="{{$product->id}}" data-title="{{$product->product_serial_num}}" data-content="{{$product->style->style_name}}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                        <button class="edit-modal btn btn-info" data-id="{{$product->id}}" data-title="{{$product->style->style_name}}" data-content="{{$product->style->style_name}}">
                                        <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button class="delete-modal btn btn-danger" data-id="{{$product->id}}" data-title="{{$product->style->style_name}}" data-content="{{$product->style->style_name}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                    </td>
                                </tr>
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

	<!-- Modal form to show a post -->
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

	<!-- Modal form to edit a form -->
    <div id="editModal" class="modal fade" role="dialog">
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
                                <input type="text" class="form-control" id="id_edit" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title_edit" autofocus>
                                <p class="errorTitle text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Content:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="content_edit" cols="40" rows="5"></textarea>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                            <span class='glyphicon glyphicon-check'></span> Edit
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

            // add a new post
            $(document).on('click', '.add-modal', function() {
                $('.modal-title').text('Add');
                $('#addModal').modal('show');
              console.log("add product1");
 
            });
            $(function(){
                $.ajaxSetup({
                    headers: {
                        'X-XSRF-Token': $('meta[name="_token"]').attr('content')
                    }
                })
            })
            $('.modal-footer').on('click', '.add', function() {
              console.log("add product2");
              
                $.ajax({
                     headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                    type: 'POST',
                    url:'products',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'product_serial_num': $('#serial').val(),
                        'product_price': $('#price').val(),
                        'product_desc': $('#desc').val(),
                        'product_quan': $('#Quantity').val()
                  },
                    success: function(data) {
                        $('.errorTitle').addClass('hidden');
                        $('.errorContent').addClass('hidden');
    
                        if ((data.errors)) {
                            setTimeout(function () {
                                $('#addModal').modal('show');
                                toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                            }, 500);
                        } else {
                            toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
                           
                        }
                    },
                });
            });
    
            // Show a post
            $(document).on('click', '.show-modal', function() {
                $('.modal-title').text('Show');
                $('#id_show').val($(this).data('id'));
                $('#title_show').val($(this).data('title'));
                $('#content_show').val($(this).data('content'));
                $('#showModal').modal('show');
            });
    
    
            // Edit a post
            $(document).on('click', '.edit-modal', function() {
                $('.modal-title').text('Edit');
                $('#id_edit').val($(this).data('id'));
                $('#title_edit').val($(this).data('title'));
                $('#content_edit').val($(this).data('content'));
                id = $('#id_edit').val();
                $('#editModal').modal('show');
            });
            $('.modal-footer').on('click', '.edit', function() {
                $.ajax({
                    type: 'PUT',
                    url: 'posts/' + id,
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $("#id_edit").val(),
                        'title': $('#title_edit').val(),
                        'content': $('#content_edit').val()
                    },
                    success: function(data) {
                        $('.errorTitle').addClass('hidden');
                        $('.errorContent').addClass('hidden');
    
                        if ((data.errors)) {
                            setTimeout(function () {
                                $('#editModal').modal('show');
                                toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                            }, 500);
    
                            if (data.errors.title) {
                                $('.errorTitle').removeClass('hidden');
                                $('.errorTitle').text(data.errors.title);
                            }
                            if (data.errors.content) {
                                $('.errorContent').removeClass('hidden');
                                $('.errorContent').text(data.errors.content);
                            }
                        } else {
                            toastr.success('Successfully updated Post!', 'Success Alert', {timeOut: 5000});
                            $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td class='col1'>" + data.id + "</td><td>" + data.title + "</td><td>" + data.content + "</td><td class='text-center'><input type='checkbox' class='edit_published' data-id='" + data.id + "'></td><td>Right now</td><td><button class='show-modal btn btn-success' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-eye-open'></span> Show</button> <button class='edit-modal btn btn-info' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
    
                            
                            $('.col1').each(function (index) {
                                $(this).html(index+1);
                            });
                        }
                    }
                });
            });
            
            // delete a post
             $(document).on('click', '.delete-modal', function() {
                $('.modal-title').text('Delete');
                $('#id_delete').val($(this).data('id'));
                $('#title_delete').val($(this).data('title'));
                $('#deleteModal').modal('show');
                id = $('#id_delete').val();
            });
            $('.modal-footer').on('click', '.delete', function() {
                $.ajax({
                    type: 'DELETE',
                    url: 'products/' + id,
                    data: {
                        '_token': $('input[name=_token]').val(),
                    },
                    success: function(data) {
                        toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
                        $('.item' + data['id']).remove();
                        $('.col1').each(function (index) {
                            $(this).html(index+1);
                        });
                    }
                });
            });
        </script>
        @endsection