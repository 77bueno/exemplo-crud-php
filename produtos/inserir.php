<?php
require_once "../src/funcoes-fabricantes.php"; 
require_once "../src/funcoes-produtos.php";

$fabricantes = lerFabricantes($conexao);

if(isset($_POST['inserir'])){
    $nome = filter_input(
        INPUT_POST, "nome",
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    $preco = filter_input(
        INPUT_POST, "preco",
        FILTER_SANITIZE_NUMBER_FLOAT,
        FILTER_FLAG_ALLOW_FRACTION
    );

    $quantidade = filter_input(
        INPUT_POST, "quantidade",
        FILTER_SANITIZE_NUMBER_INT
    );

    // Pegaremos o value, ou seja, o id do fabricante
    $fabricanteId = filter_input(
        INPUT_POST, "fabricante",
        FILTER_SANITIZE_NUMBER_INT
    );

    $descricao = filter_input(
        INPUT_POST, "descricao",
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    inserirProduto($conexao, $nome, $preco, $quantidade, $fabricanteId, $descricao);

    header("location:visualizar.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Inserção</title>
    <style>
      body {
          background-color: #b3d9ff;
        }

        h1 {
          padding: 10px 20px;
          background-color: #0056b3;
          width: 305px;
          color: #fff;
          border: none;
          border-radius: 5px;
        }
        /* Estilos gerais para o formulário */
        form {
          width: 500px;
          padding: 15px;
          background-color: white;
        }

        /* Estilo para os rótulos */
        label {
          display: block;
          margin-bottom: 5px;
          font-weight: bold;
          text-transform: uppercase;
        }

        /* Estilo para os campos de entrada de texto */
        input[type="text"], textarea {
          width: 95%;
          padding: 10px;
          margin-bottom: 10px;
          border: 1px solid #666;
          border-radius: 5px;
        }

        /* Estilo para os botões */
        button {
          padding: 10px 20px;
          background-color: #0056b3;
          color: #fff;
          border: none;
          border-radius: 5px;
          cursor: pointer;
        }

        /* Estilo para os botões quando hover */
        button:hover {
          background-color: #003d80;
        }
    </style>
</head>
<body>
    <h1>Produtos | INSERT</h1>
    <hr>

    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </p>
        <p>
            <label for="preco">Preço:</label>
            <input type="number" min="10" max="10000" step="0.01" name="preco" id="preco" required>
        </p>
        <p>
            <label for="quantidade">Quantidade:</label>
            <input type="number" min="1" max="100" name="quantidade" id="quantidade" required>
        </p>
        <p>
            <label for="fabricante">Fabricante</label>
            <select name="fabricante" id="fabricante" required>
                <option value=""></option>
                <?php foreach ($fabricantes as $fabricante) { ?> 
                    <option value="<?=$fabricante["id"]?>"><?=$fabricante["nome"]?></option>
                <?php } ?>
            </select>
        </p>
        <p>
            <label for="descricao">Descrição:</label> <br>
            <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
        </p>
        <button type="submit" name="inserir">Inserir produto</button>
    </form>

    <hr>
    <p><a href="visualizar.php">Voltar</a></p>
</body>
</html>