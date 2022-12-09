<?php include("../../includes/headercrud.php") ?>
<?php include("../../config/conexion.php") ?>
<div class="contenido-opticita">
    <div class="titulos-opticita">
        <h2 class="TITULO_OPTICITA">Edita tu Proveedor Ahora</h2>
        <p class="crea-cuenta">Tu informacion es importante actualizala</p>
    </div>
<div class="container-formulario">
        <form action="respuestaEditarProveedor.php?idProveedor=<?php echo $_GET['idProveedor'] ?>" method="post">

            <input class="Nombre" type="text" required class="form-control" id="nombreProveedor" name="valorNombreProveedor" placeholder="Nombre Proveedor">
            <input class="Apellido" type="text" required class="form-control" id="telefonoProveedor" name="valorTelefonoProveedor" placeholder="Telefono Proveedor">
            <input class="E-mail" type="text" required class="form-control" id="correoProveedor" name="valorCorreoProveedor" placeholder="Correo">
            
            <button type="submit" class="btn_btn-primary" name="update">Crear Proveedor</button>
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

</div>