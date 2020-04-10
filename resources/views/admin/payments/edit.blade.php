@extends('layouts.dashboard')

@section('content')
    <h2>Edit Payment</h2>


    <div class="row">

        <div class="col-sm-12">


            {!! Form::model($payments, ['method'=>'PATCH', 'action'=> ['AdminPaymentsController@update', $payments->id]]) !!}

            {{ csrf_field() }}

            <div class="form-group">
                {!! Form::label('member_id', 'Member:') !!}
                {!! Form::select('member_id', $members , null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('package_id', 'Package:') !!}
                {!! Form::select('package_id', $packages , null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('price', 'Price:') !!}
                {!! Form::number('price', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('is_paid', 'Paid:') !!}
                {!! Form::select('is_paid',array(1 => 'Yes', 0 => 'No' ), null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('payment_date', 'Payment date:') !!}
                {!! Form::date('payment_date', null, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::submit('Update Payment', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

            {!! Form::close() !!}


            {{--////delete form--}}
            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPaymentsController@destroy', $payments->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete Payment', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

            {!! Form::close() !!}


        </div>
    </div>

    <div class="row">
        @include('includes.form_error')

    </div>



@endsection