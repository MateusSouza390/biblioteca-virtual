<?php
require_once 'C:\xampp\htdocs\biblioteca-virtual\src\adm\app\Models\LivroModel.php';

class LivroController {
    private $livroModel;

    public function __construct($pdo) {
        $this->livroModel = new LivroModel($pdo);
    }

    public function adicionarLivro($nome, $preco, $imagem) {
        $this->livroModel->adicionarLivro($nome, $preco, $imagem);
    }

    public function exibirLivros() {
        // Obtém os livros do modelo
        $livros = $this->livroModel->obterLivros();

        // Inclui a visão e passa os livros para ela
        include 'caminho/para/sua/visao.php';
    }
}
?>
