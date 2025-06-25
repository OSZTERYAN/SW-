<?php

class Funcionario {
    // Atributos privados
    private $nome;
    private $salario;

    // Construtor
    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    // Método para aumentar o salário com base em uma porcentagem
    public function aumentarSalario($porcentagem) {
        $aumento = $this->salario * ($porcentagem / 100);
        $this->salario += $aumento;
    }

    // Método para exibir as informações
    public function exibirInformacoes() {
        return "Nome: {$this->nome} - Salário: R$ " . number_format($this->salario, 2, ',', '.');
    }
}

// Testando a classe
$funcionario1 = new Funcionario("Maria", 3000);

echo $funcionario1->exibirInformacoes() . "<br>";  // Antes do aumento
$funcionario1->aumentarSalario(10);                // Aumenta 10%
echo $funcionario1->exibirInformacoes();           // Depois do aumento

?>
