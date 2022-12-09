<?php include("../../config/conexion.php") ?>

<?php
if (isset($_POST['update'])) {
    $idProveedor = $_GET['idProveedor'];
    $nombreProveedor= $_POST['valorNombreProveedor'];
    $telefonoProveedor = $_POST['valorTelefonoProveedor'];
    $correoProveedor= $_POST['valorCorreoProveedor'];
  

    $query = "UPDATE proveedores SET nombreProveedor = '$nombreProveedor',
        telefonoProveedor='$telefonoProveedor',
        coreoProveedor = ' $correoProveedor'
        WHERE idProveedor = '$idProveedor'";

    $result = mysqli_query($conn, $query);
    header("Location: listarProveedores.php");
}
?>