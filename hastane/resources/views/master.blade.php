
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BSA Hospital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <img class="navbar-brand" src="{{url('indir1.png')}}" alt="logo"  >
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('home')}}">Home</a></li>
      <li><a href="{{url('doctors')}}">Doctors</a></li>
      <li><a href="{{url('rooms')}}">Rooms</a></li>
      <li><a href="{{url('patients')}}">Patients</a></li>
      <li><a href="{{url('surgeries')}}">Surgeries</a></li>
       <li><a href="{{url('tests')}}">Tests</a></li>

    </ul>
  </div>
</nav>
    
<div class="container">
  
  @yield('content')

</div>

</body>
</html>
