<?php
require_once 'controllers/ProdutoController.php';

$controller = new ProdutoController();

$action = $_GET['action'] ?? 'listar';
$controller->$action();
?>
