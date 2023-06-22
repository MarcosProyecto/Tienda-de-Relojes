<?php

$secciones_validas = [
    "inicio" => [
        "titulo" => "Boutique Montres"
    ],
    "alumno" => [
        "titulo" => "Garcia Marcos"
    ],
    "contacto" => [
      "titulo" => "Habla con Nosotros"
    ],
    "producto" => [
      "titulo" => "Detalle del producto"
    ],
    "relojes" => [
        "titulo" => "Marca de Relojes"
    ],
    "msj" => [
      "titulo" => "Gracias por comunicarse con nosotros"
    ]
  ];

  $seccion = $_GET['sec'] ?? "inicio"; 

  $envio = isset($_POST['sec']) ? $_POST['sec']: "contacto"; 

  if(!array_key_exists($seccion, $secciones_validas )){
    $vista = "404";
    $titulo = "404 - Pagina no encontrada";
  }else {
    $vista = $seccion;
    $titulo = $secciones_validas[$seccion]['titulo'];
  }



?>





<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$titulo?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

<div class="row"><span class="text-center text-light bg-dark" >3 & 6 CUOTAS SIN INTERES I 10% OFF POR TRANSFERENCIA I ENVIO GRATIS A TODO EL PAIS</span></div>



  

  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #090d14;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?sec=inicio">Boutique Montres</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?sec=inicio">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categoria</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?sec=relojes&ser=armani">Armani</a></li>
            <li><a class="dropdown-item" href="index.php?sec=relojes&ser=nautica">Nautica</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=alumno">Alumno</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=contacto">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<main class="container">

<?php 

require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php";

?>
    
</main>
 


<footer>

<div class="container-fluid">
    <div class="row p-5 text-white" style="background-color: #090d14;">
        <p class="text-white text-center h6">Copyright - Todos Los Derechos Reservados 
© Boutique Montres - 2023  </p>
    </div>
</div>

</footer>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>



<!--  -->