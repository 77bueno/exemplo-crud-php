<?php 

function formatarPreco(float $preco):string {
    $precoFormatado = number_format($preco, 2, ',', '.');
    return "R$ " . $precoFormatado;
}

function calcularTotal(float $valor, int $quantidade):string {
    $total = $valor * $quantidade;
    return formatarPreco($total);
}