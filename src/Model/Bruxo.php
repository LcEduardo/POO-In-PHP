<?php

namespace WEBSERVER\Model;
class Bruxo extends Personagem {

    public function __construct(string $nome, int $vida, int $nivel, Genero $genero , public readonly int $toxicidade ) {
        parent::__construct( $nome, $vida, $nivel, $genero );
    }
    public function ataqueBasico(string $alvo): void{
         echo"O Bruxo {$this->getNome()} golpeou {$alvo}\n";
    }
}