<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Redes 2</title>

    <!-- Bootstrap core CSS -->
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.2/socket.io.js"></script>

  </head>
  <script>
      var App = {};
        App.ws = io('http://localhost:3000', {
         path: '/'
        });

    </script>
  <style>
    .dropdown-menu li{
      text-align: center;
      color: #007BFF;
    }
    .dropdown-menu li:hover{
      cursor: pointer;
    }
    a:hover{
      text-decoration: none;
    }
    .card{
      margin-top: 15px;
    }
  </style>
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Redes 2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nueva.php">Nueva Actividad</a>
            </li>
            <!--li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li-->
            <li class="nav-item">
              <a class="nav-link" href="">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <?php include ($view.'.php')?>
    <!-- /.container -->

    

    <!-- Bootstrap core JavaScript -->
    
    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    

  </body>

</html>
