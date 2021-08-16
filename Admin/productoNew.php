<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: ../login.php");
}
include '../database/db.php';
$id= $_SESSION['user_id'];

$query = "SELECT * FROM categoria WHERE idusuario='$id'";
$resultado = $conn->query($query);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/estilos.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    
    <title>Catag - Nuevo producto</title>
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
                <form action="../logica/productoSave.php" method="POST" enctype="multipart/form-data">
                    <!-- Nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" placeholder="Escribe el nombre de tu producto" required>
                        <!-- <div id="nombreHelp" class="form-text">Nombre del producto</div> -->
                    </div>
                    <!-- Precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input name="precio" type="number" class="form-control" id="precio" aria-describedby="precio" placeholder="Escribe el precio de tu producto" required>
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
                        <textarea name="descripcion" type="text" rows="3" class="form-control" placeholder="Escribe una breve descripcion de tu producto" required></textarea>
                    </div>
                    <!-- Imagen -->
                    <div class="mb-3">
                        <label name="imagen" for="imagen" class="form-label">Imagen</label>
                        <input class="form-control" type="file" name="imagen">
                    </div>
                    <!-- Nuevo -->
                    <button name="newProducto" type="submit" class="btn btn-success" required>Nuevo</button>
                </form>
            </div>

        </div>
    </div>

    <?php include '../cabeceras/footer.php';?>

</body>
</html>