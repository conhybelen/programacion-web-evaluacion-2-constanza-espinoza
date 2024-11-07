<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>
    <header></header>
    <nav>
        <div class="relativo pt-nav cabecera-2021 btn" id="cabecera2021">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <a href="https://puntoticket.com/">
                                        <img src="https://static.ptocdn.net/especiales/nav/v1/dark/logo-puntoticket-2021.png"
                                            class="img-fluid" alt="logo punto ticket 2021">
                                    </a>
                                </div>
                                <ul class="nav-links">
                                    <li><a href="#">PRECIOS</a></li>
                                    <li><a href="#">TICKETS</a></li>
                                    <li><a href="#">INFO EVENTO</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-sm w-50 form-register">
        <h2 class="titulo">Formulario de registro</h2>
        <form action="procesar.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="Inputnombrecompleto" class="form-label">Nombre completo</label>
                <input type="text" class="form-control w-75" id="Inputnombrecompleto" name="nombre">
            </div>
            <div class="mb-3">
                <label for="Inputrut" class="form-label">Rut</label>
                <input type="number" class="form-control w-75" id="Inputrut" name="rut">
            </div>
            <div class="mb-3">
                <label for="InputEmail" class="form-label">Email</label>
                <input type="email" class="form-control w-75" id="InputEmail" name="email">
            </div>
            <div class="mb-3">
                <label for="InputTelefono" class="form-label">Teléfono</label>
                <input type="number" class="form-control w-75" id="InputTelefono" name="telefono">
            </div>
            <div class="mb-3">
                <label for="InputImagen" class="form-label">Imagen</label>
                <input type="file" class="form-control w-75" id="InputImagen" name="imagen">
            </div>
            <button type="submit" class="btn btn-unico">Aceptar</button>
        </form>
    </div>
    <footer>

    
    </footer>
</body>
</html>