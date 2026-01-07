<?php


namespace WEBSERVER\Traits;
use WEBSERVER\Model\Genero;
trait AtributosBasicosTrait {
    
    private string $nome;
    private int $vida;
    private int $nivel; 

    public function __construct(
        string $nome, 
        int $vida, 
        int $nivel, 
        public readonly ?Genero $genero = null,
    ) {
        if ($nome === "") {
            throw new \InvalidArgumentException("Nome precisa ser preenchido!");
        } else{
            $this->nome = $nome;
        }
        $this->vida = $vida;
        $this->nivel = $nivel;
    }

    public function getNome(): string { return $this->nome; }
    public function getVida(): int { return $this->vida; }
    public function getNivel(): int { return $this->nivel; }
    
}