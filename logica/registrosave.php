<?php
include '../database/db.php';

// AGREGAR CATEGORIA
if (isset($_POST['nuevoRegistro'])) {
    $nombres = $_POST['firstName'];
    $apellidos = $_POST['lastName'];
    $username = $_POST['username'];
    $correo = $_POST['email'];
    $emprendimiento = $_POST['brand'];
    $clave= password_hash($_POST['clave'],PASSWORD_BCRYPT);
    //GUARDAR IMAGEN ATRIBUTOS
    $imagen = $_FILES['imagen']['name'];
    $guardado=$_FILES['imagen']['tmp_name'];
      
    $carpeta="../uploads/";
    $ruta= $carpeta.$username;
    mkdir($ruta);
    $direccion=$ruta.'/'.$imagen;
    move_uploaded_file($guardado,$direccion);
    $query = "INSERT INTO usuario (nombres,apellidos,username,emprendimiento,clave,correo,imagen)VALUES('$nombres','$apellidos','$username','$emprendimiento','$clave','$correo','$imagen')";
    
    $resultado = $conn->query($query);
    
    if (!$resultado) {
        die("Error 1: Error de query ");
    }
    echo "REGISTRO EXITOSO<br>";
    session_start();
    $_SESSION['mensaje'] = "REGISTRO EXITOSO 😃";
    $_SESSION['colorcito'] = "success";
    header("Location: ../login.php");
}
?>