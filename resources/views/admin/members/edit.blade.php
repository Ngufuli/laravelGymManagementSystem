@extends('layouts.dashboard')

@section('content')
    <h2>Edit member page</h2>


    <div class="row">

        <div class="col-sm-12">


            {!! Form::model($members, ['method'=>'PATCH', 'action'=> ['AdminMembersController@update', $members->id], 'files'=>true]) !!}

            {{ csrf_field() }}

            <div class="form-group">
                {!! Form::label('member_number', 'Member Number:') !!}
                {!! Form::number('member_number', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('address', 'Adress:') !!}
                {!! Form::text('address', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('phone', 'Phone:') !!}
                {!! Form::text('phone', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('package_id', 'Package:') !!}
                {!! Form::select('package_id', $packages , null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('created_at', 'Join date:') !!}
                {!! Form::date('created_at', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('expired_date', 'Expired date:') !!}
                {!! Form::date('expired_date', null, ['class'=>'form-control'])!!}
            </div>



            {{--<div class="form-group">--}}
                {{--{!! Form::label('is_active', 'Status:') !!}--}}
                {{--{!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active' ), null, ['class'=>'form-control'])!!}--}}
            {{--</div>--}}


            <div class="form-group">
                {!! Form::submit('Update Member', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

            {!! Form::close() !!}


            {{--////delete form--}}
            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminMembersController@destroy', $members->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete Member', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

            {!! Form::close() !!}


        </div>
    </div>

    <div class="row">
        @include('includes.form_error')

    </div>



@endsection