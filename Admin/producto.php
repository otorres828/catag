
<?php include '../logica/logproducto.php';?>
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
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <title>Catag - Producto</title>

</head>

<body>
    
<?php  include '../nabvar/nav.php'; ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col">

                <?php if (isset($_SESSION['mensaje'])) :  ?>
                    <div class="mt-5 alert alert-<?= $_SESSION['colorcito']; ?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['mensaje']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    </div>
                <?php
                    unset($_SESSION['mensaje']);
                endif; ?>

                <div class="col">
                    <div class="mb-3 mt-5">
                        <label for="exampleInputEmail1" class="form-label">Link personalizado</label>
                        <input type="link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="http://localhost/cat/Admin/tienda.php?username=<?=$p['username'];?>">
                        <div id="emailHelp" class="form-text">Comparte tu link</div>
                    </div>

                </div>
                <table class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th scope="col">#id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($producto = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <th scope="row"><?php echo $producto['id']; ?> </th>
                                <td><?php echo $producto['name']; ?></td>
                                <td><button title="Ver foto" data-bs-toggle="modal" data-bs-target="#modal-<?php echo $producto['id']; ?>" type="button" class="btn btn-primary btn-sm d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg></button>
                                </td>
                                <td><?php echo $producto['description']; ?></td>
                                <td><?php echo $producto['price']; ?></td>
                                <td><?php echo $producto['idcategoria']; ?></td>
                                <td class="text-center text-white">

                                    <a href="modificarproducto.php?idproducto=<?php echo $producto['id'] ?>"><i class="fas fa-pencil-alt btn btn-warning"></i></a>
                                    <a href="../logica/productoSave.php?idproducto=<?php echo $producto['id'] ?>"><i class="fas fa-trash-alt btn btn-danger"></i></a>
                                    <!-- <input class="form-check-input col-12" type="checkbox" value="" id="flexCheckIndeterminate"> -->
                                </td>
                            </tr>

                            <?php include './modal.php'; ?>

                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

<?php include '../cabeceras/footer.php';?>
