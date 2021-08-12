<?php 
session_start();
include '../database/db.php';
$id= $_SESSION['user_id'];

$query = "SELECT * FROM categoria WHERE idusuario='$id'";
$resultado = $conn->query($query);


//GUARDA EN VARIABLES LOS DATOS ANTES DE MODIFICAR
if(isset($_GET['idproducto'])){
    $idproducto=$_GET['idproducto'];
    $q = "SELECT * FROM products WHERE id='$idproducto'";
    $r = $conn->query($q);

    if (!$r) {
        die("Error 1: Error de query ");
    }
    $fila =$r->fetch(PDO::FETCH_ASSOC);
    $nombre= $fila['name'];
    $descripcion = $fila['description'];
    $price = $fila['price'];   
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/img/favicon/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Catag - Modificar producto</title>
</head>

<body>
    <?php include '../nabvar/nav.php'; ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col mt-5">

                <?php if (isset($_SESSION['mensaje'])) :  ?>
                    <div class="alert alert-<?= $_SESSION['colorcito']; ?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['mensaje']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['mensaje']);
                endif; ?>
                <form action="../logica/productoSave.php?idpro=<?php echo $idproducto ?>" method="POST" enctype="multipart/form-data">
                    <!-- Nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input name="nombre" value="<?php echo $nombre;?>" class="form-control" id="nombre" aria-describedby="nombreHelp" placeholder="Escribe el nombre de tu producto" required>
                        <!-- <div id="nombreHelp" class="form-text">Nombre del producto</div> -->
                    </div>
                    <!-- Precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input name="precio"value="<?php echo $price;?>" type="number" class="form-control" id="precio" aria-describedby="precio" placeholder="Escribe el precio de tu producto" required>
                        <!-- <div id="precio" class="form-text">Precio del producto</div> -->
                    </div>
                    <!-- Categoria -->
                    <div class="mb-3">
                        <label for="Categoria" class="form-label">Categoria</label>
                        <select name="opcionCategoria" class="form-select" aria-label="Selecciona la categoria" required>
                            <option selected>Selecciona la categoria</option>
                            <?php while ($producto = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
                            <option value="<?=$producto['idcategoria']?>"><?=$producto['nombre']?></option>
                            
                            <?php }?>
                        </select>
                    </div>
                   
                    <!-- Descripcion -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <textarea name="descripcion"  type="text" rows="3" class="form-control" placeholder="Escribe una breve descripcion de tu producto" required><?php echo $descripcion;?></textarea>
                    </div>
                    <!-- Imagen -->
                    <div class="mb-3">
                        <label name="imagen" for="imagen" class="form-label">Imagen</label>
                        <input class="form-control" type="file" id="imagen">
                    </div>
                    <!-- Nuevo -->
                    <button name="modProducto" type="submit" class="btn btn-success" required>Modificar</button>
                </form>
            </div>

        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>