<?php
require_once "conecta.php";

function lerProdutos(PDO $conexao):array {
    // SQL DE SELECT
    $sql = "SELECT nome, preco, quantidade FROM produtos ORDER BY nome";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $erro) {
        die("Erro ao carregar produtos: ".$erro->getMessage());
    }
    return $resultado;
}