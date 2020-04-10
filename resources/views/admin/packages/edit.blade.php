@extends('layouts.dashboard')

@section('content')


        <div class="col-sm-6">
            <h2>Edit Package</h2>

            {!! Form::model($packages, ['method'=>'PATCH', 'action'=> ['AdminPackageController@update', $packages->id]]) !!}

            {{ csrf_field() }}


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
                {!! Form::submit('Update Package', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

            {!! Form::close() !!}



            {{--delete method--}}
            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPackageController@destroy', $packages->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete Package', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

            {!! Form::close() !!}


        </div>

    <div class="row">
        @include('includes.form_error')

    </div>



@endsection