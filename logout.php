<?php
    session_start();
    unset($_SESSION['email']);
    echo 'Haz salido de tu sesión';

    header('location: index.php');


?>