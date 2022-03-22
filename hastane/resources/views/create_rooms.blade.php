@extends('master')
@section('content')
<h1>Create rooms</h1>
<form method="post" action="{{ url('rooms') }}">
    @csrf
      <div class="form-group">
  <label for="sel1">Room number</label>
  <select class="form-control" id="sel1" name="room_no">
        <option value="1"> 1</option>
        <option value="2"> 2</option>
        <option value="3"> 3</option>
        <option value="2"> 4</option>
        <option value="2"> 5</option>
        <option value="1"> A1</option>
        <option value="2"> A2</option>
        <option value="3"> A3</option>
        <option value="2"> A4</option>
        <option value="2"> A5</option>
        <option value="1"> B1</option>
        <option value="2"> B2</option>
        <option value="3"> B3</option>
        <option value="2"> B4</option>
        <option value="2"> B5</option>
        <option value="1"> C1</option>
        <option value="2"> C2</option>
        <option value="3"> C3</option>
        <option value="2"> C4</option>
        <option value="2"> C5</option>
    </select>  
  </div>
 
<button type="submit" class="btn btn-success">Add</button>
  </form>
</div>

 @endsection