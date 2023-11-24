<?php
class LivroModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function adicionarLivro($nome, $preco, $imagem) {
        $sql = "INSERT INTO livros (nome, preco, imagem) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $preco, $imagem]);
    }
}
?>