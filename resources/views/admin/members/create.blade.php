@extends('layouts.dashboard')

@section('content')


    <h1>Create New Member</h1>


    {!! Form::open(['method'=>'POST', 'action'=> 'AdminMembersController@store', 'files'=>true]) !!}

    {{ csrf_field() }}

    <div class="form-group">
        {!! Form::label('member_number', 'Member Number:') !!}
        {!! Form::number('member_number', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('package_id', 'Package:') !!}
        {!! Form::select('package_id',['' => 'Choose Options'] + $packages , null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Addres:') !!}
        {!! Form::text('address', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('created_at', 'Join date:') !!}
        {!! Form::date('created_at', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('expired_date', 'Expired date:') !!}
        {!! Form::date('expired_date', null, ['class'=>'form-control'])!!}
    </div>



    <div class="form-group">
        {!! Form::submit('Create Member', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    @include('includes.form_error')



@endsection