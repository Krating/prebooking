@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blacklist</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="class col-md-11">
            <div class="panel-heading">
                <h2>Blacklists</h2>
            </div>
            <div class="panel-body">

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <table class="table table-striped table-responsive">
                    <thead>
                        <th>#</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($admins as $key=> $admin)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $admin->first_name }}</td>
                            <td>{{ $admin->last_name }}</td>
                            <td>
                                {!! Form::open(['method'=>'DELETE', 'route'=>['admin.destroy',$admin->id]]) !!}
                                {!! Form::submit('Unblock', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        </div>
    </div>
</body>
</html>
@endsection