<?php

namespace WEBSERVER\Model;

use InvalidArgumentException;
use WEBSERVER\Interface\AtaqueBasico; 
use WEBSERVER\Traits\AtributosBasicosTrait;
class Monstro implements AtaqueBasico{

    use AtributosBasicosTrait;
    // O construtor da classe mãe recebe TUDO o que é básico

    public function ataqueBasico(string $alvo): void { 
        echo"\nMonstro {$this->getNome()} está atacando {$alvo}\n";
    }
}