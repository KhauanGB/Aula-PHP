<?php

$cardapio = simplexml_load_file("cardapio.xml");

foreach ($cardapio->prato as $prato) {

    echo "<h3>".$prato->nome."</h3>";

    echo "Código: ".$prato->codigo."<br>";
    echo "Descrição: ".$prato->descricao."<br>";
    echo "Valor: R$ ".$prato->valor."<br>";

    echo "<hr>";
}

?>