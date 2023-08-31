<?php 
require_once "../src/funcoes-produtos.php";
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

excluirProduto($conexao, $id);
header("location:visualizar.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>