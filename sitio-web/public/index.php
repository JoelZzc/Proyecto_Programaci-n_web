<?php 
require '../src/views/layouts/header.php';
?>
    <main>
        <section class="section-announcement-background">
            <img class="background-img" src="<?=ASSETS_PATH?>/img/background.png" alt="background">
            <div class="background-content">
                <h3>Nuevo modelo</h3>
                <h1>Squier Classic Vibe</h1>
                <p>Guitarra con diseño clasico que brinda un tono totalmente autentico </p>
                <button class="btn btn-light">Comprar ahora</button>
            </div>
        </section>

        <h2 class="accessory-title">Accesorios</h2>
        <section class="section-container-accessories">
            <div class="card-accessory">
                <a class="link" href="../src/views/articles.php">
                    <img class="card-img" src="<?=ASSETS_PATH?>/img/Correa_guitarra.jpg" alt="Correa">
                    <p class="card-description">Ernie Ball Jacquard Correa para guitarra - Regal Black</p>
                </a>
            </div>

            <div class="card-accessory">
                <img class="card-img" src="<?=ASSETS_PATH?>/img/Puas_guitarra.jpg" alt="Correa">
                <p class="card-description">D'Addario Puas Guitarra - Puntas de Guitarra de Geluloide - Surtido, Mediana, paquete de 10</p>
            </div>

            <div class="card-accessory">
                <img class="card-img" src="<?=ASSETS_PATH?>/img/Shure_microfono.jpg" alt="Correa">
                <p class="card-description">Shure Micrófono para Instrumentos SM57</p>
            </div>

            <div class="card-accessory">
                <img class="card-img" src="<?=ASSETS_PATH?>/img/Baquetas.jpg" alt="Correa">
                <p class="card-description">VIC Firth 5B Baquetas</p>
            </div>

        </section>


    </main>
