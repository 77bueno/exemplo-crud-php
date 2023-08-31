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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #b3d9ff;
            padding:35px;
        }

        article { background-color: #DEDFE3; }

        h1 {
          padding: 10px 25px;
          background-color: #0056b3;
          width: 530px;
          color: #fff;
          border: none;
          border-radius: 5px;
        }
        h1 a { color: white; }

        .produtos {
            font-family: 'Segoe UI';
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            width: 80%;
            margin: auto;
        }

        .produto {
            text-align: center;
            color: black;
            font-weight: bold;
            padding: 1rem;
            width: 49%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; 
        }

        .card { border: none; }

    </style>
</head>

<body>
    <h1>Produtos | SELECT - <a href="../index.php">Home</a></h1>

    <h2>Lendo e carregando todos os produtos.</h2>

    <p><a href="inserir.php">Inserir novo produto</a></p>

    <div class="produtos">
        <?php foreach ($listaDeProdutos as $produto) { ?>

            <article class="produto">
            <div  class="card text-center">
                <div class="card-header">
                    <h3  class="card-title"> <?= $produto["produto"] ?> </h3>
                    <h4> <?= $produto["fabricante"] ?> </h4>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><b>Preço:</b> <?= formatarPreco($produto["preco"]) ?></p>
                        <p><b>Quantidade:</b> <?= $produto["quantidade"] ?></p>
                        <p><b>Total: </b> <?= calcularTotal($produto["preco"], $produto["quantidade"]) ?></p>

                        <?php if (!empty($produto["descricao"])) { ?>
                        <p><b>Descrição: </b> <?=$produto["descricao"]?></p>
                        <?php } ?>


                    </blockquote>
                </div>
                <div class="card-footer text-muted">
                    <p>
                        <a class="btn btn-primary" href="atualizar.php?id=<?=$produto['id']?>">Editar</a> | 
                        <a class="btn btn-primary" href="excluir.php?id=<?=$produto['id']?>">Excluir</a>
                    </p>
                </div>
            </div>
            </article>
           

        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>