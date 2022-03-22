@extends('master')
@section('content')
<h1>Create Patients</h1>
<form method="post" action="{{ url('patients') }}">
    @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label>Surame</label>
      <input type="text" class="form-control" name="surname">
    </div>
   <div class="form-group">
  <label for="phone">Phone number:</label><br><br>
  <input type="tel" id="phone" name="phone_number" placeholder="123-456-78-90" maxlength="10"></div>
  
   
    <button type="submit" class="btn btn-success">Add</button>
  </form>
</div>
 @endsection