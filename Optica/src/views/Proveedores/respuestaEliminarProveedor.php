<?php include("../../config/conexion.php") ?>

<?php

$idProveedor = $_GET['idProveedor'];

$sql = "DELETE FROM proveedores WHERE 
idProveedor = $idProveedor";


$result = mysqli_query($conn,$sql);

header("Location: listarProveedores.php");

?>