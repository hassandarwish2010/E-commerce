@extends('seller.index')
@section('content')
<style>
h2{
        padding-left: 20px
      }

      table {
        margin-bottom: 20px;
        margin-top: 20px;
      }
      #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

      #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #FFB6C1;
                color: white;
            }
    </style>

    <div class="container">
    <div class="row" style="margin-top: 40px;margin-bottom: 30px">
            {{$product_num}}
        <div class="col-md-3" style="background: #ff6666;border-radius: 10px;height: 150px;margin-right: 60px;margin-left: 50px">
          <h2>ProductsNum </h2>
          <span style="color: #ffffff;margin-left: 100px;font-size: 25px">25</span>
        </div>

        <div class="col-md-3" style="background: #0080ff;border-radius: 10px;height: 150px;margin-right: 60px">
          <h2>ProductsNum</h2>
          <span style="color: #ffffff;margin-left: 100px;font-size: 25px">25</span>
        </div>

        <div class="col-md-3" style="background: #ff8000;border-radius: 10px;height: 150px;">
          <h2>ProductsNum</h2>
          <span style="color: #ffffff;margin-left: 100px;font-size: 25px">25</span>
         </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table id="customers">
                  <tr>
                    <th><h3>Email</h3></th>
                    <th><h3>Price</h3></th>
                    <th><h3>Date</h3></th>
                    <th><h3>View</h3></th>
                  </tr>
                  <tr>
                    <td>Alfreds</td>
                    <td>Maria </td>
                    <td>Germany</td>
                    <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-left: 40px">Action</button>
                    </td>

                  </tr>
                  <tr>
                    <td>Berglunds</td>
                    <td>Christinad</td>
                    <td>Sweden</td>
                    <td><button type="button" class="c btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-left: 40px">Action</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                    <td><button type="button" class="c btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-left: 40px">Action</button>
                    </td>
                  </tr>
            </table>
        </div>

    </div>
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <table id="customers">
                  <tr>
                    <th>product_id</th>
                    <th>order_id</th>
                    <th>order_details</th>
                    <th>order_details_quan</th>
                    <th>order_details_price</th>

                  </tr>
                  <tr>
                    <td>Alfreds</td>
                    <td>Maria </td>
                    <td>Germany</td>
                    <td>25</td>
                    <td>25</td>

                  </tr>
                  <tr>
                    <td>Berglunds</td>
                    <td>Christinad</td>
                    <td>Sweden</td>
                    <td>25</td>
                    <td>25</td>
                  </tr>
                  <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                    <td>25</td>
                    <td>25</td>
                  </tr>
            </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
  </div> 
</div>


@endsection
@section('script')
<script>
  

</script>
@endsection
