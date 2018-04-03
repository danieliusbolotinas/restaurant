@extends('layouts.adminmaster')

@section('Update Product', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')
<div class="container">
  <div class="panel panel-info">
    <div class="panel-heading">
      <div class="panel-title">Update Reservation</div>
    </div>
    <div class="panel-body" >
      <form method="PUT" action="/admin/reservation/update/{{$reservation->id}}" class="form-horizontal" enctype="multipart/form-data" role="form">

        {!! csrf_field() !!}
        <fieldset>

          <div class="form-group">
            <label class="col-md-3 control-label" for="name">Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="name" value="{{ $reservation->name or '' }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="phone">Phone</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="phone" value="{{ $reservation->phone or '' }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="name">Reservation Date</label>
            <div class="col-md-9">
              <input id="from-datepicker" name="reservation_start" value="{{ $reservation->reservation_start or '' }}" class="form-control datepicker" required="" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="phone">Time</label>
            <div class="col-md-6">
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
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="phone">People</label>
            <div class="col-md-6">
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
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="submit"></label>
            <div class="col-md-9">
              <button id="submit" name="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </fieldset>

      </form>
    </div>
  </div>
</div>
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
