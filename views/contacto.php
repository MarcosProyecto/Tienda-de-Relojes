<form action="index.php?sec=msj" method="POST">

  <div class="form-floating mb-3 mt-4">
  <input type="text" name="nombre" class="form-control" id="floatingInputDisabled" placeholder="Nombre">
  <label for="floatingInputDisabled">Nombre</label>
  </div>
  <div class="form-floating mb-3">
  <input type="text" name="apellido" class="form-control" id="floatingInputDisabled" placeholder="Apellido">
  <label for="floatingInputDisabled">Apellido</label>
  </div>
  <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">+54</span>
  <input type="number" name="numero" class="form-control" placeholder="Celular" aria-label="number" aria-describedby="addon-wrapping">
</div>
<div class="form-floating mb-3">
  <input type="email" name="email" class="form-control" id="floatingInputDisabled" placeholder="Correo" >
  <label for="floatingInputDisabled">Correo Electronico</label>
  </div>
<div class="form-floating mb-3 ">
  <textarea class="form-control" name="mensaje" placeholder="Leave a comment here" id="floatingTextarea2Disabled" style="height: 100px" ></textarea>
  <label for="floatingTextarea2Disabled">Mensaje</label>
  </div>
<input type="submit" class="btn btn-primary mb-4 " value="Enviar">
  </form>
