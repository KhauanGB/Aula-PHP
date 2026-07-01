<?php

$xml = new SimpleXMLElement("<conta></conta>");

$xml->addChild("agencia", $_POST["agencia"]);
$xml->addChild("conta", $_POST["conta"]);
$xml->addChild("cliente", $_POST["cliente"]);
$xml->addChild("saldo", $_POST["saldo"]);
$xml->addChild("ultima_movimentacao", $_POST["movimentacao"]);

$xml->asXML("conta.xml");

echo "Arquivo XML criado com sucesso!";
?>