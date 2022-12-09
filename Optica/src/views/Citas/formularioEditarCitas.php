<?php include("../../includes/headercrud.php") ?>
<?php include("../../config/conexion.php") ?>

<div class="contenido-opticita">
    <div class="titulos-opticita">
        <h2 class="TITULO_OPTICITA">Edita tu Cita Ahora</h2>
        <p class="crea-cuenta">Tu informacion es importante actualizala</p>
    </div>
<div class="container-formulario">
        <form action="respuestaEditarCita.php?idCita=<?php echo $_GET['idCita'] ?>" method="post">

            <span class="fecha-cita">Fecha Cita:</span>
            <input class="Apellido" type="date" required class="form-control" id="fechaCita" name="valorfechaCita" placeholder="fechaCita">
            
            <span class="paciente">Paciente:</span>
            <output class="Pais">
                <br />
                <br />

                <?php
                $query = "SELECT * FROM pacientes";
                $result = mysqli_query($conn, $query);
                ?>

                <select name="idPaciente">
                    <?php
                    while ($fila = $result->fetch_assoc()) :
                        $idPaciente = $fila['idPaciente'];
                        $nombrePaciente = $fila['nomresPaciente'];
                        echo "<option value=$idPaciente> $nombrePaciente <option/>";
                    endwhile;
                    ?>
                </select>
            </output>
            
            <button type="submit" class="btn_btn-primary" name="update">Editar</button>
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