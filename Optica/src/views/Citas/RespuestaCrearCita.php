<?php include("../../config/conexion.php") ?>

<?php 
  $idCita = $_GET['idCita'];
  $fechaCita = $_POST['valorfechaCita'];
  $idPaciente= $_POST['idPaciente'];


  $sql = "INSERT INTO citas (idCita,fechaCita,idPaciente) 
  VALUES ('$idCita',' $fechaCita','$idPaciente')";

  $result = mysqli_query($conn, $sql);
  

  header("Location: listarCitas.php");

  ?>
