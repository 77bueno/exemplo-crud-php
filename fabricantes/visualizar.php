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
        /* Estilos para a tabela */
        .styled-table {
            width: 40%; /* Largura da tabela */
            border-collapse: collapse;
            border: 1px solid #ddd;
            background-color: #e6f7ff;
        }

        /* Estilos para as células do cabeçalho */
        .styled-table th {
            padding: 6px; /* Reduzindo o preenchimento */
            font-size: 16px; /* Reduzindo o tamanho da fonte */
            text-align: left;
            background-color: #b3d9ff;
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

    <table  class="styled-table">
        <caption>Lista de Fabricantes</caption>
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
                <td><a href="">Editar</a> <a href="">Excluir</a></td>
            </tr>
        </tbody>
<?php
}
?>
    </table>
</body>
</html>