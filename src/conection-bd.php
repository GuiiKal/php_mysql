<?php
require __DIR__ . '/../vendor/autoload.php';


// Inicialização da conexão PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname=serenatto', 'root', '123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
