<?php

class Personagem {
    private int $vida;
    private int $nivel;
    public function __construct(protected string $nome, int $vida, int $nivel, public readonly Genero $genero) {
        if ($nome === "") {
            throw new InvalidArgumentException("");
        } else{
            $this->nome = $nome;
        }

        $this->vida = $vida;
        $this->nivel = $nivel;
    }
  
    public function getNome(): string {
        return $this->nome;
    }

    public function getVida(): int {
        return $this->vida;
    }

    public function getFNivel(): int {  
        return $this->nivel;
    }
    public function atacar(string $alvo) { 
        echo"{$this->nome} atacou {$alvo}\n";
    }
}
