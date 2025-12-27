<?php

class Bruxo extends Personagem {

    public function __construct(string $nome, int $vida, int $nivel, Genero $genero , public readonly int $toxicidade ) {
        parent::__construct( $nome, $vida, $nivel, $genero );
    }
    function ataqueMonster(string $alvo) {
         echo"{$this->nome} atacou {$alvo}\n";
    }
}