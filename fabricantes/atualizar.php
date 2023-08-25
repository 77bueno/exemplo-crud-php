<?php 
/* Obtendo e sanitizando o valor vindo do parâmetro de URL
(link dinâmico) */
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
echo $id;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Atualização</title>
    <style>
         /* Estilos gerais para o formulário */
         form {
          width: 500px;
          padding: 15px;
          background-color: #b3d9ff;
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
        <p>
            <label for="nome">Nome:</label>
            <input required type="text" name="nome" id="nome">
        </p>
        <button type="submit" name="atualizar">Atualizar fabricante</button>
    </form>

    <hr>

    <p><a href="visualizar.php">Voltar</a></p>

</body>
</html>