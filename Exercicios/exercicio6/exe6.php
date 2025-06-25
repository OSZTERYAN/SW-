<?php

class Retangulo {
    // Atributos privados
    private $largura;
    private $altura;

    // Métodos para definir largura e altura
    public function setLargura($largura) {
        $this->largura = $largura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    // Métodos para obter largura e altura
    public function getLargura() {
        return $this->largura;
    }

    public function getAltura() {
        return $this->altura;
    }

    // Método para calcular a área
    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    // Método para calcular o perímetro
    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}

// Testando a classe
$retangulo1 = new Retangulo();
$retangulo1->setLargura(5);
$retangulo1->setAltura(3);

echo "Largura: " . $retangulo1->getLargura() . "<br>";
echo "Altura: " . $retangulo1->getAltura() . "<br>";
echo "Área: " . $retangulo1->calcularArea() . "<br>";
echo "Perímetro: " . $retangulo1->calcularPerimetro();

?>
