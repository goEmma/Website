<?php
    include('conexionDB.php');
    
if(isset($_POST['Login'])){
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['correo'];
    $pwd = $_POST['pwd'];

    $consulta = "INSERT INTO usuarios(nombre,telefono,email,contraseña)
    VALUES ('$name','$phone','$email',MD5('$pwd'))";
    
    mysqli_query($conexion,$consulta);
}
?>