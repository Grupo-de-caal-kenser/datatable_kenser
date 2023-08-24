<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="build/js/app.js"></script>
    <link rel="shortcut icon" href="<?= asset('./images/cit.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= asset('build/styles.css') ?>">
    <script>
    window.history.pushState(null, "", window.location.href);
    window.onpopstate = function(event) {
        window.history.pushState(null, "", window.location.href);
    };
    </script>
    <style>
        body{
            background-image: url('/datatable_kenser/public/images/ejercito2.jpg') !important;
            background-size:cover; 

        }
    </style>
    <title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
        
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/datatable_kenser/">
                <img src="<?= asset('./images/ejercito.jpg') ?>" width="35px'" alt="cit" >
                INGESOFT
            </a>
            <div class="collapse navbar-collapse" id="navbarToggler">
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: 0;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/datatable_kenser/"><i class="bi bi-house-fill me-2"></i>Inicio</a>
                    </li>
                    <a class="dropdown-item nav-link text-white " href="/datatable_kenser/productos/datatable"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>DATATABLE</a>
                    <a class="dropdown-item nav-link text-white " href="/datatable_kenser/productos/estadistica"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>ESTADISTICA</a>
                    <a class="dropdown-item nav-link text-white " href="/datatable_kenser/productos/estadistica"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>CLIENTES</a>
                </ul> 
                <form>
                    <div class="col-lg-1 d-grid mb-lg-0 mb-2">
                    <a href="/datatable_kenser/logout" class="btn btn-danger">Cerrar sesión</a>
                    </div>
                </form>          
            </div>
        </div>
        
    </nav>
    <div class="progress fixed-bottom" style="height: 6px;">
        <div class="progress-bar progress-bar-animated bg-danger" id="bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="container-fluid pt-5 mb-4" style="min-height: 85vh">
        
        <?php echo $contenido; ?>
    </div>
    <div class="container-fluid " >
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <p style="font-size:xx-small; font-weight: bold;">
                        Comando de Informática y Tecnología, <?= date('Y') ?> &copy;
                </p>
            </div>
        </div>
    </div>
</body>
</html>