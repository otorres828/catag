<?php
include '../database/db.php';

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $q1 = "SELECT * FROM usuario WHERE username='$username'";
    $r1 = $conn->query($q1);

    $re1 = $r1->fetch(PDO::FETCH_ASSOC);
    $idusuario = $re1['id'];
    if (!$re1) {
        header("Location: ../login.php");
    }
    //while categoria
    $q2 = "SELECT * FROM categoria WHERE idusuario='$idusuario'";
    $r2 = $conn->query($q2);
    //while producto
    $q3 = "SELECT * FROM products WHERE idusuario='$idusuario'";
    $r3 = $conn->query($q3);
}
$query = "SELECT  *  FROM products";
$resultado = $conn->query($query);

?>
