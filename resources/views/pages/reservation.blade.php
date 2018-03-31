@extends('layouts.master')

@section('Digital shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')

<div class="bg-img" style="background: url('images/9.jpg') no-repeat center; background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover;"></div>
<div class="bg-img-overlay"></div>

<!-- <section class="top-section margin-30">
  <div class="container">
    <div class="row">
      <a href="{{ url('/') }}"><img class="center-block"  src="images/nav-logo.png"/></a>
    </div> -->

    <div class="row margin-20">
      <div class="col-sm-12">
        <h2 class="text-center">Reservations</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <p>At Restaurant, we encourage you to make reservations up to 2 days in advance.</p>
        <br>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="row dark-gray-bg margin-30">
          <br>
          <form method="POST" action="/admin/reservation/store" enctype="multipart/form-data" role="form">
          {!! csrf_field() !!}
          <fieldset>

            <div id="name" class="form-group col-xs-12 margin-20">
              <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="text">
            </div>

            <div id="phone" class="form-group col-xs-12 margin-20">
                <input id="phone" name="phone" type="text" placeholder="Phone +370 xxx xxxxx" class="form-control input-md" required="text">
            </div>

            <div id="date" class="form-group col-xs-12 margin-20">
                <input id="from-datepicker" name="reservation_start" placeholder="Reservation Date" class="form-control datepicker" required="" type="text">
            </div>

                <div class="form-group select-wrapper col-sm-4 col-xs-6 margin-20">
                    <select class="form-control select" name="time" required="">
                        <option value="">Please select</option>
                        <option value="11:30am">11:30 am</option>
                        <option value="12:00pm">12:00 pm</option>
                        <option value="12:30pm">12:30 pm</option>
                        <option value="1:00pm">1:00 pm</option>
                        <option value="1:30pm">1:30 pm</option>
                        <option value="2:00pm">2:00 pm</option>
                        <option value="2:30pm">2:30 pm</option>
                        <option value="3:00pm">3:00 pm</option>
                        <option value="3:30pm">3:30 pm</option>
                        <option value="5:00pm">5:00 pm</option>
                        <option value="5:30pm">5:30 pm</option>
                        <option value="6:00pm">6:00 pm</option>
                        <option value="6:30pm">6:30 pm</option>
                        <option value="7:00pm">7:00 pm</option>
                        <option value="7:30pm">7:30 pm</option>
                        <option value="8:00pm" selected="selected">8:00 pm</option>
                        <option value="8:30pm">8:30 pm</option>
                        <option value="9:00pm">9:00 pm</option>
                        <option value="9:30pm">9:30 pm</option>
                        <option value="10:00pm">10:00 pm</option>
                        <option value="10:30pm">10:30 pm</option>
                        <option value="11:00pm">11:00 pm</option>
                        <option value="11:30pm">11:30 pm</option>
                        <option value="12:00am">12:00 am</option>
                        <option value="12:30am">12:30 am</option>
                        <option value="1:00am">1:00 am</option>
                  </select>
                </div>

                <div class="form-group select-wrapper col-sm-4 col-xs-6 margin-20">
                    <select class="form-control select" name="seats" required="">
                        <option value="">Please select</option>
                        <option value="1">1 Person</option>
                        <option value="2" selected="selected">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4">4 People</option>
                        <option value="5">5 People</option>
                        <option value="6">6 People</option>
                        <option value="7">7 People</option>
                        <option value="8">8 People</option>
                        <option value="9">9 People</option>
                        <option value="10">10 People</option>
                        <option value="11">11 People</option>
                        <option value="12">12 People</option>
                    </select>
                </div>

                <div class="form-group col-sm-4 col-xs-12 margin-20">
                 <input class="btn btn btn-white btn-sm btn-wide" value="submit" type="submit">
              </div>
              </fieldset>
              </form>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

@section('scripts')

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js'></script>

    <!-- Script for datapicker date format change -->
    <script type="text/javascript">
    // When the document is ready
        $(document).ready(function () {

            $('#from-datepicker').datepicker({
                format: "yyyy-mm-dd"
            });

        });
    </script>
@endsection
