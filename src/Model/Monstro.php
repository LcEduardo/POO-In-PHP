<?php

class Monstro implements AtaqueBasico{

    private int $vida; 
    private int $nivel;
    public function __construct(protected string $nome, int $vida, int $nivel) {
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

    public function ataqueBasico(string $alvo): void { 
        echo"\nMonstro {$this->nome} está atacando {$alvo}\n";
    }
}