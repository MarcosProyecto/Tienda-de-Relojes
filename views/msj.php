<?php 

$nombre = $_POST['nombre'];

$apellido = $_POST['apellido'];

$numero = $_POST['numero'];

$email = $_POST['email'];

?>


<div class="card text-center mt-4 mb-4 shadow-lg">
  <div class="card-header">
  BOUTIQUE MONTRES
  </div>
  <div class="card-body">
    <h5 class="card-title">
    <span class="text-capitalize"><?=$nombre?> <?=$apellido?></span> 
    gracias por comunicase con Boutique Montres</h5>
    <p class="card-text">En la brevedad su consulta sera respondida por nuestros asesores a traves del correo electronico: <strong><?=$email?></strong>  o por medio de su numero celular: <strong><?=$numero?></strong> </p>
    <a href="index.php?sec=inicio" class="btn btn-primary">Volver al inicio</a>
  </div>
  <div class="card-footer text-body-secondary">
    Atentamente Boutique Montres
  </div>
</div>
