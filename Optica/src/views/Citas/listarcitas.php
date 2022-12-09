<?php include("../../includes/headercrud.php") ?>
<?php include("../../config/conexion.php") ?>

<div class="container">
    <table class="table table-striped-columns">
        <thead class="table-info">
            <th>idCita</th>
            <th>fechaCita</th>
            <th>Nombre Paciente</th>
            
        </thead>

        <tbody>
            <?php
            $query = "SELECT * FROM citas C
            INNER JOIN pacientes pc  ON 
            c.idPaciente = pc.idPaciente";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['idCita'] ?></td>
                    <td><?php echo $row['fechaCita'] ?></td>
                    <td><?php echo $row['nomresPaciente'] ?></td>
                    <td><a href="formularioEditarCitas.php?idCita=<?php echo $row['idCita'] ?>"> Editar </a></td>
                    <td><a href="respuestaEliminarCita.php?idCita=<?php echo $row['idCita'] ?>">Eliminar</a> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br />

    <a href="crearCitas.php" class="enlace-crear">Crear Cita</a>
</div>

<?php include("../../includes/footercrud.php") ?>