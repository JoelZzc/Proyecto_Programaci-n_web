<?php 
require __DIR__.'/../../helpers/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<header class="header-sticky">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <label for="menu-toggle" class="menu-btn">☰</label>
    <input type="checkbox" id="menu-toggle" class="menu-toggle">

    <div class="section-group-header">
        <p>Nueva guitarra en descuento -
            <a id="link-top" href="#">comprar ahora</a>
        </p>
    </div>

    <div class="section-search"> 
        <input class="form-control" type="text" placeholder="Buscar un nuevo instrumento">
        <img class="user" src="<?=ASSETS_PATH?>/img/usuario.png" alt="usuario">
    </div>

    <nav class="section-group-link">
        <ul class="menu">
            <li><a class="link" href="#">Para el regreso a clase</a></li>
            <li><a class="link" href="#">Nuevo y tendencias</a></li>
            <li><a class="link" href="#">Moda</a></li>
            <li><a class="link" href="#">Guitarras electricas</a></li>
            <li>
                <a class="link" href="#">Accesorios</a>
                <ul class="accessory-submenu">
                    <li><a href="#">Cables</a></li>
                    <li><a href="#">Soportes</a></li>
                    <li><a href="#">Correas</a></li>
                    <li><a href="#">Metrónomos</a></li>
                </ul>
            </li>
            <li><a id="link-ofert" class="link" href="#">Ofertas</a></li>
        </ul>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</header>