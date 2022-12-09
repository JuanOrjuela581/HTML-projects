<?php include("../../includes/headercrud.php") ?>
<?php include("../../config/conexion.php") ?>

<div class="contenido-opticita">
    <div class="titulos-opticita">
        <h2 class="TITULO_OPTICITA">Edita tu Producto Ahora</h2>
        <p class="crea-cuenta">Tu informacion es importante actualizala</p>
    </div>
<div class="container-formulario">
    <form action="respuestaEditarProducto.php?idProducto=<?php echo $_GET['idProducto'] ?>" method="post">

        <input class="Nombre" type="text" required class="form-control" id="codigoProducto" name="valorcodigoProducto" placeholder="codigoProducto">
        <input class="Apellido" type="text" required class="form-control" id="nombreProducto" name="valornombreProducto" placeholder="nombreProducto">
        <input class="Direccion" type="text" required class="form-control" id="descripcionProducto" name="valordescripcionProducto" placeholder="descripcionProducto">
        <input class="Numerodedocumento" type="text" required class="form-control" id="precioProducto" name="valorprecioProducto" placeholder="precioProducto">
        <input class="Fechadenacimiento" type="text" required class="form-control" id="existenciasProducto" name="valorexistenciasProducto" placeholder="existenciasProducto">

        <output class="Pais">
            <br />
            <br />

            <?php
            $query = "SELECT * FROM proveedores";
            $result = mysqli_query($conn, $query);
            ?>

            <select name="idProveedor">
                <?php
                while ($fila = $result->fetch_assoc()) :
                    $idProveedor = $fila['idProveedor'];
                    $nombreProveedor = $fila['nombreProveedor'];
                    echo "<option value=$idProveedor> $nombreProveedor <option/>";
                endwhile;
                ?>
            </select>
        </output>

        <button type="submit" class="btn_btn-primary" name="update"> Editar Producto</button>

    </form>

    <div class="formulario-fondo">
        <h3 class="titulo-fondo">Informacion de Contacto</h3>
        <p class="parrafo-fondo">Llama o envia un correo y nuestro equipo te contactara en menos de 24 horas!</p>
        <span class="celular-fondo">+880 163 675 6208</span>
        <span class="correo-fondo">contact@debuggersstudio.com</span>
        <span class="direccion-fondo">C.c. Unicentro L-1040 Remansos De Sta Inés</span>
        <img class="imagen-formulario" src="..\..\..\src\images\imagen-logo5.png" alt="logo" width="127px" height="91px">
    </div>

</div>