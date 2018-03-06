@extends('seller.index')
@section('style')
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
 
        .panel-shadow {
            box-shadow: 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12), 0 5px 5px -3px rgba(0, 0, 0, .2);
        }


        {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: #904a4a;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        }

        /* Position the "next button" to the right */
        .next {
        right: 0;
        border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
        background-color: #717171;
        }

        /* Fading animation */
        .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }

        @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
        }
    </style>
@endsection
@section('content')

<?php 
print_r($group_name);
?>

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
                           @if($product->style->category->categ_name == $categ_name and $product->style->category->groups[0]->group_name == $group_name)
                            {{--  {{$product->colors[0]->sizes[0]->size_name}}  --}}
                                <tr class="item{{$product->id}}">
                                    <td class="col1">{{ $indexKey+1 }}</td>
                                    <td>{{$product->product_serial_num}}</td>
                                    <td>{{$product->style->style_name}}</td>
                                    <td>{{$product->product_desc}}</td>
                                    <td>{{$product->material->mater_name}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td>{{$product->product_price_sale}}</td>
                                    
                                    
                                     <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $product->updated_at)->diffForHumans() }}</td>
                                    <td>
                                        <button class="show-modal btn btn-success" data-id="{{$product->id}}" data-serial="{{$product->serial}}" data-content="{{$product->style}}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>

                                        <button class="edit-modal btn btn-info" data-id="{{$product->id}}" >
                                        <span class="glyphicon glyphicon-edit"></span> </button>

                                        <button class="delete-modal btn btn-danger" data-id="{{$product->id}}" data-title="{{$product->style}}" data-content="{{$product->style}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                    </td> 
                                </tr>
                               
                            </div>

                               @endif
                           
                        @endforeach
                       
                    </tbody>
                </table>
              
                    
        </div><!-- /.panel-body -->
        {{--  <div style="color:yellowpp">color test</div>  --}}
    </div><!-- /.panel panel-default -->
</div>
<!-- /.col-md-8 -->
<!--  -->


@endsection
@section('script')
<script>
function fun(){
    alert('tony');
       $('.modal-title').text('Delete');
        //$('#id_delete').val($(this).data('id'));

        $('#price_delete').val($(this).data('price'));
        $('#style_delete').val($(this).data('style'));
        $('#quan_delete').val($(this).data('quan'));
        $('#sale_delete').val($(this).data('sale'));
        $('#serial_delete').val($(this).data('serial'));
        $('#deleteModal').modal('show');
        id = $('#id_delete').val();
}
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
console.log($(this).data('color')[0].color_name);
    
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
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

@endsection
