<?php
require_once "libraries/funciones.php";

$relojSeleccionada = $_GET['ser'] ?? FALSE; 

$productos = catalogo_x_marcas($relojSeleccionada); 

$miTitulo = $relojSeleccionada ? ucwords(str_replace("_", " ", $relojSeleccionada)) : FALSE;



?>




<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded text-center mt-5"><h1>Relojes <?=$miTitulo?></h1></div>

<div class="row mt-5">
<?php if(count($productos)) { ?>
<?php foreach ($productos as $reloj) { ?>
    
<div class="col-3 mb-5 ">
<div class="card h-100 shadow-lg" style="width: 16rem;">
  <img src="img/<?=$reloj['imagen']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center"><?=$reloj['titulo']?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary text-center"><?=$reloj['modelo']?></h6>
    <a href="index.php?sec=producto&id=<?= $reloj['id']?>" class="d-grid gap-2 col-6 mx-auto btn btn-outline-dark">Detalles</a>
  </div>
</div>

</div>








<!-- <div class="col-6">
    <div class="card">
        <img style="height: 400px;" src="img/<?=$reloj['imagen']?>" class="card-img-top" alt="...">
        <div class="card-body text-center">
                <h5 class="card-title"><?=$reloj['marca']?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?=$reloj['modelo']?></h6>
                <p class="card-text text-success">Precio: <?=$reloj['precio']?></p>
                <a href="index.php?sec=producto&id=<?= $reloj['id']?>" class="btn btn-success d-block py-3">Ver mas</a>
        </div>
    </div>
</div> -->

<?php } ?>



<img src="img/banner/publicidad2.jpg" class="img-fluid mb-4" alt="...">

<?php }else{ ?>
    
    <div class="col">
        <h2 class="text-center mb-5">No se encontraron productos</h2>
    </div>

    <?php } ?>

</div>