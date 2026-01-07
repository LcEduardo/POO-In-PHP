<?php

require __DIR__ ."/src/Interface/AtaqueBasico.php";

require __DIR__ ."/src/Traits/AtributosBasicosTrait.php";
require __DIR__ ."/src/Model/Genero.php";
require __DIR__ ."/src/Model/Personagem.php";
require __DIR__ ."/src/Model/Monstro.php";
require __DIR__ ."/src/Model/Bruxo.php";
require __DIR__ ."/src/Model/Arqueiro.php";

use WEBSERVER\Model\{
    Bruxo, Arqueiro, Monstro, Genero
};



echo"---------- Monte seu personagem ----------\n";

try {
    $montro = new Monstro('', 100, 100);
}catch(Exception $e){
    echo $e->getMessage() . "\n";
    $montro = new Monstro('Goblins', 100, 100);
}

$bruxo = new Bruxo('Geralt', 100, 20, Genero::Masculino, 10);
echo "\nNome do personagem: {$bruxo->getNome()}";
echo "\nvida: {$bruxo->getVida()}\n";
echo "Genero: {$bruxo->genero->name}\n";
echo "Toxicidade do Bruxo: {$bruxo->toxicidade}\n";
$bruxo->ataqueBasico('Orc');

echo "\n";

$arqueiro = new Arqueiro('Legolas', 80, 30, Genero::Masculino, 20);
$arqueiro->ataqueBasico('bruxa');
echo "{$arqueiro->getNome()} tem range: {$arqueiro->getRange()}";

$montro->ataqueBasico($arqueiro->getNome());