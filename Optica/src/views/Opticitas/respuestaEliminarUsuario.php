<?php include("../../config/conexion.php") ?>

<?php

$idPaciente = $_GET['idPaciente'];

$sql = "DELETE FROM pacientes WHERE 
idPaciente = $idPaciente";


$result = mysqli_query($conn,$sql);

header("Location: listarUsuarios.php");

?>