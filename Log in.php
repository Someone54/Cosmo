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
                          <a class="nav-link " href="form.php">Inscription</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link " href="#">Log in</a>
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
    <h2>Log in</h2>
    <form action="Validar 2.php" method="POST">
        <p><label for="usuario" id="pp">Usuario</label>
        <input type="text" name="usuario"></p>

        <p><label for="contraseña" id="pp">Contraseña</label>
        <input type="text" name="contraseña"></p>
<?php
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        if($error == "incorrecto"){
        echo "<p class='error'>El usuario o la contraseña no son correctos</p>";
        }
        if($error == "vacío"){
        echo "<p class='error'>Los datos se encuentran vacíos</p>";
        }
}
?>

      <input type="submit" name="submit" >
      </form>
      
    </form>
    </div>
    </div>
    </div>
</body>
</html>