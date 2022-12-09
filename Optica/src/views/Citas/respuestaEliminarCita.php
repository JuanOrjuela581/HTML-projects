<?php include("../../config/conexion.php") ?>

<?php

$idCitas = $_GET['idCita'];

$sql = "DELETE FROM citas WHERE 
idCita = $idCitas";


$result = mysqli_query($conn,$sql);

header("Location: listarCitas.php");

?>