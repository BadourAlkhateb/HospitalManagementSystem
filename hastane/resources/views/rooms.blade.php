@extends('master')
@section('content')
<h1>Rooms</h1>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Room No</th>
      
      <th scope="col"><a href="{{url('rooms/create')}}" class="btn btn-success" role="button">Add</a>
</th>

    </tr>
  </thead>
  @foreach($rooms as $room)
  <tbody>
    <tr>
      <th scope="row">{{$room->room_no}}</th>
      

      <td><form onsubmit="return confirm ('are you sure!')" method="post" action="{{ url('rooms/' . $room->id) }}" >
        @method('DELETE')
        @csrf
        <button class="btn btn-danger">delete</button></form></td>
    </tr>
    @endforeach
  </tbody>
</table> 
 @endsection