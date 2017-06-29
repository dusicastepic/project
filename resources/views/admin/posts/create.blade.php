@extends('layouts/admin')


@section('content')

    <h1>Kreiraj objavu</h1>

    <div class="row"></div>
    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>'true']) !!}
        <div class="form-group">
        {!! Form::label('title','Naziv') !!}
        {!! Form::text('title',null, ['class'=>'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('category_id','Kategorija') !!}
            {!! Form::select('category_id',array(''=>'opcije'),null, ['class'=>'form-control']) !!}

        </div>

         <div class="form-group">
            {!! Form::label('photo_id','Slika') !!}
            {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}

        </div>

         <div class="form-group">
            {!! Form::label('body','Opis ') !!}
            {!! Form::textarea('body',null, ['class'=>'form-control']) !!}

        </div>


    <div class="form-group">
        {!! Form::submit('Unesi',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    <div class="row">
        @include('includes/form_error')
    </div>
@stop