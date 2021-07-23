<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
     <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    
    
</head>
<body id="inicio">
    <header>
    <?php
    $pg= "inicio";
     include_once("menu.php"); 
     ?>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4 text-center div-cohete">
                    <a href="proyectos.php"><img src="images/cohete.svg" class="cohete"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                    <div class="input-home">
                        <p class="p-1" id="bienvenido-dinamico"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="proyectos.php" class="btn shadow">Conoce mis proyectos</a>
                </div>
            </div>
            

        </div>
    </main>









    <footer style="padding-top: 2.6rem !important;">
    <?php include_once("footer.php"); ?>
    </footer>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>