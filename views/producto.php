<?php

require_once "libraries/funciones.php"; 

$id = $_GET['id'] ?? FALSE; 

$reloj = producto_x_id($id); 


?>


<?php if(isset($reloj)) {?>


    <div class=" shadow-lg card mb-5 mt-5 mx-auto" style="max-width: 1500px;">
  <div class="row g-0">
    <div class="col-md-4 mt-4">
      <img src="img/<?=$reloj['imagen']?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$reloj['titulo'], $reloj['modelo']?></h5>
        <span class="card-text text-decoration-line-through opacity-50" ><?=$reloj['precio_antes']?></span> 
        <span class="card-text"><?=$reloj['precio']?></span>
        <p class="opacity-75"><?=$reloj['cuota']?></p>
        <p class="opacity-50">10% de descuento con Transeferencia Bancaria</p>
        <p>Si tu compra supera los $100.000, te llevas un smart watch de regalo ⌚🎁</p>

        <strong>Marca:</strong>
        <?=$reloj['marca']?>
        <br>
        <strong>Genero:</strong>
        <?=$reloj['genero']?>
        <br>
        <strong>Funcion:</strong>
        <?=$reloj['funcion']?>
        <br>
        <strong>Movimiento:</strong>
        <?=$reloj['movimiento']?>
        <br>
        <strong>Material Malla:</strong>
        <?=$reloj['malla']?>
        <br>
        <strong>Material Caja:</strong>
        <?=$reloj['caja']?>
        <br>
        <strong>cristal:</strong>
        <?=$reloj['cristal']?>
        <br>
        <strong>Sumergibilidad:</strong>
        <?=$reloj['sumergible']?>
        <br>
        <strong>Garantia:</strong>
        <?=$reloj['garantia']?>
        <br>
        <br>

        <a href="#" class="d-grid gap-2 col-3 btn btn-outline-dark">COMPRAR</a>

        
      </div>
    </div>
  </div>
</div>


    <!-- <div class="row">

    <div class="col-4">
        <img src="img/<?=$reloj['imagen']?>" class="img-thumbnail" alt="...">
    </div>

    

    <div class="col-2">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-nombre" role="tab" aria-controls="list-home">Nombre</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-modelo" role="tab" aria-controls="list-profile">Modelo</a>
            <a class="list-group-item list-group-item-action" id="list-nombre-list" data-bs-toggle="list" href="#list-medidas" role="tab" aria-controls="list-settings">Medidas</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-origen" role="tab" aria-controls="list-settings">Origen</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-encendido" role="tab" aria-controls="list-settings">Encendido</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-quemadores" role="tab" aria-controls="list-settings">Quemadores</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-precio" role="tab" aria-controls="list-settings">Precio</a>
        </div>        
    </div>



    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-nombre" role="tabpanel" aria-labelledby="list-home-list"><?=$reloj['titulo']?></div>
                <div class="tab-pane fade" id="list-modelo" role="tabpanel" aria-labelledby="list-profile-list"><?=$reloj['modelo']?></div>
                <div class="tab-pane fade" id="list-encendido" role="tabpanel" aria-labelledby="list-settings-list"><?=$reloj['encendido']?></div>
                <div class="tab-pane fade" id="list-quemadores" role="tabpanel" aria-labelledby="list-settings-list"><?=$reloj['cantidad_quemadores']?></div>
                <div class="tab-pane fade" id="list-precio" role="tabpanel" aria-labelledby="list-settings-list"><?=$reloj['precio']?></div>
                </div>
            </div>
        </div   > 
        <div class="d-grid gap-2 col-6 mx-auto mt-2">
            <button class="btn btn-primary" type="button">Comprar</button>
        </div>

        <div class="card text-bg-dark mb-4 mt-4">
  <img src="img/cocina/publicidad_cocina.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
  </div>
</div>

</div>
     </div>

 -->


<?php } ?>