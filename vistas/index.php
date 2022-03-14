<?php
require_once("./vistas/layouts/header.php");

?>

<div class="div">
<a href="index.php?m=nuevo" class="btn">NUEVO</a>
<table class="table">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                NOMBRE
            </th>
            <th>
                ACCION
            </th>
        </tr>
    </thead>
    <tbody> <?php 
    if(!empty($datos)):
        foreach($datos as $key => $value)
           foreach($value as $v):?>
            <tr>
            <td><?php echo $v['id'] ?> </td>
            <td><?php echo $v['nombre'] ?></td>
            <td> <a href="index.php?m=vistaEditar&id=<?php echo $v['id'] ?>">Editar</a> </td>
            <td> <a href="index.php?m=eliminar&id=<?php echo $v['id'] ?>">Eliminar</a></td>
        </tr>

         <?php endforeach;
         ?>
     <?php else :?>
        <tr>
            <td colspan="3">No hay registros</td>
        </tr>
    <?php endif?>
        
    </tbody>
</table>
</div>
<?php

require_once("./vistas/layouts/footer.php");

?>