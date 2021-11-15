<?php
    session_start();
    if ( isset( $_SESSION['email']) ){
        $email = $_SESSION['email'];
            
        $visible = 'none';

    } else {
        $email = 'Registrarme';
        $visible = 'block';
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
              <li class="nav-item">
                  <a class="nav-link" href="./registro.php"><?php echo $email;  ?></a> </li> 
         
              
               <li class="nav item">
                <a href="./logout.php" class="btn btn-danger nav-link">Salir</a
                >
              </li>
                         
            </ul>
          </div>
        </div>        
      </nav>
    </header>

    <main class="container w-50">
      <div class="row mt-4">
        <div class="col-12">
          <form
            class="card p-4"
            action="login.php"
            method="POST"
            style="display: <?php echo $visible; ?>"
          >
            <h2>Formulario</h2>

            <div class="form-group">
              <label for="email">Email</label>
              <input name="email" class="form-control" type="email" />
            </div>

            <div class="form-group mt-2">
              <label for="password">Contraseña</label>
              <input name="pass" class="form-control" type="password" />
            </div>

           

            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary mt-3">
                Ingresar
              </button>
            </div>
          </form>
        </div>
        <div class="col-10 offset-1">
          <div class="d-grid gap-2">
            <a href="./registro.php" class="btn btn-primary mt-3">Registrarme</a>
          </div>
        </div>
      </div>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
