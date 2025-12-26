<?php

require __DIR__ ."/src/Model/Classe.php";
require __DIR__ ."/src/Model/Personagem.php";

echo"---------- Monte seu personagem ----------";

$bruxo = new Personagem('Bruxo', 100, 20, Classe::Bruxo);
echo "\nNome do personagem: {$bruxo->getNome()}";
echo "\nvida: {$bruxo->getVida()}\n";
echo "Classe: {$bruxo->classe->name}\n";
$bruxo->atacar('Orc');

$arqueiro = new Personagem('Legolas', 80, 30, Classe::Arqueiro);
$arqueiro->atacar('bruxa');
