<?php

namespace WEBSERVER\Model;
class Arqueiro extends Personagem{

    private int $range;
    public function __construct(string $nome, int $vida, int $nivel, Genero $genero , int $range ) {
        parent::__construct( $nome, $vida, $nivel, $genero );
        $this->range = $range;
    }

    public function getRange(): int {
        return $this->range;
    }

    public function ataqueBasico(string $alvo): void { 
        echo"Arqueiro {$this->getNome()} atirou no {$alvo}\n";
    }
}