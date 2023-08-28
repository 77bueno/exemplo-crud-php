<?php
/* Verificando se o formulário/botão foi acionado */ 
if(isset($_POST['inserir']) ){
    // Importando as funções e conexão
    require_once "../src/funcoes-fabricantes.php";

    // Capturando o valor digitado do nome e sanitizando
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS); 
    
    // Pode ser assim também:
    // $nome = filter_var($_POST['nome'], FILTER_SANITIZE_SPECIAL_CHARS); 

    /* Chamar a função, passar os dados de conexão e o 
    dado (nome do fbricante) digitado no formulário. */ 
    inserirFabricante($conexao, $nome);

    // Redirecionamento
    header("location:visualizar.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Inserção</title>
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
    <h1>Fabricantes | INSERT</h1>
    <hr>
    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input required type="text" name="nome" id="nome">
        </p>
        <button type="submit" name="inserir">Inserir fabricante</button>
    </form>

    <hr>

    <p><a href="visualizar.php">Voltar</a></p>

</body>
</html>