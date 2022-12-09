<?php include("../../config/conexion.php") ?>

<?php 
  $nombreProveedor= $_POST['valorNombreProveedor'];
  $telefonoProveedor = $_POST['valorTelefonoProveedor'];
  $correoProveedor= $_POST['valorCorreoProveedor'];

  $sql = "INSERT INTO proveedores (nombreProveedor,telefonoProveedor,coreoProveedor) 
  VALUES ('$nombreProveedor',' $telefonoProveedor','$correoProveedor')";

  $result = mysqli_query($conn, $sql);
  

  header("Location: listarProveedores.php");

  ?>
