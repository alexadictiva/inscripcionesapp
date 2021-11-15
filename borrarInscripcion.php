<?php
require_once "./Inscripcion.php";
$id = $_GET["id"];

$r = new Inscripcion();
$r->setId($id);


$r->borrar();
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
        window.location = "normalito.php"
    </script>
</body>
</html>