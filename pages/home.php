<section class="home">
    <?php 
    $imagen = "assets/svg/home_icono.svg";
    echo "<img src='$imagen' alt='Imagen del logotipo de Yamelin Peves Bakery'>";
    ?>
</section>

<style>
.home {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 100px);
    padding: 0 20px;
    box-sizing: border-box;
    margin-top: -100px;
}

.home img {
    max-width: 100%;
    max-height: 80%;
    width: auto;
    height: auto;
}

@media (min-width: 1024px) {
    .home img {
        max-width: 30%;
        max-height: 30%;
    }
}

@media (min-width: 600px) and (max-width: 1023px) {
    .home img {
        max-width: 70%; 
        max-height: 70%;
    }
}

@media (max-width: 599px) {
    .home img {
        max-width: 90%;
        max-height: 90%;
    }
}
</style>
