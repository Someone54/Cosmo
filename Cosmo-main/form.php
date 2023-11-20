<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmos School</title>
    <!--CSS-->
    <link rel="stylesheet" href="styleform.css">
    <!--bostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="usuarios-alt2.png">
    <style>
    .error {color: FF0000;}
    .invalid-feedback{ display:block !important}
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body id="body" >
<div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div id="Nav">
                    <div>
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#" >Inspiratec</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                      <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                          <a class="nav-link " href="index.php">Home</a>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link " href="#">Inscription</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link " href="Log in.php">Log in</a>
                        </li>
                      </ul>
                    </div>
                </nav>
                </div>
            </div>
        </div>
      </div>
    </div>
    </div>

    <div class="container">
    <div>
    <?php
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $tipoId = $_POST['tipoId'];
        $numeroDoc = $_POST['numeroDoc'];
        $sex = $_POST['sex'];
        $date = $_POST['date'];

    }

    
    ?>

    <div id="form">
    <form class="form-dark" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <h1>Registro</h1>
      <label for=""  id="pp">Nombre:</label>
      <input type="text" name="nombre" required value="<?php if(isset($nombre)) echo $nombre ?>">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <label for="" id="pp">Fecha de Nacimiento:</label>
      <input type="date" name="date" min="00-00-0000" max="<?php echo date('Y-m-d') ?>"required value="<?php if(isset($date)) echo $date ?>">
      <label for="" id="pp">Correo:</label>
      <input type="text" name="correo" required value="<?php if(isset($correo)) echo $correo ?>">
      <label for="" id="pp">Telefono:</label>
      <input type="text" name="telefono" required value="<?php if(isset($telefono)) echo $telefono ?>">
      <label for="" id="pp">Tipo de Documento:</label>
      <select name="tipoId">
        <option value="CI">CI</option>
        <option value="CE">CE</option>
      </select>
      <label for="" id="pp">Número de Documento:</label>
      <input type="number" name="numeroDoc" required value="<?php if(isset($numeroDoc)) echo $numeroDoc ?>">
      <label for="" id="pp">Sexo:</label>
      <select name="sex">
        <option value="Hombre">Hombre</option>
        <option value="Mujer">Mujer</option>
        <option value="Prefiero no decir.">Prefiero no decir</option>
      </select>
      <label for="activo" id="pp">¿Desea recibir notificaciones procedentes de esta pagina?</label>
        <input type="checkbox" id="activo" name="activo">
      <input type="submit" name="submit">
      <?php
      include ("validar.php");
      ?>

    </form>
    </div>
    </div>
    </div>
</body>
</html>