<?php
include '../database/db.php';
include '../logica/strFuncs.php';
session_start();
$idusuario=$_SESSION['user_id'];


if (isset($_POST['newProducto'])) {
    if (isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['descripcion'])) {
        $idcategoria = $_POST['opcionCategoria'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
         //GUARDAR IMAGEN ATRIBUTOS
        $username= $_SESSION['username'];
        $imagen = $_FILES['imagen']['name'];
        $guardado=$_FILES['imagen']['tmp_name'];
        $carpeta="../uploads/";
        $ruta= $carpeta.$username;
        $direccion=$ruta.'/'.$imagen;
        move_uploaded_file($guardado,$direccion);
        $query = "INSERT INTO products(idusuario,idcategoria,name,image,description,price) VALUES ('$idusuario','$idcategoria','$nombre','$direccion','$descripcion','$precio')";
        $resultado = $conn->query($query);
        if (!$resultado) {
            die("Error 1: Error de query ");
        } else {
            echo "Producto insertado<br>";
            session_start();
            $_SESSION['mensaje'] = "Producto \" $nombre \" agregado 😃";
            $_SESSION['colorcito'] = "success";
            header("Location: ../Admin/producto.php");
        }
    } else {
        echo "Error al insertar producto, no estas recibiendo alguna variable";
    }
}

if (isset($_POST['modProducto'])) {

    if (isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['descripcion'])) {
            $idcategoria = $_POST['opcionCategoria'];
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $descripcion = $_POST['descripcion'];
             //GUARDAR IMAGEN ATRIBUTOS
            $username= $_SESSION['username'];
            $imagen = $_FILES['imagen']['name'];
            $guardado=$_FILES['imagen']['tmp_name'];
            $carpeta="../uploads/";
            $ruta= $carpeta.$username;
            $direccion=$ruta.'/'.$imagen;
            echo 
            move_uploaded_file($guardado,$direccion);
            $query = "UPDATE products SET  idcategoria='$idcategoria',name='$nombre',image='$direccion',description='$descripcion',price='$precio' WHERE id='$idproducto'";
            $resultado = $conn->query($query);
            if (!$resultado) {
                die("Error 1: Error de query ");
            } else {
                echo "Producto insertado<br>";
                session_start();
                $_SESSION['mensaje'] = "Producto \" $nombre \" modificado 😃";
                $_SESSION['colorcito'] = "success";
                header("Location: ../Admin/producto.php");
            }
    } else {
        echo "Error al insertar producto, no estas recibiendo alguna variable";
    }
}

    // ELIMINAR producto
if(isset($_GET['idproducto'])){
    $idproducto=$_GET['idproducto'];

    $query2 = "SELECT * FROM products WHERE id='$idproducto'";
    $r=  $conn->query($query2);
    $fila =$r->fetch(PDO::FETCH_ASSOC);
    $direccion=$fila['image'];

    $query = "DELETE FROM products WHERE id='$idproducto'";
    $resultado = $conn->query($query);
    $nombre=$fila['name'];
    if (!$resultado) {
        die("Error 1: Error de query ");
    } else {
        unlink($direccion);
        echo "Categoria eliminada<br>";
        session_start();
        $_SESSION['mensaje'] = "Producto \" $nombre \" eliminado 😃";
        $_SESSION['colorcito'] = "danger";
        header("Location: ../Admin/producto.php");
    }
   
    if (!$r) {
        die("Error 1: Error de query ");
    }

}

?>