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
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach ($users as $user)
        
   
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <th>{{$user->address}}</th>
                <th>{{$user->phone}}</th>
               
                <td class="text-center"><a href="{{route('deleteuser',['id'=>$user->id])}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            @endforeach

            
    </table>
    </div>

    
@endsection