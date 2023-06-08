<?php
// Configurações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_orbe";

try {
    // Cria a conexão com o banco de dados usando PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Define o modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL para buscar os dados na tabela
    $sql = "SELECT * FROM Pessoas";
    $stmt = $conn->query($sql);

    // Retorna os resultados em formato JSON
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: application/json');
    echo json_encode($data);
} catch(PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}

// Fecha a conexão com o banco de dados
$conn = null;
?>
