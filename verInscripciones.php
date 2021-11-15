<?php

session_start();
if ( !isset( $_SESSION['email']) ){
    header('location: administrador.html');
}



require_once "./Inscripcion.php";
$r2 = new Inscripcion();
$datos = $r2->listar();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Inscripciones</title>
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
                <a class="nav-link active" aria-current="page" href="./administrador.php">Volver</a>
              </li>
              <li class="nav item">
                <a href="./administrador.php" class="nav-link"
                  >Agregar Carrera</a
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
      <section class="container">
        <h1 class="my-5">Inscripciones Agregadas</h1>
      </section>
      <section class="listado container">        
        <table class="table  table-striped">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Carrera</th>              
            </tr>
          </thead>
          <tbody>
            <?php foreach ($datos as $dato) { ?>
            <tr>
              <td><?php echo $dato['Nombre']; ?></td>
              <td><?php echo $dato['Carrera']; ?></td>
            </tr>
            <?php } ?>
          </tbody>       
      </section>      
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
