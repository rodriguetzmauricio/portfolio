<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mi</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">
    <header>
    <?php
    $pg= "sobre-mi";
     include_once("menu.php"); ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-12 mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                    <p class="pb-sm-5">Apasionado por la tecnología y gestión de proyectos. Soy docente de cursos de
                        programación Full Stack y de Base de datos.</p>
                    <a href="" class="btn btn-rojo" >Enviar mensaje</a>

                </div>
                <div class="col-sm-3 col-12 mt-4 offset-sm-2">
                    <img src="images/mauri.jpg" alt="Mauricio Fabian Rodriguez" title="Mauricio Fabian Rodriguez"
                        class="img-fluid img-circle">
                </div>
            </div>
        </div>
        <section id="tecnologias" class="color-gradiente pb-5">
            <div class="container container-tecnologias">
                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5 text-white">Tecnologías de programación</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>Javascript</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1209/javascript.jpeg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>PHP</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/991/hwUcGZ41_400x400.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>HTML5</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/2538/kEpgHiC9.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>React.js</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1020/OYIaJ1KK.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>jQuery</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1021/lxEKmMnB_400x400.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>Bootstrap</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1101/C9QJ7V3X.png">
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-2 col-6">
                        <div class="px-4 py-5 card mx-0">
                            <h3>Laravel</h3>
                            <img class="img-fluid d-block mx-auto" width="90"
                                src="https://depcsuite.com/wp-content/uploads/2019/08/220px-Laravel.svg_.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>MySQL</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1615/mariadb-logo-400x400.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>CSS</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/6727/css.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>Git</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1046/git.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>Apache</h3>
                            <img class="img-fluid d-block mx-auto" width="110"
                                src="//upload.wikimedia.org/wikipedia/commons/thumb/d/db/Apache_HTTP_server_logo_%282016%29.svg/300px-Apache_HTTP_server_logo_%282016%29.svg.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>Mercadopago</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/12698/gUjuxmmd_400x400.jpg">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="idiomas">
            <div class="container container-idiomas">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12">
                        <div class="row mr-sm-1 bg-white card-idioma">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8">
                                <h2>IDIOMAS</h2>
                                INGLÉS - Intermediate B2
                                ESPAÑOL - Nativo
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8">
                                <h2>HOBBIES</h2>
                                Lorem
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia">
            <div class="container container-experiencia">
                <h2>Experiencia laboral</h2>
            </div>
        </section>
        <section id="estudios">
            <div class="container container-estudios">
                <i class="fas fa-graduation-cap"></i>
                <h2>Estudios</h2>
            </div>
        </section>
    </main>
    <footer>
    <?php include_once("footer.php"); ?>
    </footer>




    <script src="js/bootstrap.min.js"></script>
</body>

</html>