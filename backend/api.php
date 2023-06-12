<?php

// Configurações do banco de dados
$dbHost = 'mysql'; // Nome do serviço do banco de dados no Docker Compose
$dbName = 'teste';
$dbUser = 'root';
$dbPass = 'root';

// Estabelece a conexão com o banco de dados usando PDO
try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro ao conectar com o banco de dados: ' . $e->getMessage());
}

// Consulta para obter os dados do perfil
$query = $db->query("SELECT * FROM perfil");
$perfil = $query->fetch(PDO::FETCH_ASSOC);

// Resposta em formato JSON com cabeçalho de permissão CORS
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($perfil);
?>
