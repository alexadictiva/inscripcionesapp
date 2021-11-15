<?php

session_start();
if ( !isset( $_SESSION['email']) ){
    header('location: normalito.html');
}



require_once "./Carrera.php";
$r2 = new Carrera();
$datos2 = $r2->listar();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Carreras</title>
  </head>
  <body>
     <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./normalito.php">Volver</a>
              </li>
              <li class="nav item">
                <a href="./normalito.php" class="nav-link"
                  >Inscribirme</a
                >
              </li>
              <li class="nav-item">
                <a href="logout.php" class="navbar-text nav-link">
                  <span class="btn btn-danger">Salir</span>
               </a>
              </li>            
            </ul>
          </div>
        </div>        
      </nav>
    </header>
    <main>
      <section>
        <h1>        Carreras        </h1>
      </section>
      
      <section class="carreras container mt-4">
        <div class="row">      
          <?php 
            foreach ($datos2 as $item ) {
              echo "
              <article class='card-body text-center col-12 col-md-4'>
                <div class='p-2 bg-black '> <h3 class='details-title'> " . $item['Nombre'] . " </h3></div>
                <div class='p-2'><p class='details-description'>  " . $item['Detalle']    ."</p></div>
              </article>";                  
            }
          ?>
      </div>
      </section>
     
      
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
