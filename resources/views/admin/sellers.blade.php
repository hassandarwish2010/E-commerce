@extends('admin.index')
@section('content')

    <div class="row col-xs-12 custyle">
    <table class="table table-striped custab">
    <thead>
       
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>comp_id</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach ($sellers as $seller)
        
   
            <tr>
                <td>{{$seller->id}}</td>
                <td>{{$seller->name}}</td>
                <td>{{$seller->email}}</td>
                <th>{{$seller->address}}</th>
                <th>{{$seller->phone}}</th>
                <th>{{$seller->comp_id}}</th>
                <td class="text-center"> <a href="{{route('deleteseller',['id'=>$seller->id])}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            @endforeach
    </table>
    </div>

    
@endsection