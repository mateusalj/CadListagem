<?php
function getConnection() {
    $host = 'localhost';
    $dbname = 'cadastroelistagem';
    $username = 'root';
    $password = '';

    try {
        return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    } catch (PDOException $e) {
        die("Erro ao conectar ao banco de dados: " . $e->getMessage());
    }
}
?>
