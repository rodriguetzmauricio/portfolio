
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">

                    <ul class="navbar-nav me-auto mb-2 mb-md-0">

                        <li class="nav-item">
                        <a class="nav-link  <?php echo $pg == "inicio"? "active" : ""; ?>" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pg == "sobre-mi"? "active" : ""; ?>" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pg == "proyectos"? "active" : ""; ?>" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pg == "contacto"? "active" : ""; ?>" href="contacto.php">Contacto</a>
                        </li>

                    </ul>
                    <div class="form-inline"></div>
                    <a href="" class="btn btn-rojo">
                        Descargar mi CV<i class="fas fa-download"></i>
                    </a>
                </div>



            </div>
        </nav>