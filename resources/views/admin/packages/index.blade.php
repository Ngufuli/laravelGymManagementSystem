@extends('layouts.dashboard')


@section('content')



    <div class="col-sm-6 col-lg-12">
        <h1>Packages</h1>

        @if($packages)

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>

                @foreach($packages as $package)


                    <tr>
                        <td>{{$package->id}}</td>
                        <td><a href="{{route('admin.packages.edit', $package->id)}}"> {{$package->name}}</a></td>
                        <td>{{$package->description}}</td>
                        <td>{{$package->price}}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        @endif


    </div>




@stop