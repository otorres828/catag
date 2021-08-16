
<?php
    if(isset($_SESSION['user_id'])){
         $iduser = $_SESSION['user_id'];
         $nav = "SELECT * FROM usuario WHERE id='$iduser'";
         $r=  $conn->query($nav);
         $f =$r->fetch(PDO::FETCH_ASSOC);
         $user = $_SESSION['username']; 
          
        //while categoria
        $q2 = "SELECT * FROM categoria WHERE idusuario='$iduser'";
        $r2 = $conn->query($q2);

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

<div class="wrapper nab">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>Catag</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Ver Tienda</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Categorias</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                    <?php while ($re2 = $r2->fetch(PDO::FETCH_ASSOC)) { ?>
                        <li > <a href="#"><?= $re2['nombre']; ?></a></li>
                    <?php } ?>
                    </ul>
                </li>
                <li class="active">
                    
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Ordenar por</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Perfil</a>
                </li>
            
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Configuracion</a>
                </li>
                <li>
                    <a href="../logica/loglogin.php?username=<?=$user;?>" class="article">Cerrar Sesion</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
       

            <nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Barra de Navegacion</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Tienda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../Admin/producto.php">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./productoNew.php">Nuevo Producto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./categoria.php">Categoria</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        
    </div>

   



</header>