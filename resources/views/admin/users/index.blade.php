@extends('layouts.admin')

@section('content')

    <h1>Korisnici</h1>

 <table class="table table-striped">
     <thead>
       <tr>
           <th>ID</th>
           <th>Slika</th>
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
           <td><img height="50" width="70" src="{{$user->photo ? $user->photo->file : '/images/50x50.png'}}" alt="Nema sliku" ></td>
           <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
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