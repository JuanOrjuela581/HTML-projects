<?php include("../../config/conexion.php") ?>

<?php
if (isset($_POST['update'])) {
    $idProducto = $_GET['idProducto'];
    $codigoProducto = $_POST['valorcodigoProducto'];
    $nombreProducto = $_POST['valornombreProducto'];
    $descripcionProducto = $_POST['valordescripcionProducto'];
    $precioProducto = $_POST['valorprecioProducto'];
    $existenciasProducto = $_POST['valorexistenciasProducto'];
    $codigoProveedor = $_POST['idProveedor'];

    $query = "UPDATE productos SET codigoProducto = '$codigoProducto',
        nombreProducto='$nombreProducto',
        descripcionProducto = '$descripcionProducto',
        precioProducto= '$precioProducto',
        existenciasProducto = '$existenciasProducto',
        idProveedor= '$codigoProveedor'
        WHERE idProducto = '$idProducto'";

    $result = mysqli_query($conn, $query);
    header("Location: listarProductos.php");
}
?>