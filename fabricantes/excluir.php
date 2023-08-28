<?php 
require_once "../src/funcoes-fabricantes.php";

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$fabricante = lerUmFabricante($conexao, $id);

if (isset($_POST['excluir'])) {
    excluirFabricante($conexao, $id);
    header("location:visualizar.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Deletar</title>
    <style>
        body {
          background-color: #b3d9ff;
        }

        h1 {
          padding: 10px 20px;
          background-color: #0056b3;
          width: 315px;
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
    <h1>Fabricantes | DELETE</h1>
    <hr>

    <h2>Tem certeza que deseja excluir o fabricante abaixo?</h2>
    <form action="" method="post">
        <!-- Campo oculto usado apenas para registro no furmulário do id
        do fabricante que está sendo visualizado. -->
        <input type="hidden" name="id" value="<?=$fabricante['id']?>">
        <p>
            <label for="nome">Nome:</label>
            <input disabled required value="<?=$fabricante['nome']?>" type="text" name="nome" id="nome">
        </p>
        <button type="submit" name="excluir">Excluir fabricante</button>
    </form>

    <hr>

    <p><a href="visualizar.php">Voltar</a></p>

</body>
</html>