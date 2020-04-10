@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-lg-12"></div>

        @if(Session::has('deleted_user'))

            <p class="bg-danger">{{session('deleted_user')}}</p>

        @endif

        <h1>Members</h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Number</th>
                <th>Member Name</th>
                <th>Adress</th>
                <th>Phone</th>
                <th>Package</th>
                <th>Join date</th>
                <th>Expired date</th></td>
            </tr>
            </thead>
            <tbody>
            @if($members)

                @foreach($members as $member)

                    <tr>
                        <td>{{$member->member_number}}</td>
                        <td><a href="{{route('admin.members.edit', $member->id)}}">{{$member->name}}</a></td>
                        <td>{{$member->address}}</td>
                        <td>{{$member->phone}}</td>
                        <td>{{$member->package->name}}</td>
                        <td>{{$member->created_at}}</td>
                        <td>{{$member->expired_date}}</td>
                        {{--<td>{{$member->pay == 1 ? 'Active' :  'No Active'}}</td>--}}
                    </tr>

                @endforeach

            @endif


            </tbody>
        </table>



    </div>
</div>
</div>

@endsection