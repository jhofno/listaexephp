<?php
 
$carrinho = [
    ["id" => 1, "nome" => "SSD 512GB", "preco" => 280.00, "quantidade" => 1],
    ["id" => 2, "nome" => "Memória RAM 8GB", "preco" => 150.00, "quantidade" => 2],
    ["id" => 3, "nome" => "Cabo HDMI 2.0", "preco" => 25.00, "quantidade" => 4],
    ["id" => 4, "nome" => "Mouse Gamer", "preco" => 120.00, "quantidade" => 1],
    ["id" => 5, "nome" => "Teclado Mecânico", "preco" => 350.00, "quantidade" => 1],
    ["id" => 6, "nome" => "Fonte 600W", "preco" => 420.00, "quantidade" => 1],
    ["id" => 7, "nome" => "HD Externo 1TB", "preco" => 390.00, "quantidade" => 1],
    ["id" => 8, "nome" => "Headset USB", "preco" => 180.00, "quantidade" => 2],
];
 
$totalGeral = 0;
 
echo "Resumo do Pedido:<br><br>";
 
foreach ($carrinho as $item) {
    $subtotalItem = $item['preco'] * $item['quantidade'];
    $totalGeral += $subtotalItem;
 
    echo "Produto: " . $item['nome'] . "<br>";
    echo "Quantidade: " . $item['quantidade'] . "<br>";
    echo "Subtotal: R$ " . number_format($subtotalItem, 2, ',', '.') . "<br>";
    echo "---------------------------<br>";
}
 
 
$desconto = 0;
if ($totalGeral > 200) {
    $desconto = $totalGeral * 0.10;
}
 
$totalFinal = $totalGeral - $desconto;
 
echo "<br>Subtotal da Compra: R$ " . number_format($totalGeral, 2, ',', '.') . "<br>";
 
if ($desconto > 0) {
    echo "Desconto Aplicado (10%): R$ " . number_format($desconto, 2, ',', '.') . "<br>";
} else {
    echo "Desconto Aplicado: R$ 0,00<br>";
}
 
echo "Total Final a Pagar: R$ " . number_format($totalFinal, 2, ',', '.') . "<br>";
 
?>