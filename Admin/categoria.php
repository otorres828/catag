<?php  include '../logica/logcategoria.php';?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    
      
 
 
    <title>Catag - Nuevo Categoria</title>
</head>

<body>
    <?php include '../nabvar/nav.php'; ?>
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <!-- NUEVA Categoria -->
            <div class="col-md-4 mt-5">
                <form action="../logica/savecategoria.php" method="POST">
                    <!-- Nombre -->
                    <h4 class="mt-1"><strong>REGISTRE NUEVA CATEGORIA</strong></h4>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input name="nombre_categoria" type="text" class="form-control" id="nombre_categoria" aria-describedby="nombre_categoria" placeholder="Escribe el nombre de la categoria" required>
                        <div id="nombre_categoriaHelp" class="form-text">Nombre de la Categoria</div>
                    </div>
                    <!-- Nueva Categoria -->
                    <button name="newCategoria" type="submit" class="btn btn-success mb-3 col-12">Nueva Categoria</button>
                </form>
            </div>
            <!-- AQUI ESTA LA TABLA -->
            <div class="col-md-4 mt-5">
                <?php if (isset($_SESSION['mensaje'])) { ?>
                    <div class="alert alert-<?= $_SESSION['colorcito'];?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['mensaje']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php unset($_SESSION['mensaje']); ?>
                <?php } ?>
                <!-- TABLA Categoria -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th >#id</th>
                                <th >Nombre</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- BUCLU ELEMENTOS TABLA -->
                            <?php while ($producto = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
                                <tr>
                                    <td><?php echo $producto['idcategoria']; ?> </td>
                                    <td><?php echo $producto['nombre']; ?></td>
                                    <td>
                                        <a href="./modificarcategoria.php?idcategoria=<?php echo $producto['idcategoria'] ?>"><i class="fas fa-pencil-alt btn btn-warning"></i></a>
                                        <a href="../logica/savecategoria.php?idcategoria=<?php echo $producto['idcategoria'] ?>"><i class="fas fa-trash-alt btn btn-danger"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f0abf2240e.js" crossorigin="anonymous"></script>
    <?php include '../cabeceras/footer.php';?>


</body>

</html>




<!--
               -
               <div class="col-4">
                 <form action="savecategoria.php" method="POST">
                  
                  
                    <h4 class="mt-1"><strong>ELIMINAR CATEGORIA</strong></h4>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input name="idcategoria" type="number" class="form-control" id="idcategoria" aria-describedby="idcategoria" placeholder="Id de la categoria que quiere eliminar">                        <div id="nombreHelp" class="form-text">Id de la Categoria</div>
                    </div>
                    
                   
                    <button name="deleCategoria" type="submit" class="btn btn-success">Eliminar Categoria</button>
                  </form>
            </div>  

-->