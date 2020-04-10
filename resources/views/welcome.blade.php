@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to GMSystem</div>

                <div class="panel-body">
                You are logout, click here to login in admin dashboard<br>
                   <a href="/admin">Admin</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
