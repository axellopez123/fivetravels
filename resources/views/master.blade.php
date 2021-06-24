<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <!-- Bootsrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    
  </div>
</nav>
</header>
<body class="antialiased">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://cdn.clubsolaris.com/com/EN/arch-cabo-san-lucas-mexico.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mexico10.com/wp-content/uploads/2020/03/puerto-vallarta-jalisco-min.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://media.staticontent.com/media/pictures/592e3b4d-c987-42b1-8030-a09a21680298" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<center>
<div class="container">
    <div class="row align-items-center">
    <div><p class="fw-bolder text-center align-middle">SERVICIOS</p></div>
            <div href="{{ route('destino') }}" class="col-sm col-md col-lg">
                <center>
                <img src="{{ asset('public/img/destinos.jpg') }}" class="img-fluid" width="140" height="140" alt="...">
                <p class="fw-bolder text-center">Piretrinas Naturales</p>
                <p class="fw-bolder text-center">No toxicas y efecto 10 veces mas potencial que otros insecticidas</p>
                </center>
            </div>
            <div href="{{ route('packs') }}" class="col-sm col-md col-lg">
                <center>
                <img src="{{ asset('public/img/packs.jpg') }}" class="img-fluid" width="140" height="140" alt="...">
                <p class="fw-bolder text-center">Duracion</p>
                <p class="fw-bolder text-center">Semanas de efecto despues de la aplicación</p>
                </center>
            </div>
            <div class="col-sm col-md col-lg">
                <center>
                <img src="{{ asset('public/img/review.png') }}" class="img-fluid">
                <p class="fw-bolder text-center">Eliminacion Total</p>
                <p class="fw-bolder text-center">Exterminamos cualquier plaga o virus</p>
                </center>
            </div>
    </div>
</div>
</center>


</script>

@yield('footer')
</body>
</html>