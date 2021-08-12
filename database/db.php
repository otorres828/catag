<?php
/*
$db_host = 'sql201.epizy.com';
$db_name = 'epiz_29339238_Catag';
$db_user = 'epiz_29339238';
$db_password = 'FdZQVPSbiO7lYFI';
*/
$db_host = 'localhost';
$db_name = 'catag';
$db_user = 'root';
$db_password = '';
$conn = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name, $db_user, $db_password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (!$conn) {
    echo "Error de conexion <br>";
} else {
    // echo "Conexion exitosa <br>";
}
