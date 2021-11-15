<?php
require_once "./Conexion.php";
    session_start();
    
    if(  isset($_POST['email'])  && isset($_POST['pass'])  ){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
     

        // Imaginemos que tenemos una query en la DB
        $emailAdmin = 'admin@miapp.com';
        $passAdmin = '1234';
        /*================================ */
        $emailUser = "normal@miapp.com";
        $passUser = "1234"; 


         //$emailUser = "SELECT `Email` FROM usuario WHERE email = " . $email;
        //$passUser = "SELECT `Pass` FROM usuario WHERE pass = " . $pass; 
      /*================================ */

    }


?>




<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
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
              
            
              <li class="nav item">
                <a href="./registro.php" class="nav-link"
                  >Registrarme</a
                >
              </li>
              <li class="nav item">
                <a href="./index.php" class="nav-link"
                  >Iniciar Sesión</a
                >
              </li>
              <li class="nav item">
                <a href="./index.php" class="nav-link"
                  >Volver</a
                >
              </li>
               
                         
            </ul>
          </div>
        </div>        
      </nav>
    </header>

    <main class="container w-50">
      <?php
       if ( $email == $emailAdmin && $pass == $passAdmin ) {
            //usuario admmin
            $_SESSION['email'] = $email;
            header('location: administrador.php');

        }else if ( $email == $emailUser && $pass == $passUser) {          
          //usuario normal
            $_SESSION['email'] = $email;
            header('location: normalito.php');
        }else {
            echo 'Usuarios o Contraseña Invalidos';
            echo ' <a href="registro.php">Registrame</a> ';
        }
      ?>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
