@extends('layouts.dashboard')


@section('content')

    <div class="col-sm-6 col-lg-12">
        <h1>Payments</h1>

        @if($payments)

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Invoice number</th>
                    <th>Member name</th>
                    <th>Package Name</th>
                    <th>Price</th>
                    <th>Is paid</th>
                    <th>Date of payment</th>

                </tr>
                </thead>
                <tbody>

                @foreach($payments as $payment)

                    <tr>
                        <td>WC-{{$payment->id}}</td>
                        <td>{{$payment->member->name}}</td>
                        <td>{{$payment->package->name}}</td>
                        <td>{{$payment->price}}</td>
                        <td>{{$payment->is_paid == 0 ? 'No' :  'Yes'}}</td>
                        <td>{{$payment->payment_date}}</td>
                        <td><a href="{{route('admin.payments.edit', $payment->id)}}"><button type="button" class="btn btn-info btn-sm">Info</button></a> </td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        @endif


    </div>




@stop