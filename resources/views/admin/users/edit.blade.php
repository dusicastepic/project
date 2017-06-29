@extends('layouts/admin')



@section('content')

    <h1>Izmeni korisnika</h1>

    <div class="row">

    </div>

    <div class="col-sm-3">

        <img src="{{$user->photo ? $user->photo->file : '/images/400x400.png'}}" alt="" class="img-responsive img-rounded">
    </div>


    <div class="col-sm-9">
    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>'true']) !!}
    <div class="form-group">
        {!! Form::label('name','Ime') !!}
        {!! Form::text('name',null, ['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::email('email',null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('role_id','Uloga') !!}
        {!! Form::select('role_id', $roles, null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('is_active','Status') !!}
        {!! Form::select('is_active',array(0=>'Nije aktivan',1=>'Aktivan'),null, ['class'=>'form-control']) !!}

    </div>


    <div class="form-group">
        {!! Form::label('photo_id','Naziv:') !!}
        {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('password','Lozinka') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::submit('Izmeni korisnika',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    </div>

    <div class="row"></div>
    <div class="row">
    @include('includes/form_error')
    </div>
@stop