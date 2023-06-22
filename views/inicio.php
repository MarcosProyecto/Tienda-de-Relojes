<?php

require_once "libraries/funciones.php"; 

$informacion = catalogo_completo(); 

?>


<div id="carouselExampleAutoplaying" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner/1.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner/2.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner/3.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner/4.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner/5.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">siguiente</span>
  </button>
</div>

<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded text-center mt-5"><h2>Todos Nuestros Produtos</h2></div>

<div class="container mt-5">

  <div class="row d-flex justify-content-around ">
    <a class="card" href="index.php?sec=relojes&ser=nautica" style="width:16rem; height: 230px;">
      <img class="card-img-top" src="img/banner/logo_nautica.jpg" alt="">
    </a>
    <a class="card" href="index.php?sec=relojes&ser=armani" style="width:16rem; height: 230px;">
      <img class="card-img-top mt-5" src="img/banner/logo_armani.jpg" alt="">
    </a>
  </div>
</div>

<div class="row mt-5 mb-5 ">

<?php foreach ($informacion as $catalogo) { ?>

<div class="col-3 mb-5 ">
<div class="card h-100 shadow-lg" style="width: 16rem;">
  <img src="img/<?=$catalogo['imagen']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center"><?=$catalogo['titulo']?></h5>
    <a href="index.php?sec=producto&id=<?= $catalogo['id']?>" class="d-grid gap-2 col-6 mx-auto btn btn-outline-dark">Detalles</a>
  </div>
</div>

</div>


<?php } ?>

<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner/publicidadinicio.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner/publicidadinicio2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner/publicidadinicio3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




</div>


