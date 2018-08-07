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
          
        <div class="col-md-3" style="background: #ff6666;border-radius: 10px;height: 150px;margin-right: 60px;margin-left: 50px">
          <h2>ProductsNum </h2>
          <span style="color: #ffffff;margin-left: 100px;font-size: 25px">{{$product_num}}</span>
        </div>

        <div class="col-md-3" style="background: #0080ff;border-radius: 10px;height: 150px;margin-right: 60px">
          <h2>totalPrice</h2>
          <span style="color: #ffffff;margin-left: 100px;font-size: 25px">{{ $totalPrice }}</span>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <table id="customers">
                  <tr>
                    <th><h3>Email</h3></th>
                    <th><h3>name</h3></th>
                    <th><h3>adderss</h3></th>
                    <th><h3>View</h3></th>
                  </tr>
                  @foreach ($users as $user)
                  <tr>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->name}}</td>
                      <td>{{ $user->address }}</td>
                      <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-left: 40px">Action</button>
                      </td> 
                  @endforeach
                 

                  </tr>
              
            </table>
        </div>

    </div>
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->

</div>


@endsection
@section('script')
<script>
  

</script>
@endsection
