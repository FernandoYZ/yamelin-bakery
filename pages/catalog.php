<div class="hero-section">
    <div class="image-container">
        <img src="assets/svg/home_letras.svg" alt="Logotipo de Yamelin Peves Bakery" width="400" height="auto">
    </div>

    <nav class="product-navigation">
        <div class="grid-container">
            <a href="/catalogo-bocaditos" class="nav-button">
                <span>Catálogo de Bocaditos</span>
            </a>
            <a href="/queques" class="nav-button">
                <span>Queques</span>
            </a>
            <a href="/frapes" class="nav-button">
                <span>Frapes</span>
            </a>
            <a href="/wafles-crepes" class="nav-button">
                <span>Wafles y Crepes</span>
            </a>
            <a href="/tortas" class="nav-button">
                <span>Tortas</span>
            </a>
            <a href="/bocaditos" class="nav-button">
                <span>Bocaditos</span>
            </a>
        </div>
    </nav>
</div>

<style>
    .hero-section {
        padding: 2rem 1rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .image-container {
        text-align: center;
        margin-bottom: 2rem;
    }

    .image-container img {
        max-width: 100%;
        height: auto;
        object-fit: contain;
    }

    .product-navigation {
        width: 100%;
        padding: 1rem;
    }

    .grid-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        max-width: 800px;
        margin: 0 auto;
    }

    .nav-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 150px;
        padding: 1.5rem 1rem;
        background-color: #000;
        color: #fff;
        text-decoration: none;
        border-radius: 100px;
        font-size: 1.125rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        text-transform: uppercase;
        font-weight: 600;
    }

    .nav-button:hover, 
    .nav-button:focus {
        background-color: #FFD700;
        color: #000;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .nav-button:active {
        transform: translateY(0);
    }

    .nav-button:focus-visible {
        outline: 3px solid #FFD700;
        outline-offset: 2px;
    }

    @media (max-width: 768px) {
        .grid-container {
            grid-template-columns: 1fr;
            gap: 1rem;
            padding: 0 1rem;
        }

        .nav-button {
            font-size: 1rem;
            padding: 0.875rem 1.25rem;
        }
    }

    /* Prevenir texto seleccionable en botones */
    .nav-button span {
        user-select: none;
    }
</style>