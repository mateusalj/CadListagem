<?php
require_once 'models/Produto.php';

class ProdutoController {
    public function cadastrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $valor = $_POST['valor'];
            $disponivel = $_POST['disponivel'] === 'sim' ? 1 : 0;

            if (Produto::cadastrar($nome, $descricao, $valor, $disponivel)) {
                header('Location: index.php?action=listar');
                exit;
            } else {
                echo "Erro ao cadastrar o produto.";
            }
        } else {
            require 'views/produto_form.php';
        }
    }

    public function listar() {
        $produtos = Produto::listar();
        require 'views/produto_listagem.php';
    }
}
?>
