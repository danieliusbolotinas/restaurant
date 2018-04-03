@extends('layouts.adminmaster')

@section('Admin shop', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')

<div class="container">
  <div class="row">
    <h1>Table Reservations | Admin</h1>
    <div class="col-md-12">
      <table class="table table-striped">
        <thead>
          <td>Id</td>
          <td>Name</td>
          <td>Phone</td>
          <td>Seats</td>
          <td>Date</td>
          <td>Time</td>
          <td></td>
        </thead>
        <tbody>
          @foreach ($reservations as $reservation)
          <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->name}}</td>
            <td>{{$reservation->phone}}</td>
            <td>{{$reservation->seats}}</td>
            <td>{{$reservation->reservation_start}}</td>
            <td>{{$reservation->time}}</td>

            <td><a href="/admin/reservation/destroy/{{$reservation->id}}"><button class="btn btn-danger">Delete</button></a> </td>
            <td><a href="/admin/reservation/{{$reservation->id}}/edit"><button class="btn btn-primary">Edit</button></a> </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
