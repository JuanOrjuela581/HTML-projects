<?php include("../../config/conexion.php") ?>

<?php 
  $codigoProducto= $_POST['valorcodigoProducto'];
  $nombreProducto = $_POST['valornombreProducto'];
  $descripcionProducto= $_POST['valordescripcionProducto'];
  $precioProducto = $_POST['valorprecioProducto'];
  $existenciasProducto =$_POST['valorexistenciasProducto'];
  $codigoProveedor=$_POST['idProveedor'];

  $sql = "INSERT INTO productos (codigoProducto,nombreProducto,descripcionProducto,precioProducto,existenciasProducto,idProveedor) 
  VALUES ('$codigoProducto',' $nombreProducto','$descripcionProducto',' $precioProducto','$existenciasProducto','$codigoProveedor')";

  $result = mysqli_query($conn, $sql);
  

  header("Location: listarProductos.php");

  ?>
