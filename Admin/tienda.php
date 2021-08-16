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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">

    <title>Catalogo - Tienda</title>
</head>

<body>
   
    <?php include '../nabvar/nav.php';?>
    
    <div class="container ">
        <div class="row mt-5 mb-5">
            <div class="col col-md-12 mt-3">
                <div class="row row-cols-1 row-cols-md-4 g-3 mt-1 mb-4">
                    <?php while ($producto = $r3->fetch(PDO::FETCH_ASSOC)) { ?>
                        <div class="col">
                            <div class="card h-200">   
                                <div class="card-body">
                                <img src="<?=$producto['image']; ?> " width="100" height="100" class="card-img-top" alt="<?=$producto['image']; ?>" >
                                    <h5 class="card-title"><i class="fas fa-star" style="color:#F7D917"></i><?php echo $producto['name']; ?></br><span class="text-success"><?php echo $producto['price']; ?>$</span></h5>
                                    <p class="card-text"><small><?= $producto['description']; ?></small></p>
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

            
