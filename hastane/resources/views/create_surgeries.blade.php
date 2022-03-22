@extends('master')
@section('content')
<h1>Create Surgeries</h1>
<form method="post" action="{{ url('surgeries') }}">
    @csrf
    <div class="form-group">
      <label>Date</label>
      <input type="datetime-local" class="form-control" name="date" required="">
    </div>
    <div class="form-group">
       <div class="form-group">
  <label for="sel1">Patient</label>
  <select class="form-control" id="sel1" name="patient">
       
   @foreach ($patients as $patient)
   <option value="{{$patient->id}}">  
        {{$patient->name}}</option>
        @endforeach
    
    </select> 
    <label for="sel1">Type</label>
  <select class="form-control" id="sel1" name="type">
        <option > eyes</option>
        <option > nose</option>
        <option > heart</option>
    
    </select>   
  </div>
   <label for="sel1">Room</label>
  <select class="form-control" id="sel1" name="room">
        @foreach ($rooms as $room)
   <option value="{{$room->id}}">  
        {{$room->room_no}}</option>
        @endforeach
    
    </select>  
  
   
    <button type="submit" class="btn btn-success">Add</button>
  </form>
</div>


 @endsection