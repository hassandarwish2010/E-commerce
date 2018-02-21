@extends('seller.index')
@section('style')
<style>
.panel-shadow {
    box-shadow: 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12), 0 5px 5px -3px rgba(0, 0, 0, .2);
}
</style>
@endsection
@section('content')
<h1 class="text-center">Add Product:</h1>
<form action="#" class="form-horizontal" onkeypress="return event.keyCode != 13;">
<!--Main Details About Product-->
  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
      <div class="panel panel-success panel-shadow">
        <div class="panel-heading">Main Details About Product</div>
        <div class="panel-body">
          <div class="row">
            <!-- -->
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-2" for="style">Style:</label>
                <div class="col-sm-10">
                  <input class="form-control"  list="style" name="style"  placeholder="Enter style For Product">
                  <datalist id="style">
                      <option value="Volvo">
                      <option value="BMW">
                      <option value="Bugatti">
                      <option value="Cadillac">
                      <option value="Chevrolet">
                      <option value="Chrysler">
                  </datalist>
                </div>
              </div>
            </div>

             <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-2" for="material">Material:</label>
                <div class="col-sm-10">
                  <select class="form-control" id="material">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-2" for="serial">Serial:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="serial" placeholder="Enter serial For Product">
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-2" for="price">Price:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="price" placeholder="Enter price For Product">
                </div>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-3" for="desc">Descirption:</label>
                <div class="col-sm-9">
                  <textarea rows="4" cols="50" class="form-control" id="desc" placeholder="Enter Descirption For Product"></textarea>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-2" for="sale">Sale:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="sale" placeholder="Enter sale For Product">
                </div>
              </div>

              
                <div class="form-group">
                  <div style="position:relative;">
                      <a class='btn btn-primary' href='javascript:;'>
                        Choose File...
                        <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                      </a>
                      &nbsp;
                      <span class='label label-info' id="upload-file-info"></span>
                    </div>
                </div>
              
            </div>

          </div>

          <div class="row">

            <div class="col-md-12 col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-1" for="tag">Tags:</label>
                <div class="col-sm-11">
                  <input type="text" value="" data-role="tagsinput" id="tag" placeholder="Add tags" />
                </div>
              </div>
            </div>

           

          </div>
       


        </div>
      </div>    
    </div>
    <div class="col-md-1">
    </div>
  </div>
  <!-- for dresses and shirts -->
  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
      <div class="panel panel-warning panel-shadow">
        <div class="panel-heading">for dresses and shirts</div>
        <div class="panel-body">
          <div class="row">
            <!-- -->
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-2" for="sleeve">Sleeve Length:</label>
                <div class="col-sm-10">
                  <select class="form-control" id="sleeve">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div>

             <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-2" for="length">Length:</label>
                <div class="col-sm-10">
                  <select class="form-control" id="length">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <!-- -->
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-2" for="Neck">Neck Style:</label>
                <div class="col-sm-10">
                  <select class="form-control" id="Neck">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div>

             <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-2" for="occasion">Occasion:</label>
                <div class="col-sm-10">
                  <select class="form-control" id="occasion">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div> 
    </div>   
    <div class="col-md-1">
    </div>
  </div>

  <!-- for dresses and shirts -->
  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
      <div class="panel panel-warning panel-shadow">
        <div class="panel-heading">Add Featurs</div>
        <div class="panel-body">
          <div class="row">
           

            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-2" for="color">Color:</label>
                <div class="col-sm-10">
                  <input type="color" class="form-control" id="color" >
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-2" for="sizes">Sizes:</label>
                <div class="col-sm-10">
                 <input class="form-control"  list="sizes" name="sizes"  placeholder="Enter Size For Color">
                  <datalist id="sizes" multiple>
                    <option value="s">
                    <option value="m">
                    <option value="l">
                    <option value="xl">
                    <option value="xxl">
                    <option value="xxxl">
                  </datalist>
                </div>
              </div>
            </div>
            <div class="pull-right ">
              <input type="submit" value="submit" class="btn btn-success csenter" width="100%">
            </div>
          </div>
            
          
        </div>
      </div> 
    </div>   
    <div class="col-md-1">
    </div>
  </div>
  

</form>




@endsection

@section('script')


<script>
function myFunction() {
    var x = document.getElementById("select1").value;
    
    if(x=='other')
    {
        console.log(x);
        $("#style").removeAttr('hidden');
        
    }
}
</script>
@endsection