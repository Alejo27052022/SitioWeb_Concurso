<?php
    include("conexion.php");

    if(isset($_POST['guardar'])){
        if(strlen($_POST['name']) >=1 && strlen($_POST['apellido']) >=1 && strlen($_POST['email']) >=1 && strlen($_POST['pass']) >=1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['direccion']) >=1){
            $nombre = trim($_POST['name']);
            $apellido = trim($_POST['apellido']);
            $email = trim($_POST['email']);
            $pass = trim($_POST['pass']);
            $telefono = trim($_POST['telefono']);
            $direccion = trim($_POST['direccion']);
            $fecha_reg = date("d/m/y");
            $insertar = "INSERT INTO datos_estudiante(nombre, apellido, email, telefono, pass, direccion, fecha) VALUES ('$nombre','$apellido','$email','$telefono','$pass','$direccion','$fecha_reg')";
            $resultado = mysqli_query($conex, $insertar);
        }

    }

    if(isset($_POST['enviar'])){
        if(strlen($_POST['name_s']) >=1 && strlen($_POST['email_s']) >=1 && strlen($_POST['subject_s']) >=1 && strlen($_POST['message_s']) >= 1){
            $nombre_s = trim($_POST['name_s']);
            $email_s = trim($_POST['email_s']);
            $subject_s = trim($_POST['subject_s']);
            $message_s = trim($_POST['message_s']);
            $fecha = date("d/m/y");
            $insertar_dat = "INSERT INTO info_datos(nombre, email, tema, mensaje, fecha) VALUES ('$nombre_s','$email_s','$subject_s','$message_s','$fecha')";
            $resultado_info = mysqli_query($conex, $insertar_dat);
    }
}
?>
