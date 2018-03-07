@extends('admin.index')
@section('content')


    <div class="row col-xs-12 custyle">
    <table class="table table-striped custab">
    <thead>
       
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>body</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach ($massages as $user)
        
   
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <th>{{$user->subject}}</th>
                <th>{{$user->body}}</th>
               
                <td class="text-center"> <a href="{{route('deletemassage',['id'=>$user->id])}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            @endforeach

            
    </table>
    </div>

    
@endsection