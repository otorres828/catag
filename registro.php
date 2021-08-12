


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catag - Registro</title>


    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a class="navbar-brand text-decoration-none" href="index.php">
                    <img src="assets/img/box.png" alt="" width="43" height="40" class="d-inline-block align-text-top">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
                    <!-- <li><a href="#" class="nav-link px-2 text-white">Caracteristicas</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Precios</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Acerca de</a></li> -->
                </ul>


                <div class="text-end">
                    <a href="login.php" class="btn btn-outline-light me-2">Login
                    </a>
                    <a href="registro.php" class="btn btn-warning">Sign-up
                    </a>
                </div>
            </div>
        </div>
    </header>



    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets/img/box.png" alt="" width="10%" height="5%">

        <h2>Registro de usuario</h2>

    </div>
    <div class="container">
        <main>
            <div class="row d-flex justify-content-center">

                <div class="col col-md-6 ">

                    <h4 class="mb-3">Ingrese sus datos </h4>
                    <form action="./logica/registrosave.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <!-- Nombres -->
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Nombres</label>
                                <input type="text" class="form-control" name="firstName" placeholder="Ingrese sus nombres" required>
                            </div>
                            <!-- Apellidos -->
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" name="lastName" placeholder="Ingrese sus apellidos" required>
                            </div>
                            <!-- Nombre de su emprendimiento -->
                            <div class="col-12">
                                <label for="years" class="form-label">Nombre de su Emprendimiento</label>
                                <div class="input-group ">
                                    <input type="text" class="form-control" name="brand" placeholder="Escriba el nombre de su emprendimiento" required>
                                </div>
                            </div>

                            <!-- VALIDAR USUARIO-->
                            <div class="col-12">
                                <label for="username" class="form-label">Nombre de usuario</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" name="username" placeholder="Username" required>

                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Correo electronico </label>
                                <input type="email" class="form-control" name="email" placeholder="ihc@larez.com" required>
                            </div>
                            <div class="col-6">
                                <label for="clave" class="form-label">Clave</label>
                                <input type="password" class="form-control" name="clave" placeholder="Ingrese una clave" required>
                            </div>
                            <div class="col-6">
                                <label for="conpassw" class="form-label">Confirmar Clave</label>
                                <input type="password" class="form-control" name="conpassw" placeholder="Confirme su Clave" required>
                            </div>
                            <div class="col-12">
                                <label for="profilePic" class="form-label">Foto de perfil</label>
                                <input class="form-control" type="file" name="imagen">
                            </div>

                        </div>

                        <div class="form-check my-4">
                            <input type="checkbox" class="form-check-input" id="save-info">
                            <label class="form-check-label" for="save-info">Acepto los terminos y condiciones</label>
                        </div>

                        <hr class="my-4">


                        <button name="nuevoRegistro" type="submit" class="w-100 btn btn-lg btn-success mb-2">Registrar nuevo emprendimiento 😄</button>

                        <!-- <a href="login.php" class="w-100 " type="submit"></a> -->
                    </form>
                </div>
            </div>
        </main>



        <footer class="my-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2021–2022 Olympicade</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Terminos</a></li>
                <li class="list-inline-item"><a href="#">Soporte</a></li>
            </ul>
        </footer>
    </div>



</body>

</html>