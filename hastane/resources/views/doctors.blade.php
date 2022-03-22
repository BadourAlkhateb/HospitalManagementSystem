@extends('master')
@section('content')
<h1>Doctors</h1>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Gender</th>
      <th scope="col">Specialization</th>
      <th scope="col">Phone Number</th>
      <th scope="col"><a href="{{url('doctors/create')}}" class="btn btn-success" role="button">Add</a>
</th>

    </tr>
  </thead>
  @foreach($doctors as $doctor)
  <tbody>
    <tr>
      
      <td>{{$doctor->name}}</td>
      <td>{{$doctor->surname}}</td>
      <td>{{$doctor->gender}}</td>
      <td>{{$doctor->specialization}}</td>
      <td>{{$doctor->phone_number}}</td>
      <td><form onsubmit="return confirm ('are you sure!')" method="post" action="{{ url('doctors/' . $doctor->id) }}" >
        @method('DELETE')
        @csrf
        <button class="btn btn-danger">delete</button></form></td>
    </tr>
    @endforeach
  </tbody>
</table>
 @endsection