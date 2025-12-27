<?php

require __DIR__ ."/src/Model/Genero.php";
require __DIR__ ."/src/Model/Personagem.php";
require __DIR__ ."/src/Model/Bruxo.php";
require __DIR__ ."/src/Model/Arqueiro.php";

echo"---------- Monte seu personagem ----------";

$bruxo = new Bruxo('Bruxo', 100, 20, Genero::Masculino, 10);
echo "\nNome do personagem: {$bruxo->getNome()}";
echo "\nvida: {$bruxo->getVida()}\n";
echo "Genero: {$bruxo->genero->name}\n";
echo "Toxicidade do Bruxo: {$bruxo->toxicidade}\n";
$bruxo->ataqueMonster('Orc');

echo "\n";

$arqueiro = new Arqueiro('Legolas', 80, 30, Genero::Masculino, 20);
$arqueiro->atacar('bruxa');
echo "{$arqueiro->getNome()} tem range: {$arqueiro->getRange()}";
