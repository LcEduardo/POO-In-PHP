<?php

class Bruxo extends Personagem {

    public function __construct(string $nome, int $vida, int $nivel, Genero $genero , public readonly int $toxicidade ) {
        parent::__construct( $nome, $vida, $nivel, $genero );
    }
    function ataqueBasico(string $alvo) {
         echo"O Bruxo {$this->nome} golpeou {$alvo}\n";
    }
}