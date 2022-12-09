<?php include("../../config/conexion.php") ?>

<?php

$idProducto = $_GET['idProducto'];

$sql = "DELETE FROM productos WHERE 
idProducto = $idProducto";


$result = mysqli_query($conn,$sql);

header("Location: listarProductos.php");

?>