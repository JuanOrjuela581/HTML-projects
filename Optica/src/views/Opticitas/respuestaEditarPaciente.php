<?php include("../../config/conexion.php") ?>

<?php
    if(isset($_POST['update'])){
        $idPaciente = $_GET['idPaciente'];
        $identificacion_paciente= $_POST['valorNumerodedocumentoUsuario'];
        $nombres_paciente = $_POST['valorNombreUsuario'];
        $apellido_paciente= $_POST['valorApellidoUsuario'];
        $nacimiento_paciente = $_POST['valorFechadenacimientoUsuario'];
        $direccion_paciente =$_POST['valorDireccionUsuario'];
        $correo_paciente =$_POST['valorEmailUsuario'];
        $ciudad_paciente=$_POST['idCiudad'];

        $query = "UPDATE pacientes SET identificacionPaciente = '$identificacion_paciente',
        nomresPaciente='$nombres_paciente',
        apellidoPaciente = '$apellido_paciente',
        fechaNacimientoPaciente= '$nacimiento_paciente',
        direccionPaciente = '$direccion_paciente',
        correoPaciente= '$correo_paciente',
        idCiudad = '$ciudad_paciente'
        WHERE idPaciente = '$idPaciente'";

        $result = mysqli_query($conn, $query);
        header("Location: listarUsuarios.php");
    }
?>