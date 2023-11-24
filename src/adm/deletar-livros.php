<?php
include 'db.php';

if (!isset($_GET['id_livro'])) {
    header('Location: app/Views/login/form_add.php');
    exit;
}

$id_livro = $_GET['id_livro'];
$stmt = $pdo->prepare('SELECT * FROM livro WHERE id_livro = ?');
$stmt->execute([$id_livro]);
$appointment = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$appointment) {
    header('Location: listar.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $pdo->prepare('DELETE FROM livros WHERE id_livro =?');
    $stmt ->execute([$id_livro]);
    header('Location: app/Views/login/form_add.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Compromisso</title>
    <link rel="stylesheet" href="css/style4.css">
</head>
<body>
  <h1>Deletar Compromiso<h1>
    <p>Tem certeza que deseja deletar o compromisso de 
        <?php echo $appointment['nome'];?>
    No Preço: <?php echo($appointment['preco']); ?>
    Da capa: <?php echo ($appointment['imagem']); ?>?</p>
    <form method="post">
      <button type="submit">Sim</button>
      <a href="listar.php">Não</a>
    </form>
</body>
</html>