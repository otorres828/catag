<?php
session_start();
include 'database/db.php';

if (!empty($_POST['correo']) && !empty($_POST['clave'])) {

    $records = $conn->prepare('SELECT * FROM usuario WHERE correo = :correo');
    $records->bindParam(':correo', $_POST['correo']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if (count($results) > 0 && password_verify($_POST['clave'], $results['clave'])) {
        $_SESSION['user_id'] = $results['id'];
        $_SESSION['username']=  $results['username'];
        header("Location: Admin/producto.php");
    } else {
        $_SESSION['mensaje'] = "DATOS ERRONEOS ";
        $_SESSION['colorcito'] = "danger";
    }
}
if (isset($_GET['username'])) {
    $_SESSION['mensaje'] = "SESION CERRADA  ";
    $_SESSION['colorcito'] = "danger";
    header("Location: ../login.php");

}

?>