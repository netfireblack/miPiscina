<!doctype html>
<html lang="en">
  <head>
    <title>@yield('page_title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
      {{-- Barra de navegación --}}
      
      <nav class="navbar navbar-expand-sm navbar-light bg-primary">
          <span class="navbar-brand">Mi Piscina</span>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu"
              aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="menu">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                  {{-- Direcccional al index --}}
                  
                  <li class="nav-item active">
                      <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                  </li>

                  {{-- Direccionar al login --}}
      
                  <li class="nav-item">
                      <a class="nav-link" href="logIn">Iniciar Seción</a>
                  </li>
          </div>
      </nav>
      <br>
    <main>
      @yield('main')
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt. 
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt. 
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt. 
          </p>
        </div>
        <div class="col-sm-4">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt. 
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt. 
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt. 
          </p>
        </div>
        <div class="col-sm-4">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt. 
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt. 
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt. 
          </p>
        </div>
      </div>
    </div>
  </footer>
</html>