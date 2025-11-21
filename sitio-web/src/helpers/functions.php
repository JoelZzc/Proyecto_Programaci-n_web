<?php 
$config = require __DIR__.'/../config/config.php';
define('BASE_PATH', $config['base_url']);
define('ASSETS_PATH', $config['assets_url']);
define('SRC_PATH', $config['src_url']);

function getArticles() {
    return [
        [
            'nombre' => 'Correa',
            'descripcion' => 'Ernie Ball Jacquard Correa para guitarra - Regal Black.',
            'imagen' => 'Correa_guitarra.jpg'
        ],
        [
            'nombre' => 'Puas de guitarra',
            'descripcion' => "D'Addario Puas Guitarra - Puntas de Guitarra de Geluloide - Surtido, Mediana, paquete de 10",
            'imagen' => 'Puas_guitarra.jpg'
        ],
        [
            'nombre' => 'Microfono shure',
            'descripcion' => 'Shure Micrófono para Instrumentos SM57',
            'imagen' => 'Shure_microfono.jpg'
        ],
        [
            'nombre' => 'Baquetas',
            'descripcion' => 'VIC Firth 5B Baquetas',
            'imagen' => 'Baquetas.jpg'
        ],
    ];
}

?>