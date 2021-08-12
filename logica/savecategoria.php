<?php

include '../database/db.php';

// AGREGAR CATEGORIA
if (isset($_POST['newCategoria'])) {
    
    echo "Estas recibiendo del submit<br>";
    if (isset($_POST['nombre_categoria'])) {
        session_start();
        $nombre_categoria = $_POST['nombre_categoria'];
        $idusuario= $_SESSION['user_id'];
        $query = "INSERT INTO categoria(idusuario,nombre) VALUES ('$idusuario','$nombre_categoria')";
        $resultado = $conn->query($query);
        if (!$resultado) {
            die("Error 1: Error de query ");
        } else {
            echo "Categoria insertado<br>";
            
            $_SESSION['mensaje'] = "Categoria \" $nombre_categoria \" agregado 😃";
            $_SESSION['colorcito'] = "success";
            header("Location: ../Admin/categoria.php");
        }
    }
}



// MODIFICAR CATEGORIA
if (isset($_POST['modCategoria'])) {
    echo "Estas recibiendo del submit<br>";
    if (isset($_POST['newNombre'])  && isset($_POST['idcatmod']) ) {

        $idcategoria = $_POST['idcatmod'];
        $newNombre   = $_POST['newNombre'];
        
        $query = "UPDATE categoria SET nombre = '$newNombre' where idcategoria='$idcategoria'";
        $resultado = $conn->query($query);
        if (!$resultado) {
            die("Error 1: Error de query ");
        } else {
            echo "Categoria insertado<br>";
            session_start();
            $_SESSION['mensaje'] = "Categoria \" $idcatmod \" Modificada 😃";
            $_SESSION['colorcito'] = "success";
            header("Location: ../Admin/categoria.php");
        }
    }
}


// ELIMINAR CATEGORIA
if(isset($_GET['idcategoria'])){
    $idcategoria=$_GET['idcategoria'];

    $query = "DELETE FROM categoria WHERE idcategoria='$idcategoria'";
    $query2 = "SELECT * FROM categoria WHERE idcategoria='$idcategoria'";

    $r=  $conn->query($query2);
    $fila =$r->fetch(PDO::FETCH_ASSOC);
    $nombre=$fila['nombre'];
    $resultado = $conn->query($query);
    if (!$resultado) {
        die("Error 1: Error de query ");
    } else {
        echo "Categoria eliminada<br>";
        session_start();
        $_SESSION['mensaje'] = "Categoria \" $nombre \" eliminada 😃";
        $_SESSION['colorcito'] = "danger";
        header("Location: ../Admin/categoria.php");
    } 


}
?>




<!-- ELIMINAR CATEGORIA
if (isset($_POST['deleCategoria'])) {
    echo "Estas recibiendo del submit<br>";
    if (isset($_POST['idcategoria'])) {

        $idcategoria = $_POST['idcategoria'];

        $query = "DELETE FROM categoria WHERE idcategoria='$idcategoria'";
        $resultado = $conn->query($query);
        if (!$resultado) {
            die("Error 1: Error de query ");
        } else {
            echo "Categoria insertado<br>";
            
            $_SESSION['mensaje'] = "Categoria \" $idcategoria \" eliminada 😃";
            $_SESSION['colorcito'] = "success";
            header("Location: categoria.php");
        }
    }
}
-!>