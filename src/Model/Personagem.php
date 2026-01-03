<?php

namespace WEBSERVER\Model;

// use -> É como dizer ao PHP: "Sempre que eu escrever Personagem neste arquivo, saiba que estou me referindo ao arquivo que está na pasta App\Models\Personagem

use WEBSERVER\Interface\AtaqueBasico; 
use WEBSERVER\Traits\AtributosBasicosTrait;

abstract class Personagem implements AtaqueBasico{

    use AtributosBasicosTrait; // use -> serve para incluir um Trait.
    
    public function __construct(
        string $nome, 
        int $vida, 
        int $nivel, 
        public readonly Genero $genero 
    ) {
        if ($nome === "") {
            echo"Nome não pode ser vazio";
        } else{
            $this->nome = $nome;
        }
        $this->vida = $vida;
        $this->nivel = $nivel;
    }
    abstract public function ataqueBasico(string $alvo): void;
}
