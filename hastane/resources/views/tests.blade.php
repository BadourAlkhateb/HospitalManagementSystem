@extends('master')
@section('content')
<h1>Tests</h1>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Patient</th>
      <th scope="col">Test Type</th>
      
      
      <th scope="col"><a href="{{url('tests/create')}}" class="btn btn-success" role="button">Add</a>
</th>

    </tr>
  </thead>
  @foreach($tests as $test)
  <tbody>
    <tr>
      <th scope="row">{{$test->date}}</th>
      <td>{{$test->patient->name}}</td>
      <td>{{$test->type}}</td>
     
     
      <td><form onsubmit="return confirm ('are you sure!')" method="post" action="{{ url('tests/' . $test->id) }}" >
        @method('DELETE')
        @csrf
        <button class="btn btn-danger">delete</button></form></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection