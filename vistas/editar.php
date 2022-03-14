<?php
require_once("./vistas/layouts/header.php");
?>
<div class="div">
<h2>Crear producto</h2>
<form action="">
    <?php foreach($dato as $value): ?>
        <?php foreach($value as $v): ?>
          <label for="id">ID: </label>
          <input id="id" type="text" name="id" readonly required 
          value="<?php echo $v['id'] ?>"/>
          <label for="nombre">Nombre: </label>
          <input id="nombre" type="text" placeholder="Ingrese nombre" name="nombre" required 
          value="<?php echo $v['nombre'] ?>"/>
          <label for="precio">Precio: </label>
          <input id="precio" type="text" placeholder="Ingrese precio" name="precio" required
          value="<?php echo $v['precio'] ?>"/>
          <input type="submit" class="btn" name="btn" value="guardar" />
          <input type="hidden" name="m" value="editar" />
        <?php endforeach; ?>
    <?php endforeach; ?>
</form>
</div>

<?php
require_once("./vistas/layouts/footer.php");
?>