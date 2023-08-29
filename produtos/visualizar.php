<?php 
require_once "../src/funcoes-produtos.php";
require_once "../src/funcoes-utilitarias.php";

$listaDeProdutos = lerProdutos($conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Visualização</title>
    <style>
        * { box-sizing: border-box; }

        body {
            background-color: #b3d9ff;
        }
        .produtos {
            font-family: 'Segoe UI';
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            width: 80%;
            margin: auto;
        }

        .produto {
            background-color: #0056b3;
            text-align: center;
            color: white;
            font-weight: bold;
            text-shadow: black 1px 1px 1px;
            padding: 1rem;
            width: 49%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
    </style>
</head>
<body>
    <h1>Produtos | SELECT - <a href="../index.php">Home</a></h1>

    <hr>
    <h2>Lendo e carregando todos os produtos.</h2>

    <p><a href="inserir.php">Inserir novo produto</a></p>

    <div class="produtos">
        <?php foreach ( $listaDeProdutos as $produto ) { ?>
    
            <article class="produto">
                <h3> <?=$produto["nome"]?> </h3>
                <p><b>Preço:</b> <?=formatarPreco($produto["preco"])?></p>
                <p><b>Quantidade:</b> <?=$produto["quantidade"]?></p>
            </article>
        <?php } ?>
    </div>
</body>
</html>