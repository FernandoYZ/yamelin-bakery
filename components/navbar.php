<nav class="navbar">
    <div class="container navbar-content">
        <a href="?page=home" class="site-name">
            <img src="assets/img/logo.svg" alt="Logotipo de Yamelin Peves Bakery">
        </a>
        
        <button class="hamburger-menu" aria-label="Menu">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <ul class="menu">
            <li class="menu-item">
                <a href="?page=home" class="menu-link <?php echo ($_GET['page'] ?? '') === 'home' ? 'active' : ''; ?>">
                    Inicio
                </a>
            </li>
            <li class="menu-item">
                <a href="?page=about" class="menu-link <?php echo ($_GET['page'] ?? '') === 'about' ? 'active' : ''; ?>">
                    Sobre Nosotros
                </a>
            </li>
            <li class="menu-item">
                <a href="?page=catalog" class="menu-link <?php echo ($_GET['page'] ?? '') === 'catalog' ? 'active' : ''; ?>">
                    Catálogo
                </a>
            </li>
            <li class="menu-item">
                <a href="?page=contact" class="menu-link <?php echo ($_GET['page'] ?? '') === 'contact' ? 'active' : ''; ?>">
                    Contáctanos
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="melting-effect">
    <?php
    $svgPath = "assets/svg/caida.svg";
    $totalSvgs = 5;
    for ($i = 0; $i < $totalSvgs; $i++) {
        echo "<img src='$svgPath' alt='Efecto derretido' class='melting-svg'>";
    }
    ?>
</div>