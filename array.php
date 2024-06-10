<?php
// criação de uma array
$produtos = [
    "maça"=> 2.30, "uva" => 1.99, "laranja" => 2.99
    ];
// exibir os preços da lista
echo "Lista preços: \n";
foreach ($produtos as $produtos => $preço){
echo $produto. "custa R$". $preço. "\n";}
//calculando o total
$total = 0;
foreach ($produtos as $preço) {
    $total += $preço;
}
echo "Total: R$". $total;
?>    