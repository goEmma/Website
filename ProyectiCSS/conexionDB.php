<?php 
    $server = 'localhost:33065';
    $usuario = 'root';
    $contraseña = '';
    $bd = 'gameshouse';

     $conexion = mysqli_connect($server,$usuario,$contraseña,$bd)
    or die('error al conectarse a la  base de datos');
   
?>