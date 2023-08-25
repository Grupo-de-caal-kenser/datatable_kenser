  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
        body{
            background-image: url('/datatable_kenser/public/images/cit2.jpg') !important;
            background-size:cover; 

        }

        .custom-bordered-table {
        border: 4px solid black;
        box-shadow: -1px 2px 4px 4px blue;
        }

        .custom-bordered-table tr {
            border: 2px solid black;
        }

        .custom-bordered-table th {
            border: 2px solid;
        }
        h1 {
           text-shadow: -1px 2px 4px 4px white;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/datatable_kenser/menu">Menú</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/datatable_kenser/productos/datatable">Producto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/datatable_kenser/productos/estadistica">Estadísticas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/datatable_kenser/clientes/datatable">Clientes</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
          <a class="btn btn-danger" href="/datatable_kenser/logout"><i class="bi bi-arrow-bar-left"></i>Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="row mb-3">
  <div class="col text-center">
    <h1>Proyecto SUBTTE. INF CAAL JUC</h1>
  </div>
</div>
<div class="row justify-content-center">
  <div class="col-lg-4">
    <img src="./images/cit.png" width="100%" alt="">
  </div>
</div>
<script src="build/js/inicio.js"></script>
</body>
</html>