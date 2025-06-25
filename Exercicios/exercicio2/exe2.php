<?php

class Aluno {
    // Atributos privados
    private $nome;
    private $nota1;
    private $nota2;

    // Construtor
    public function __construct($nome, $nota1, $nota2) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    // Método para retornar o nome
    public function getNome() {
        return $this->nome;
    }

    // Método para calcular a média
    public function calcularMedia() {
        return ($this->nota1 + $this->nota2) / 2;
    }

    // Método para verificar a situação
    public function verificarSituacao() {
        $media = $this->calcularMedia();
        if ($media >= 7) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }
}

// Testando a classe
$aluno1 = new Aluno("João", 8.5, 6.5);

echo "Nome: " . $aluno1->getNome() . "<br>";
echo "Média: " . $aluno1->calcularMedia() . "<br>";
echo "Situação: " . $aluno1->verificarSituacao();

?>
