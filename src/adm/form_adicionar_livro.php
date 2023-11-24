<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar Livro</title>
</head>
<body>
    <h2>Adicionar Livro</h2>
    <form action="adicionar_livro.php" method="POST" enctype="multipart/form-data">
        <label for="nome">Nome do Livro:</label>
        <input type="text" name="nome" required>
        
        <label for="preco">Preço:</label>
        <input type="number" name="preco" step="0.01" required>

        <label for="imagem">Imagem:</label>
        <input type="file" name="imagem" accept="image/*" required>

        <button type="submit" value="Enviar">Adicionar Livro</button>

        <button type="button" onclick="window.location.href='app/Views/login/form_add.php';">Visualizar Livros</button>
    </form>
</body>
</html>
