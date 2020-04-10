@extends('layouts.dashboard')


@section('content')


    <div class="col-sm-6">

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminPackageController@store']) !!}


    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::text('description', null, ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::label('price', 'Price:') !!}
            {!! Form::number('price', null, ['class'=>'form-control'])!!}
        </div>



    <div class="form-group">
        {!! Form::submit('Create New Packages', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


</div>

@stop