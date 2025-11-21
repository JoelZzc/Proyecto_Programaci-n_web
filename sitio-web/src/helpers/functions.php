<?php 
require __DIR__.'/../config/database.php';
$config = require __DIR__.'/../config/config.php';
define('BASE_PATH', $config['base_url']);
define('ASSETS_PATH', $config['assets_url']);
define('SRC_PATH', $config['src_url']);


function getArticulos() {
    return [
        [
            'id' => '1',
            'nombre' => 'Correa',
            'descripcion' => 'Ernie Ball Jacquard Correa para guitarra - Regal Black.',
            'imagen' => 'Correa_guitarra.jpg'
        ],
        [
            'id' => '2',
            'nombre' => 'Puas de guitarra',
            'descripcion' => "D'Addario Puas Guitarra - Puntas de Guitarra de Geluloide - Surtido, Mediana, paquete de 10",
            'imagen' => 'Puas_guitarra.jpg'
        ],
        [
            'id' => '3',
            'nombre' => 'Microfono shure',
            'descripcion' => 'Shure Micrófono para Instrumentos SM57',
            'imagen' => 'Shure_microfono.jpg'
        ],
        [
            'id' => '4',
            'nombre' => 'Baquetas',
            'descripcion' => 'VIC Firth 5B Baquetas',
            'imagen' => 'Baquetas.jpg'
        ],
    ];
}


function getArticles() {
    $pdo = getPDO();

    try {
        $sql = "SELECT * FROM products";

        $stmt = $pdo->query($sql);

        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }catch (PDOException $e) {
        error_log("Error al consultar la base de datoso: ". $e->getMessage());
        return [];
    }
}

function getArticlesDetails($articleId = null) {
    if($articleId == null && isset($_GET['articleId'])){
        $articleId = filter_input(INPUT_GET, 'articleId', FILTER_SANITIZE_STRING);
    }

    //Si no se envió un articulo
    if ($articleId === null) {
        return [];
    }

    $pdo = getPDO();

    try {
        $sql = "SELECT * FROM products WHERE id = :id LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $articleId]);
        $articlesDetails = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$articlesDetails) {
            return []; // articulo no encontrada
        }

        return $articlesDetails;
    } catch (PDOException $e) {
        error_log("Error al consultar la base de datos: " . $e->getMessage());
        return [];
    }
}
?>