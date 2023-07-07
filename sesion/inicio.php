<?php
    session_start();
    $usuario = $_POST['user'];
    $contrasena = $_POST['pass'];

    $admin = "Equipo2" ;
    $pass = "12345";

    
    if($usuario == $admin && $pass == $contrasena)
        header("location:../CRUD/vista/persona/tabla.php");
    else{
        header("location:sesion.html");
    }

?>