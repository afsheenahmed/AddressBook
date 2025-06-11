@extends('Admin.layout')
@section('content')

<div class="container" >
<h3>View All Users</h3>
<table class="table table-striped">
    <tr>
        <th>S.No</th>
        
        <th>Name</th>
        
        <th>Email</th>
         <th>Operation</th>
       

        
        
    </tr>
    @foreach($r as $rec)
    <tr>
        <td>{{$rec->id}}</td>
        <td>{{$rec->name}}</td>
        <td>{{$rec->email}}</td>
       
<td>
   
    <form method="post" action="/delete/{{$rec->id}}">
        @csrf
     <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    
</td>
    </tr>

    @endforeach
</table>

</div>

   @endsection