@extends('layouts/admin')


@section('content')

    <h1>Objave</h1>
 <table class="table table-striped">
     <thead>
       <tr>
         <th>ID</th>
           <th>Slika</th>
         <th>Korisnik</th>
           <th>Kategorija</th>
           <th>Nalov</th>
           <th>Sadrzaj</th>
           <th>Tagovi</th>
            <th>Kreiran</th>
           <th>Izmenjen</th>
       </tr>
     </thead>
     <tbody>
@if($posts)
     @foreach($posts as $post)
       <tr>
         <td> {{$post->id}}</td>
           <td><img height="70" width="90" src="{{$post->photo ? $post->photo->file : '/images/50x50.png'}}" alt="Nema sliku" ></td>
           <td> {{$post->user->name}}</td>
           <td> {{$post->category_id}}</td>
           <td> {{$post->title}}</td>
           <td> {{$post->body}}</td>
           <td> {{$post->tags}}</td>
           <td> {{$post->created_at->diffForHumans()}}</td>
           <td> {{$post->updated_at->diffForHumans()}}</td>
       </tr>

     @endforeach

@endif
     </tbody>
   </table>
@stop