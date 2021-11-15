<?php
require_once "./Carrera.php";

$nombre = $_REQUEST["nombre"];
$detalle = $_REQUEST["detalle"];


echo $nombre;
echo $detalle;


$r = new Carrera();
$r->setNombre($nombre);
$r->setDetalle($detalle);
$r->crear();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        window.location = "administrador.php"
    </script>
</body>
</html>
