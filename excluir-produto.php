<?php

require "src/conection-bd.php";
require "src/Modelo/Produto.php";
require "src/Repositorio/ProdutoRepositorio.php";

$produtoRepositorio = new ProdutoRepositorio($pdo);
$id = (int) $_POST['id'];
$produtoRepositorio->deletar($id);

header("Location: admin.php");