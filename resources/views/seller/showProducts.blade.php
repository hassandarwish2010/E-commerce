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
                <a href="{{ route('addproduct',array('categ_name'=>$categ_name,
                'group_name'=>$group_name,'comp_id'=>$comp_id)) }}"
                 class="btn btn-info">Add a prroduct</a>
            </ul>
        </div>
    
        <div class="panel-body">
                <table class="table table-striped table-bordered table-hover table-responsive" id="productTable">
                    <thead>
                        <tr>
                            <th valign="middle">#</th>
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
                        @foreach($products as $indexKey => $product)
                            
                                <tr class="item{{$product->id}}">
                                    <td class="col1">{{ $indexKey+1 }}</td>
                                    <td>{{$product->serial}}</td>
                                    <td>{{$product->style}}</td>
                                    <td>{{$product->desc}}</td>
                                    <td>{{$product->material}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->sale}}</td>
                                    
                                    
                                     <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $product->update)->diffForHumans() }}</td>
                                    <td>
                                        <button class="show-modal btn btn-success" data-id="{{$product->id}}" data-serial="{{$product->serial}}" data-content="{{$product->style}}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>

                                        <button class="edit-modal btn btn-info" data-id="{{$product->id}}" >
                                        <span class="glyphicon glyphicon-edit"></span> Edit</button>

                                        <button class="delete-modal btn btn-danger" data-id="{{$product->id}}" data-title="{{$product->style}}" data-content="{{$product->style}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                    </td> 
                                </tr>
                               
                            </div>

                           
                        @endforeach
                       
                    </tbody>
                </table>
              
                    
        </div><!-- /.panel-body -->
    </div><!-- /.panel panel-default -->
</div>
<!-- /.col-md-8 -->
<!--  -->


@endsection
@section('script')
<script>
    // Show a product
    $(document).on('click', '.show-modal', function() {
        $('.modal-title').text('Show');
        $('#id_show').val($(this).data('id'));
        $('#price_show').val($(this).data('price'));
        $('#style_show').val($(this).data('style'));
        $('#quan_show').val($(this).data('quan'));
        $('#sale_show').val($(this).data('sale'));
        $('#serial_show').val($(this).data('serial'));
        $('#showModal').modal('show');
    });
    // Edit a product
    $(document).on('click', '.edit-modal', function() {
        alert('sdfdf');
        $('.modal-title').text('Edit');
        $('#id_show').val($(this).data('id'));
        $('#price_show').val($(this).data('price'));
        $('#style_show').val($(this).data('style'));
        $('#quan_show').val($(this).data('quan'));
        $('#sale_show').val($(this).data('sale'));
        $('#serial_show').val($(this).data('serial'));
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
    // delete a product
    $(document).on('click', '.delete-modal', function() {
        $('.modal-title').text('Delete');
        $('#id_delete').val($(this).data('id'));
        $('#price_delete').val($(this).data('price'));
        $('#style_delete').val($(this).data('style'));
        $('#quan_delete').val($(this).data('quan'));
        $('#sale_delete').val($(this).data('sale'));
        $('#serial_delete').val($(this).data('serial'));
        $('#deleteModal').modal('show');
        id = $('#id_delete').val();
    });
    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'DELETE',
            url: 'deleteproduct/' + id,
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
