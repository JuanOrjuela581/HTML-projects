<?php include("../../config/conexion.php") ?>

<?php 
  $identificacion_paciente= $_POST['valorNumerodedocumentoUsuario'];
  $nombres_paciente = $_POST['valorNombreUsuario'];
  $apellido_paciente= $_POST['valorApellidoUsuario'];
  $nacimiento_paciente = $_POST['valorFechadenacimientoUsuario'];
  $direccion_paciente =$_POST['valorDireccionUsuario'];
  $correo_paciente =$_POST['valorEmailUsuario'];
  $ciudad_paciente=$_POST['idCiudad'];

  $sql = "INSERT INTO pacientes (identificacionPaciente,nomresPaciente,apellidoPaciente,fechaNacimientoPaciente,direccionPaciente, correoPaciente,idCiudad) 
  VALUES ('$identificacion_paciente',' $nombres_paciente','$apellido_paciente',' $nacimiento_paciente','$direccion_paciente','$correo_paciente','$ciudad_paciente')";

  $result = mysqli_query($conn, $sql);
  

  header("Location: listarUsuarios.php");

  ?>
