<?php include("../../includes/headercrud.php") ?>
<?php include("../../config/conexion.php") ?>


<div class="container">
    <table class="table table-striped-columns">
        <thead class="table-info">
            <th>Codigo</th>
            <th>Identificacion</th>
            <th>Nombres</th>
            <th>Apellido</th>
            <th>Fecha Nacimiento</th>
            <th>Direccion</th>
            <th>correo</th>
            <th>Ciudad</th>

        </thead>

        <tbody>
            <?php
            $query = "SELECT * FROM pacientes p
            INNER JOIN ciudades c ON 
            p.idCiudad = c.idCiudad";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['idPaciente'] ?></td>
                    <td><?php echo $row['identificacionPaciente'] ?></td>
                    <td><?php echo $row['nomresPaciente'] ?></td>
                    <td><?php echo $row['apellidoPaciente'] ?></td>
                    <td><?php echo $row['fechaNacimientoPaciente'] ?></td>
                    <td><?php echo $row['direccionPaciente'] ?></td>
                    <td><?php echo $row['correoPaciente'] ?></td>
                    <td><?php echo $row['nombreCiudad'] ?></td>
                    <td><a href="formularioEditarUsuario.php?idPaciente=<?php echo $row['idPaciente'] ?>"> Editar </a></td>
                    <td><a href="respuestaEliminarUsuario.php?idPaciente=<?php echo $row['idPaciente'] ?>">Eliminar</a> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br />

    <a href="Opticitas.php" class="enlace-crear">Crear Usuario</a>
</div>

<?php include("../../includes/footercrud.php") ?>