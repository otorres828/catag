<?php
include '../database/db.php';
// MODIFICAR CATEGORIA

if(isset($_GET['idcategoria'])){
    $idcategoria=$_GET['idcategoria'];

    $query = "SELECT*FROM categoria where idcategoria='$idcategoria'";
    $resultado = $conn->query($query);
    $r = $resultado->fetch(PDO::FETCH_ASSOC);
    $nombre = $r['nombre'];
    if (!$resultado) {    
        die("Error 1: Error de query ");
    }

    if(isset($_POST['actualizar'])){
        $idcategoria = $_GET['idcategoria'];
        $nombre= $_POST['nombre'];
         session_start();
        $query = "UPDATE categoria SET  nombre='$nombre' WHERE idcategoria='$idcategoria'";
        $resultado = $conn->query($query);
        $_SESSION['mensaje']='Categoria Actualizada';
        $_SESSION['colorcito']='warning';
        header("Location: categoria.php");
    
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Catag - Modificar producto</title>
</head>

<body>
    <?php// include '../nabvar/nav.php';?>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body  mt-5">
                <form action="modificarcategoria.php?idcategoria=<?php echo $_GET['idcategoria'];?>" method="POST">
                        <div class="form-group mb-3">
                            <label for="nombre" class="form-label"><strong>Nombre</strong></label>
                            <input type="text" name="nombre" value="<?php echo $nombre?>" class="form-control" placeholder="Actualice La Categoria" required>
                            <div id="nombre_categoriaHelp" class="form-text">Nombre de la Categoria</div>
                        </div> 
                        <button class="btn btn-success mt-3 col-12" name="actualizar">
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f0abf2240e.js" crossorigin="anonymous"></script>                           
</body>

</html>
