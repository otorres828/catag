<?php session_start();
include '../database/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
}
$id = $_SESSION['user_id'];
$query = "SELECT * FROM categoria WHERE idusuario='$id'";
$resultado = $conn->query($query);

?>