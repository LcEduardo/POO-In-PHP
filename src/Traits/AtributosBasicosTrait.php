<?php

namespace WEBSERVER\Traits;
trait AtributosBasicosTrait {
    private int $vida;
    private int $nivel;
    private string $nome; 

    public function getNome(): string { return $this->nome; }
    public function getVida(): int { return $this->vida; }
    public function getNivel(): int { return $this->nivel; }
}