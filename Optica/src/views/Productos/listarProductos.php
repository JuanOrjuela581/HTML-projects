<?php include("../../includes/headercrud.php") ?>
<?php include("../../config/conexion.php") ?>

<div class="container">
    <table class="table table-striped-columns">
        <thead class="table-info">
            <th>idProducto</th>
            <th>codigoProducto</th>
            <th>nombreProducto</th>
            <th>descripcionProducto</th>
            <th>precioProducto</th>
            <th>existenciasProducto</th>
            <th>NombreProveedor</th>

        </thead>

        <tbody>
            <?php
            $query = "SELECT * FROM productos p
            INNER JOIN proveedores pr  ON 
            p.idProveedor = pr.idProveedor";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['idProducto'] ?></td>
                    <td><?php echo $row['codigoProducto'] ?></td>
                    <td><?php echo $row['nombreProducto'] ?></td>
                    <td><?php echo $row['descripcionProducto'] ?></td>
                    <td><?php echo $row['precioProducto'] ?></td>
                    <td><?php echo $row['existenciasProducto'] ?></td>
                    <td><?php echo $row['nombreProveedor'] ?></td>
                    <td><a href="formularioEditarProducto.php?idProducto=<?php echo $row['idProducto'] ?>"> Editar </a></td>
                    <td><a href="respuestaEliminarProducto.php?idProducto=<?php echo $row['idProducto'] ?>">Eliminar</a> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br />

    <a href="crearProducto.php" class="enlace-crear">Crear Producto</a>
</div>

<?php include("../../includes/footercrud.php") ?>