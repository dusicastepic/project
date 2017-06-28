@extends('layouts/admin')



@section('content')

<h1>Dodaj korisnika</h1>


    {!! Form::open(['method'=>'post','action'=>'AdminUsersController@store','files'=>'true']) !!}
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
            {!! Form::select('is_active',array(0=>'Nije aktivan',1=>'Aktivan'),0, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">
        {!! Form::label('file','Naziv:') !!}
        {!! Form::file('file',null, ['class'=>'form-control']) !!}

        </div>
        <div class="form-group">
        {!! Form::label('password','Lozinka') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
        {!! Form::submit('Unesi korisnika',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

@include('includes/form_error')

@stop