@extends('layouts.master')

@section('content')


<div class="bg-img" style="background: url('images/4.jpg') no-repeat center; background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover;"></div>
<div class="bg-img-overlay"></div>
<section class="top-section margin-30">
  <div class="container">
    <!-- <div class="row">
    <a href="{{ url('/') }}"><img class="center-block"  src="images/nav-logo.png"/></a>
  </div> -->

  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center">My profile</h2><br>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="row dark-gray-bg margin-30">
        <br>

        <form class="form-horizontal" role="form" method="GET" action="">

          <div class=" col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 ">
            <table class="table table-user-information">
              <tbody>
                <tr>
                  <td>Name:</td>
                  <td>{{$user->getFullName() }}</td>
                </tr>
                <tr>
                  <td>E-mail:</td>
                  <td>{{ $user->email }}</td>
                </tr>
                <tr>
                  <td>Date of Birth:</td>
                  <td>{{ $user->bday }}</td>
                </tr>
                <tr>
                  <td>Phone number</td>
                  <td>{{ $user->phone }}</td>
                </tr>
                <tr>
                  <td>Home Address</td>
                  <td>{{ $user->address }} <br /> {{ $user->city }} <br /> {{ $user->zipcode }} {{ $user->country }}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-5">
              <a class="btn btn-primary" href="/profile/edit">Edit</a>
            </div>
          </div>
        </form>



      </div>
    </div>
  </div>

</div>
</section>






@endsection
