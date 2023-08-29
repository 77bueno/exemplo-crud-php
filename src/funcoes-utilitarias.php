<?php 

function formatarPreco($preco):string {
    $precoFormatado = number_format($preco, 2, ',', '.');
    return "R$ " . $precoFormatado;
}
