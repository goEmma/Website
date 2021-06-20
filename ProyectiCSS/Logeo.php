<!DOCTYPE html>
<html>
<head>
	<title>¡Registrate y entra!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="css/xtras.css">
  <link rel="icon" href="https://image.flaticon.com/icons/png/512/13/13282.png">
</head>
<body>
<form class="login-form" method='post'>
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <div class="registro" id='reg'>
    <input name='name' type='text' class="login-username" id='name' required='true' placeholder='Nombre' display='none'/>
    <input type="text" name='phone' class='login-username' id='phone' required='true' placeholder='Teléfono'/>
  </div>
  <input name='correo' type="email" class="login-username" autofocus="true" required="true" placeholder="Correo" /> 
  <input name='pwd' type="password" class="login-password" required="true" placeholder="Contraseña" />
  <button type="submit" name="registrar" class="registrar">Registrarse</button>
  <input type="button" name="Boton" value="Entrar" class="entrada" onclick="location.href='principal.html'" />
  <p align='center' id='crearc' onclick="hide()">¿No tienes una cuenta? Regístrate</p>
  <!-- <button type='submit' class='login-submit'>Enviar</button> -->
</form>
  <?php
    include_once("registra_usuario.php");
  ?>
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 
</body>
<script src='scripts.js'></script>
</html>