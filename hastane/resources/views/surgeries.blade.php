@extends('master')
@section('content')
<h1>Surgeries</h1>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Patient</th>
      <th scope="col">Surgery Type</th>
      <th scope="col">Room</th>
      
      <th scope="col"><a href="{{url('surgeries/create')}}" class="btn btn-success" role="button">Add</a>
</th>

    </tr>
  </thead>
  @foreach($surgeries as $surgery)
  <tbody>
    <tr>
      <th scope="row">{{$surgery->date}}</th>
      <td>{{$surgery->patient->name}}</td>
      <td>{{$surgery->type}}</td>
      <td>{{$surgery->room->room_no}}</td>
     
      <td><form onsubmit="return confirm ('are you sure!')" method="post" action="{{ url('surgeries/' . $surgery->id) }}" >
        @method('DELETE')
        @csrf
        <button class="btn btn-danger">delete</button></form></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection