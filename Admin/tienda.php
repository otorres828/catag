<?php  include '../logica/logtienda.php';?>

<!doctype html>
<html lang="en">

<head>
    <meta name="theme-color" content="#F0DB4F">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=3">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Catalogo - Tienda</title>
</head>

<body>
   
    <?php include '../nabvar/nav.php';?>
    
    <div class="container ">
        <div class="row mt-5 mb-5">
     
            <!-- Columna izquierda -->
            <div class="col col-md-3 mt-4">
                
                <h6 class="text-center"><strong>Categorias</strong></h6>
                <ul class="list-group">
                    <li class="list-group-item " aria-current="true"><a href="#">TODOS</a></li>
                    <?php while ($re2 = $r2->fetch(PDO::FETCH_ASSOC)) { ?>
                        <li class="list-group-item "> <a href="#"><?= $re2['nombre']; ?></a></li>

                    <?php } ?>
                </ul>
                <hr>
                <h6 class="text-center mt-3">Ordenar por </h6>
                <ul class="list-group">
                    <li class="list-group-item " aria-current="true"><a href="#" Menor precio</a></li>
                    <li class="list-group-item "><a href="#">Mayor precio</a></li>
                    <li class="list-group-item"><a href="#">A - Z</a></li>
                    <li class="list-group-item"><a href="#">Z - A</a></li>
                    <li class="list-group-item"><a href="#">Promociones</a></li>
                </ul>
                <hr>
                <h6 class="text-center mt-3">Redes Sociales </h6>
                <ul class="list-group">
                    <li class="list-group-item " aria-current="true">Instagram</li>
                    <li class="list-group-item ">Whatsapp +58 424-9612217</li>
                    <li class="list-group-item">JesusAlfonzo97 @gmail.com
                    </li>
                    <li class="list-group-item">Puerto Ordaz, Caroní, Bolívar, Venezuela </li>
                </ul>
            </div>

            <!-- Columna derecha  -->
            <div class="col col-md-9 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-4 mt-1 mb-4">
                    <?php while ($producto = $r3->fetch(PDO::FETCH_ASSOC)) { ?>
                        <div class="col">
                            <div class="card h-100">   
                                <div class="card-body">
                                <img src="<?=$producto['image']; ?> " width="120" height="150" class="card-img-top" alt="<?=$producto['image']; ?>" >
                                    <h5 class="card-title"><i class="fas fa-star" style="color:F7D917"></i><?php echo $producto['name']; ?></br><span class="text-success"><?php echo $producto['price']; ?>$</span></h5>
                                    <p class="card-text"><?= $producto['description']; ?></p>
                                </div>
                                <!---<button href="#<?php echo $producto['name'] ?>" class="btn btn-success">Comprar</button> !-->
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
    
<?php include '../cabeceras/footer.php';?>

            
