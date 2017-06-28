@extends('layouts.admin')

@section('content')

    <h1>Korisnici</h1>

 <table class="table table-striped">
     <thead>
       <tr>
         <th>ID</th>
         <th>Ime</th>
         <th>Email</th>
           <th>Uloga</th>
           <th>Status</th>
           <th>Dodat</th>
           <th>Izmenjen</th>
       </tr>
     </thead>
     <tbody>

     @if($users)

         @foreach($users as $user)
       <tr>
         <td>{{$user->id}}</td>
         <td>{{$user->name}}</td>
         <td>{{$user->email}}</td>
           <td>{{$user->role->name}}</td>
           <td>{{$user->is_active==1 ?'Aktivan':'Nije aktivan'}}</td>
           <td>{{$user->created_at->diffForHumans()}}</td>
           <td>{{$user->updated_at->diffForHumans()}}</td>
       </tr>
         @endforeach

         @endif

     </tbody>
   </table>

@stop