<?php 
// Importando as funções de fabicantes
require_once "../src/funcoes-fabricantes.php";

/* Obtendo e sanitizando o valor vindo do parâmetro de URL
(link dinâmico) */
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

/* Chamando a função e recuperando os dados de um fabricante
    de acordo com o id passado */
$fabricante = lerUmFabricante($conexao, $id);

if (isset($_POST['atualizar'])) {
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    atualizarFabricante($conexao, $nome, $id);
    header("location:visualizar.php?status=sucesso");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Atualização</title>
    <style>
      body {
          background-color: #b3d9ff;
        }

        h1 {
          padding: 10px 20px;
          background-color: #0056b3;
          width: 450px;
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
    <h1>Fabricantes | SELECT/UPDATE</h1>
    <hr>
    <form action="" method="post">
        <!-- Campo oculto usado apenas para registro no furmulário do id
        do fabricante que está sendo visualizado. -->
        <input type="hidden" name="id" value="<?=$fabricante['id']?>">
        <p>
            <label for="nome">Nome:</label>
            <input required value="<?=$fabricante['nome']?>" type="text" name="nome" id="nome">
        </p>
        <button type="submit" name="atualizar">Atualizar fabricante</button>
    </form>

    <hr>

    <p><a href="visualizar.php">Voltar</a></p>

</body>
</html>