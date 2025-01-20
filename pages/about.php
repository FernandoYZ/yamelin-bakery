<section class="about">
    <?php 
    $imagen = "assets/svg/home_letras.svg";
    echo "<img src='$imagen' alt='Imagen de las letras del logotipo de Yamelin Peves Bakery'>";
    ?>
</section>

<style>
.about {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 100px);
    padding: 0 20px;
    box-sizing: border-box;
    margin-top: -100px;
}

.about img {
    max-width: 100%;
    max-height: 80%;
    width: auto;
    height: auto;
}

@media (min-width: 1024px) {
    .about img {
        max-width: 50%;
        max-height: 50%;
    }
}

@media (min-width: 600px) and (max-width: 1023px) {
    .about img {
        max-width: 70%; 
        max-height: 70%;
    }
}

@media (max-width: 599px) {
    .about img {
        max-width: 90%;
        max-height: 90%;
    }
}
</style>
