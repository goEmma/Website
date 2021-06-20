<?php
   include('conexionDB.php'); 

class ConsultasSQL{
        //Atributos de la clase
    public $email =$_POST['email'];
    public $password = $_POST['pwd'];
    public $phone = $_POST['phone'];
    public $email = $_POST['correo'];
    
        //Metodos
    public function postRegistro(){
        if(isset($_POST['Login'])){
            
            $consulta = "INSERT INTO usuarios(nombre,telefono,email,contraseña)
            VALUES ('$name','$phone','$email',MD5('$pwd'))";
                
            mysqli_query($conexion,$consulta);
            mysqli_close($conexion);
        }
    }
    public function loginUser($email,$password){
        if(isset['Entrar']){
            if($email=="" || $password==""){
                echo "Llene todos los campos";
            }
            else{
                $consulta = "SELECT * FROM `usuarios` WHERE email=`$email` AND contraseña=`$password`";
                $resultados = mysqli_query($conexion, $consulta);
                if($resultados){
                    $_SESSION['se ha conectado exitosamente'];
                }else{
                    echo "ha ocurrido un error";
                }
            }
        }
    }
    
    public function deleteUsuario($email){
        if(isset['eliminar']){
            try{
                $eliminar = "DELETE FROM `usuarios` WHERE `email`=$email";
                mysqli($conexion,$eliminar); 
            }
            catch{
                echo "No se encuentra el correo proporcionado";
            }
        }
    }

    public function updateUser(){
        if(isset['actualizar']){
            $update = "UPDATE `usuarios` SET `id`=$email,`nombre`=$name,`telefono`=$phone,`email`=$email,`contraseña`=$password WHERE `email`=$email";
            $resultado = mysqli_query($conexion,$update);
        }
    }
}

?>   
