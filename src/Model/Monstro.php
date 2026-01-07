<?php

namespace WEBSERVER\Model;

use InvalidArgumentException;
use WEBSERVER\Interface\AtaqueBasico; 
use WEBSERVER\Traits\AtributosBasicosTrait;
class Monstro implements AtaqueBasico{

    use AtributosBasicosTrait;
    // O construtor da classe mãe recebe TUDO o que é básico
    public function __construct(
        string $nome, 
        int $vida, 
        int $nivel,
    ) {
        if ($nome === "") {
           throw new InvalidArgumentException("Nome do monstro não pode estar vázio");
        } else{
            $this->nome = $nome;
        }
        $this->vida = $vida;
        $this->nivel = $nivel;
    }

    public function ataqueBasico(string $alvo): void { 
        echo"\nMonstro {$this->nome} está atacando {$alvo}\n";
    }
}