<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body id="contacto">
    <header>
    <?php
    $pg= "contacto";
     include_once("menu.php"); ?>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5">
                    <h1>Contacto</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 pt-3 formulario-izquierda">
                    <p>Te invito a que te contactes enviándome un mensaje o bien por <a
                            href="https://api.whatsapp.com/send?phone=542345664512">whatsapp.</a></p>
                </div>
                <div class="col-12 col-sm-6 formulario-derecha">
                    <form action="" method="post" class="formulario">
                        <div class="col-12 mb-3"><input class="form-control shadow" type="text" id="txtNombre"
                                name="txtNombre" placeholder="Nombre"></div>
                        <div class="col-12 mb-3"><input class="form-control shadow" type="text" id="txtCorreo"
                                name="txtCorreo" placeholder="Correo"></div>
                        <div class="col-12 mb-3"><textarea class="form-control shadow" name="txtMensaje" id="txtMensaje"
                                cols="30" rows="6" placeholder="Comentario"></textarea></div>
                        <div class="text-right">
                            <button type="submit" class="btn">ENVIAR</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </main>

    <footer>
    <?php include_once("footer.php"); ?>
    </footer>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>