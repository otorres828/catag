<?php
    if(isset($_SESSION['user_id'])){
         $iduser = $_SESSION['user_id'];
         $nav = "SELECT * FROM usuario WHERE id='$iduser'";
         $r=  $conn->query($nav);
         $f =$r->fetch(PDO::FETCH_ASSOC);
         $user = $_SESSION['username']; 
          
     }
     if(isset($_GET['username'])){
        $user = $_GET['username'];         
     }
?>
<header >
<style>
.nab{
    position:fixed;
    left:0;
    top:0;
    width:100%;
    z-index:1;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark nab">
        <div class="container-fluid">
            <a class="navbar-brand" href="./tienda.php?username=<?=$user;?>">Mi Tienda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../Admin/producto.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./productoNew.php">Nuevo producto</a>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link" href="./categoria.php">Categoria</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <div class="d-flex justify-content-center">
                        <a href="../logica/loglogin.php?username=<?=$user;?>" class="btn btn-warning">Cerrar Sesion</a>
                    </div>
                </form>
            </div>
        </div>
</nav>

</header>