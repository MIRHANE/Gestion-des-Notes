<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Navbar</title>
</head>
<body>
<nav class="navbar bg-dark">
  <div class="container-fluid">
    <div class="">
        <a class="navbar-brand"><img src="{{asset('images/logo.jpg')}}" width ="70px"></a>
    </div>
    <div class="d-flex align-items-center">
        <a class="navbar-brand"><img src="{{asset('images/profil.png')}}" class="rounded-circle" width ="50px"></a>
        <h5 class="text-white bg-dark">Avatar</h5>
    </div>
  </div>
</nav>
</body>
</html>