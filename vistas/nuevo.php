<?php
require_once("./vistas/layouts/header.php");
?>
<div class="div">
<h2>Crear producto</h2>
<form action="">
    <label for="nombre">Nombre: </label>
    <input id="nombre" type="text" placeholder="Ingrese nombre" name="nombre" required/>
    <label for="precio">Precio: </label>
    <input id="precio" type="text" placeholder="Ingrese precio" name="precio" required/>
    <input type="submit" class="btn" name="btn" value="guardar" />
    <input type="hidden" name="m" value="guardar" />
</form>
</div>

<?php

require_once("./vistas/layouts/footer.php");

?>