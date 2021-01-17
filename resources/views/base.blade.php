<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a072da2af7.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link   rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >

    <title>Hello, world!</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <i class="fas fa-home"></i>
            Acceuil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/articles">Articles</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto">
              @if (Auth::user())
              @if (Auth::user()->role === 'ADMIN')
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('articles.index')}}">Espace Admin</a>
              </li>
              @endif
              <li class="nav-item ">
                <form method="POST" action="/logout">
                  @csrf
                  <button type="submit"class=" btn nav-link active">Deconnexion</button>
                </form>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/login">Se connecter</a>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/register">Register</a>
              @endif
              </ul>
             
              
            
          </div>
        </div>
      </nav>
      @yield('content')
  </body>
</html>