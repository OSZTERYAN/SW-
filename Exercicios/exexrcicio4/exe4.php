<?php

class Livro {
    // Atributos privados
    private $titulo;
    private $autor;
    private $disponivel;

    // Construtor
    public function __construct($titulo, $autor, $disponivel = true) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = $disponivel;
    }

    // Método para emprestar o livro
    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            return "Livro emprestado com sucesso.";
        } else {
            return "Livro já está emprestado.";
        }
    }

    // Método para devolver o livro
    public function devolver() {
        if (!$this->disponivel) {
            $this->disponivel = true;
            return "Livro devolvido com sucesso.";
        } else {
            return "Livro já está disponível.";
        }
    }

    // Método para exibir o status
    public function exibirStatus() {
        $status = $this->disponivel ? "Disponível" : "Emprestado";
        return "Título: {$this->titulo} - Status: {$status}";
    }
}

// Testando a classe
$livro1 = new Livro("Dom Casmurro", "Machado de Assis");

echo $livro1->exibirStatus() . "<br>";      // Disponível
echo $livro1->emprestar() . "<br>";         // Emprestado
echo $livro1->exibirStatus() . "<br>";      // Agora mostra "Emprestado"
echo $livro1->devolver() . "<br>";          // Devolvido
echo $livro1->exibirStatus() . "<br>";      // Disponível de novo

?>
