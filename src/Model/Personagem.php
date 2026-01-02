<?php

abstract class Personagem implements AtaqueBasico{
    use AtributosBasicosTrait;
    // O construtor da classe mãe recebe TUDO o que é básico
    public function __construct(
        string $nome, 
        int $vida, 
        int $nivel, 
        public readonly Genero $genero // Atributo genero aqui
    ) {
        if ($nome === "") {
            throw new InvalidArgumentException("");
        } else{
            $this->nome = $nome;
        }
        $this->vida = $vida;
        $this->nivel = $nivel;
    }
    abstract public function ataqueBasico(string $alvo): void;
}
