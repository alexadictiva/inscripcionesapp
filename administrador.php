<?php
    session_start();
    if ( !isset( $_SESSION['email']) ){
        header('location: administrador.html');
    }

    require_once "./Carrera.php";
    
    $r = new Carrera();
    $datos = $r->listar(); //print_r($datos); ?>
   

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Página Privada</title>
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
                <a href="./verInscripciones.php" class="nav-link"
                  >Ver Inscripciones</a
                >
              </li>
               <li class="nav item">
                <a href="./verUsuario.php" class="nav-link"
                  >Ver Usuarios</a
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
      <h1>Panel Ppal Admin</h1>
      <section class="form-container ">

        <form
          class=" border p-4"
          action="crearCarrera.php"
          method="post"
        >
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input class="form-control" type="text" id="nombre" name="nombre" />
          </div>
          <div class="mb-3">
            <label for="detalle" class="form-label">Detalle</label>
            <input
              class="form-control"
              type="text"
              name="detalle"
              name="detalle"
            />
          </div>
          <input
            class="btn btn-primary"
            type="submit"
            name="btn-submit"
            value="Ingresar"
          />
        </form>
      </section>


    

       <section class="listado container">
         <h2 class="my-5">Carreras Agregadas</h2>
        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Detalle</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($datos as $dato) { ?>
            <tr>
              <td><?php echo $dato['Nombre']; ?></td>
              <td><?php echo $dato['Detalle']; ?></td>
              <td>
              <!--   <a href="editarCarrera.php?id=<?php echo $dato['id']; ?>">Editar</a> -->
                <?php 
                  echo "<a class='btn btn-danger' href='./borrarCarrera.php?id=" . $dato['ID'] . "'> borrar</a>";
                ?>

                
                
              </td>
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
