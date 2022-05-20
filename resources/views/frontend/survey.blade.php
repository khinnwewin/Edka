@extends('frontend.layout.app')
@section('content')
<h3 align="center">Web Survey Form</h3>
<div class="container head">
<form method="post" action="{{ url('survey_form') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1"><b>Name</b></label>
        <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"><b>Phone Number</b></label>
        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"><b>Company Name</b></label>
        <input type="text" class="form-control" name="company" placeholder="Company Name">
    </div>
     <div class="form-group">
        <label for="exampleInputEmail1"><b>Designation</b></label>
        <input type="text" class="form-control" name="designation" placeholder="Designation">
    </div>
    
  <button type="submit" class="btn btn-primary" style="margin-left: 3%;">Submit</button>
</form>
</div>
@endsection
