@extends('layouts.adminmaster')

@section('Admin shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="container">
        <div class="row">
        <h1>Users | Admin</h1>
        <div class="row">
            <div class="col-md-6">
                <a href="/admin/user/new"><button class="btn btn-success">New User</button></a>
            </div>
        </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Birth day</td>
                    <td>Phone</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>City</td>
                    <td>Zip</td>
                    <td>Country</td>
                    <th>Role</th>
                    <td></td>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->getFullName() }}</td>
                            <td>{{$user->bday}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->city}}</td>
                            <td>{{$user->zipcode}}</td>
                            <td>{{$user->country}}</td>
                            @if ($user->isAdmin())
                            <td>Admin</td>
                            @else <td>User</td>
                            @endif
                            <td><a href="/admin/user/destroy/{{$user->id}}"><button class="btn btn-danger">Delete</button></a> </td>
                            <td><a href="/admin/user/{{$user->id}}/edit"><button class="btn btn-primary">Edit</button></a> </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
