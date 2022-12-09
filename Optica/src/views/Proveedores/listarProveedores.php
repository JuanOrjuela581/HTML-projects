<?php include("../../includes/headercrud.php") ?>
<?php include("../../config/conexion.php") ?>


<div class="container">
<table class="table table-striped-columns">
    <thead class="table-info">
        <th>Id</th>
        <th>Nombre </th>
        <th>Telefono</th>
        <th>Correo</th>
    </thead>

    <tbody>
        <?php
        $query ="SELECT * FROM proveedores";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($result)){ ?>
        <tr>
            <td><?php echo $row ['idProveedor'] ?></td>
            <td><?php echo $row ['nombreProveedor'] ?></td>
            <td><?php echo $row ['telefonoProveedor'] ?></td>
            <td><?php echo $row ['coreoProveedor'] ?></td>
            <td><a href="formularioEditarProveedor.php?idProveedor=<?php echo $row['idProveedor']?>"> Editar </a></td>
            <td><a href="respuestaEliminarProveedor.php?idProveedor=<?php echo $row['idProveedor']?>">Eliminar</a> </td>
        </tr>
            
       <?php } ?>
    </tbody>
</table>
</div>
<br/>

<a href="crearProveedor.php" class="enlace-crear">Crear Proveedor</a>

<?php include("../../includes/footercrud.php") ?>