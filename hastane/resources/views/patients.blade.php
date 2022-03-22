@extends('master')
@section('content')
<h1>Patients</h1>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Phone Number</th>
      
      <th scope="col"><a href="{{url('patients/create')}}" class="btn btn-success" role="button">Add</a>
</th>

    </tr>
  </thead>
  @foreach($patients as $patient)
  <tbody>
    <tr>
      <th scope="row">{{$patient->id}}</th>
      <td>{{$patient->name}}</td>
      <td>{{$patient->surname}}</td>
      <td>{{$patient->phone_number}}</td>
     
      <td><form onsubmit="return confirm ('are you sure!')" method="post" action="{{ url('patients/' . $patient->id) }}" >
        @method('DELETE')
        @csrf
        <button class="btn btn-danger">delete</button></form></td>
    </tr>
    @endforeach
  </tbody>
</table> @endsection