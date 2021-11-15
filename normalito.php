<?php
    session_start();
    if ( !isset( $_SESSION['email']) ){
        header('location: normalito.html');
    }

    require_once "./Inscripcion.php";
    $r1 = new Inscripcion();
    $datos1 = $r1->listar();
    // print_r($datos1); 
     
    
    require_once "./Carrera.php";
    $r2 = new Carrera();
    $datos2 = $r2->listar();
    //print_r($datos2); 
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Perfil</title>
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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav item">
                <a href="./verCarreras.php" class="nav-link"
                  >Ver Carreras</a
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
        <h2>
        Bienvenido
        <?php echo $_SESSION['email']; ?>
      </h2>

      <section class="form-container">
        <form    class=" border p-4" action="crearInscripcion.php">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input class="form-control" type="text" id="nombre" name="nombre" />
          </div>
          <div class="mb-3">
          <select class="form-select" name="carreras" id="carreras">
          <?php          
            require_once "./Carrera.php";  
            $r = new Carrera();
            $datos3 = $r->listar();     
                foreach ($datos3 as $valor ) {
                  echo "<option value='" . $valor['Nombre'] .    "'name='" . $valor['Nombre']   .  "'>" . $valor['Nombre'] . "</option>";
              }
            ?>
          </select>
          </div>        
          <input type="submit" name="btn" class="btn btn-success" value="Inscribirme" />          
        </form>
      </section>


      <section class="listado container mt-4">
        <h3>Te has inscrito a los siguientes cursos:</h3>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Carrera</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($datos1 as $valor) {
              echo "<tr>";
              echo "<td>" . $valor['Nombre'] . "</td>";
              echo "<td>" . $valor['Carrera'] . "</td>";
              echo "<td>";
              echo "<a href='borrarInscripcion.php?id=" . $valor['ID'] . "' class='btn btn-danger'>Eliminar</a>";
              echo "</td>";
              echo "</tr>";
            }
            ?>
       
      </section>



   
     
    </main>
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
