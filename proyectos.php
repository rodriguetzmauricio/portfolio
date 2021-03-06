<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos">
    <header>
       <?php
       $pg= "proyectos";
       include_once("menu.php"); ?>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-sm-5">
                    <h1>Proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12 my-4">
                    <p>Los siguientes son algunos de los trabajos que he realizado:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-12">
                    <div class="row card m-1">
                        <img src="images/abmclientes.png" alt="ABM Clientes" title="ABM Clientes" class="img-fluid">
                        <div class="col-12 color-gradiente py-3">
                            <h2>ABM Clientes</h2>
                        </div>
                        <div class="col-12 py-3">
                            <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP,
                                Bootstrap y Json.</p>
                        </div>
                        <div class="row p-3 ">
                            <div class="col-6">
                                <a href="" class="btn btn-rojo"
                                    target="_blank">Ver online</a>
                            </div>
                            <div class="col-6">
                                <a href="https://github.com/rodriguetzmauricio/php/tree/master/abmclientes" class="link-rojo-2"
                                    target="_blank">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="row card m-1">
                        <img src="images/abmventas.png" alt="Sistema de Gestión de Ventas"
                            title="Sistema de Gestión de Ventas" class="img-fluid">
                        <div class="col-12 color-gradiente py-3">
                            <h2>Sistema de gestión de ventas</h2>
                        </div>
                        <div class="col-12 py-3">
                            <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                                Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                        </div>
                        <div class="row p-3 ">
                            <div class="col-6">
                                <a href="" class="btn btn-rojo"
                                    target="_blank">Ver online</a>
                            </div>
                            <div class="col-6">
                                <a href="" class="link-rojo-2" target="_blank">Código
                                    fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="row card m-1">
                        <img src="images/sistema-admin.png" alt="Proyecto" title="Proyecto" class="img-fluid">
                        <div class="col-12 color-gradiente py-3">
                            <h2>Proyecto integrador</h2>
                        </div>
                        <div class="col-12 py-3">
                            <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                                Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                                funcionalidades a fines.</p>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="#" class="btn btn-rojo" target="_blank">Ver online</a>
                            </div>
                            <div class="col-6">
                                <a href="" class="link-rojo-2" target="_blank">Código fuente</a>
                            </div>
                        </div>
                    </div>
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