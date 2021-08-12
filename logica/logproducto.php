<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
}

include '../database/db.php';
$id = $_SESSION['user_id'];
$query = "SELECT * FROM products WHERE idusuario='$id'";
$q2 =  "SELECT * FROM usuario WHERE id='$id'";
$resultado = $conn->query($query);
$r2 =$conn->query($q2);
$p = $r2->fetch(PDO::FETCH_ASSOC);

?>