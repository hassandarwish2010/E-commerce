<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5 - Ajax Image Uploading Tutorial</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script>
</head>
<body>


<div class="container">
  <h1>Laravel 5 - Ajax Image Uploading Tutorial</h1>


  <form action="{{ route('ajaxImageUpload') }}" enctype="multipart/form-data" method="POST">


  	<div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>


    <input type="hidden" name="_token" value="{{ csrf_token() }}">


    <div class="form-group">
      <label>Alt Title:</label>
      <input type="text" name="title" class="form-control" placeholder="Add Title">
    </div>


	<div class="form-group">
      <label>Image:</label>
      <input type="file" name="image" class="form-control">
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="serial">serial:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="product_serial_num" id="serial" autofocus>
            <small>serial number </small>
            <p class="errorserial text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="price">price:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="product_price" id="price" >
            <small>price number </small>
            <p class="errorprice text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="desc">desc:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="product_desc" id="desc" >
            <small>desc  </small>
            <p class="errordesc text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Quantity">Quantity:</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="product_quan" id="Quantity" >
            <small>Quantity  </small>
            <p class="errorQuantity text-center alert alert-danger hidden"></p>
        </div>
    </div>
    <input type="hidden" class="form-control" name="style_id" id="style_id" value="1">
    <input type="hidden" class="form-control" name="comp_id"  id="comp_id" value="1">
    <input type="hidden" class="form-control" name="mater_id" id="mater_id" value="1">


    <div class="form-group">
      <button class="btn btn-success upload-image" type="submit">Upload Image</button>
    </div>


  </form>


</div>


<script type="text/javascript">
  $("body").on("click",".upload-image",function(e){
    $(this).parents("form").ajaxForm(options);
  });


  var options = { 
    complete: function(response) 
    {
    	if($.isEmptyObject(response.responseJSON.error)){
    		$("input[name='title']").val('');
            alert('Image Upload Successfully.');
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
</script>


</body>
</html>