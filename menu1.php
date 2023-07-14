<nav class="navbar navbar-expand-md mb-4">
            <div class="container fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item px-3">
                            <a class="nav-link <?php echo ($pg == "inicio")? "active": "";?>" href="index1.php">Inicio</a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="sobre-mi1.php" class="nav-link  px-3 <?php echo ($pg == "sobre-mi")? "active": "";?>"">Sobre mi</a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="proyectos1.php" class="nav-link <?php echo ($pg == "proyectos")? "active": "";?>"">proyectos</a>
                        </li> 
                        <li class="nav-item px-3">
                            <a href="contacto1.php" class="nav-link <?php echo ($pg == "contacto")? "active": "";?>"">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
</nav>