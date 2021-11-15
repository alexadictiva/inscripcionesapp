<?php
require_once "./Usuario.php";

$nombre = $_REQUEST["nombrer"];
$email = $_REQUEST["emailr"];
$pass = $_REQUEST["passr"];


echo $nombre;
echo $email;
echo $pass;


$r = new Usuario();
$r->setNombre($nombre);
$r->setEmail($email);
$r->setPass($pass);
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
        window.location = "index.php"
    </script>
</body>
</html>