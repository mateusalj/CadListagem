<?php
require_once 'db.php';

class Produto {
    public static function cadastrar($nome, $descricao, $valor, $disponivel) {
        $conn = getConnection();
        $sql = "INSERT INTO produtos (nome, descricao, valor, disponivel) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$nome, $descricao, $valor, $disponivel]);
    }

    public static function listar() {
        $conn = getConnection();
        $sql = "SELECT id, nome, valor FROM produtos ORDER BY valor ASC";
        return $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
