
@extends('admin.index')
@section('content')


<div class="container_fluid">
<div class="row">
<div class="col-md-4">


    <div style="background-color:#e542f3; text-align:center; padding:50px 0px; margin-top:20px; font-size:25px" ><i class="fa fa-shopping-cart" style="font-size:60px;color:#2e1b6d;margin-right:10%;"></i>{{$product}} products</div> 



</div>

<div class="col-md-4">


    <div style="background-color:#3c63e2;text-align:center; padding:50px 0px; margin-top:20px;font-size:25px"><i class="fa fa-user" style="font-size:60px;color:red;margin-right:10%;"></i>{{$user}} users</div> 



</div><div class="col-md-4">


    <div style="background-color:#7c32b5;text-align:center; padding:50px 0px; margin-top:20px;font-size:25px"><i class="fa fa-paw" style="font-size:60px;color:#060504;margin-right:10%;"></i>
{{$seller}} sellers</div> 



</div>


</div>



</div>



@endsection