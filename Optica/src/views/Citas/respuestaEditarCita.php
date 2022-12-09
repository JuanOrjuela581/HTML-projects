<?php include("../../config/conexion.php") ?>

<?php
if (isset($_POST['update'])) {
    $idCita = $_GET['idCita'];
    $fechaCita = $_POST['valorfechaCita'];
    $idPaciente = $_POST['idPaciente'];

    $query = "UPDATE citas SET fechaCita = '$fechaCita',
        idPaciente='$idPaciente'
        WHERE idCita = '$idCita'";

    $result = mysqli_query($conn, $query);
    header("Location: listarcitas.php");
}
?>