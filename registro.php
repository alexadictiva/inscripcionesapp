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
        </div>        
      </nav>
    </header>

    <main class="container w-50">
      <div class="row mt-4">
        <div class="col-12">
          <form
            class="card p-4"
            action="crearUsuario.php"
            method="POST"
            
          >
            <h2>Registrarme</h2>
            <div class="form-group">
              <label for="nombrer">Nombre</label>
              <input name="nombrer" class="form-control" type="nombre" />
            </div>

            <div class="form-group">
              <label for="emailr">Email</label>
              <input name="emailr" class="form-control" type="email" />
            </div>

            <div class="form-group mt-2">
              <label for="passr">Contraseña</label>
              <input name="passr" class="form-control" type="password" />
            </div>

           

            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary mt-3">
                Registrarme
              </button>
            </div>
          </form>
        </div>
        <div class="col-10 offset-1">
          <div class="d-grid gap-2">
            <a href="./index.php" class="btn btn-primary mt-3">Iniciar Sesión</a>
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