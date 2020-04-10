@extends('layouts.dashboard')

@section('content')
    <div class='row'>
        <div class='col-md-6'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Summary</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    @foreach($tasks as $task)
                        <h5>
                            {{ $task['name'] }}
                            <small class="label label-{{$task['color']}} pull-right">{{$task['progress']}}</small>
                        </h5>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-{{$task['color']}}" style="width: {{$task['progress']}}%"></div>
                        </div>
                    @endforeach

                </div><!-- /.box-body -->

            </div><!-- /.box -->
        </div><!-- /.col -->

        <div class='col-md-6'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Expired members today:</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Expired date</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if($expiredMembers)
                                @foreach($expiredMembers as $expiredmember)

                            <tr>
                                <td>{{$expiredmember->member_number}}</td>
                            <td>{{$expiredmember->name}}</td>
                                <td>{{$expiredmember->expired_date}}</td>
                                <td><a href="{{route('admin.members.edit', $expiredmember->id)}}"><button type="button" class="btn btn-danger btn-xs">View</button></a></td>
                            </tr>
                                @endforeach
                            </tbody>

                        </table>



                        @forelse ($expiredMembers as $expiredmember)
                        @empty
                            <p>No expired members</p>
                            @endforelse
                    @endif
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->

        <div class='col-md-6'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">New members today:</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">


                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Package</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if($newMembers)
                                    @foreach($newMembers as $newMember)
                                <tr>
                                    <td>{{$newMember->member_number}}</td>
                                    <td>{{$newMember->name}}</td>
                                    <td>{{$newMember->package->name}}</td>
                                    <td><a href="{{route('admin.members.edit', $newMember->id)}}"><button type="button" class="btn btn-danger btn-xs">View</button></a></td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>




                        @forelse ($newMembers as $newMember)
                        @empty
                            <p>No new members today</p>
                        @endforelse
                    @endif

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->



    </div><!-- /.row -->
@endsection