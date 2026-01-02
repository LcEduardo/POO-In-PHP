<?php

trait AtributosBasicosTrait {
    private int $vida;
    private int $nivel;
    private string $nome; // Removi o construtor daqui para evitar conflitos

    public function getNome(): string { return $this->nome; }
    public function getVida(): int { return $this->vida; }
    public function getNivel(): int { return $this->nivel; }
}