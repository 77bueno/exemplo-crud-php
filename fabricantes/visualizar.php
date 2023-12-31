<?php
/* Importando as funções de manipulação de fabricantes */
require_once "../src/funcoes-fabricantes.php";

/* Guardando o retorno/resultado da função lerFabricantes */
$listaDeFabricantes = lerFabricantes($conexao);

// Contando quantos fabricantes temos na matriz $listaDeFabricantes 
$quantidade = count($listaDeFabricantes);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Visualização</title>
    <style>
        body {
          background-color: #b3d9ff;
        }

        h1 a { color: white; }

        h1 {
          padding: 10px 20px;
          background-color: #0056b3;
          width: 405px;
          color: #fff;
          border: none;
          border-radius: 5px;
        }

        /* Estilos para a tabela */
        .styled-table {
            width: 40%; /* Largura da tabela */
            border-collapse: collapse;
            border: 1px solid #ddd;
            background-color: white;
        }

        /* Estilos para as células do cabeçalho */
        .styled-table th {
            padding: 6px; /* Reduzindo o preenchimento */
            font-size: 16px; /* Reduzindo o tamanho da fonte */
            text-align: left;
            background-color: #0056b3;
            color: white;
            border-bottom: 1px solid #ddd;
        }

        /* Estilos para as células normais */
        .styled-table td {
            padding: 6px; /* Reduzindo o preenchimento */
            font-size: 16px; /* Reduzindo o tamanho da fonte */
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Estilos para realçar as linhas ao passar o mouse */
        .styled-table tr:hover {
            background-color: #cce0ff;
        }
    </style>
</head>
<body>
    <h1>Fabricantes | SELECT 
        <a href="../index.php">Home</a>
    </h1>

    <hr>
    <h2>Lendo e carregando todos os fabricantes</h2>

    <p><a href="inserir.php">Inserir novo fabricante</a></p>

    <!-- Feedback/Mensagem para o usuário indicando que o processo deu certo. -->
    <?php 
    if (isset($_GET["status"]) && $_GET["status"] === "sucesso"){ ?>
        <h2 style="color: blue">Fabricante atualizado com sucesso!</h2>
    <?php
    }
    ?>

    <table  class="styled-table">
        <caption>Lista de Fabricantes <b><?=$quantidade?></b> </caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Operações</th>
            </tr>
        </thead>
<?php 
    foreach ($listaDeFabricantes as $fabricante) {
?>   
        <tbody>
            <tr>
                <td><?=$fabricante['id']?></td>
                <td><?=$fabricante['nome']?></td>
                <td><a href="atualizar.php?id=<?=$fabricante['id']?>">Editar</a> <a class="excluir" href="excluir.php?id=<?=$fabricante['id']?>">Excluir</a></td>
            </tr>
        </tbody>
<?php
}
?>
    </table>
 
    <script src="../js/confirma-exclusao.js"></script>
</body>
</html>