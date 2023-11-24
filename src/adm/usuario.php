<?php
require_once '../config/config.php';
require_once 'app/Controllers/LoginController.php';

$LoginController = new LoginController($pdo);

if (isset($_POST['nome_u']) && 
    isset($_POST['email']) &&
    isset($_POST['senha'])) 
{
    $LoginController->criarLogin($_POST['nome_u'], $_POST['email'], $_POST['senha']);
    header('Location: #');
}

// Atualiza Login
if (isset($_POST['id_usuario']) && isset($_POST['atualizar_nome']) && isset($_POST['atualizar_email']) && isset($_POST['atualizar_senha'])) {
    $LoginController->atualizarLogin($_POST['id_usuario'], $_POST['atualizar_nome'], $_POST['atualizar_email'], $_POST['atualizar_senha']);
}

// Excluir Login
if (isset($_POST['excluir_id'])) {
    $LoginController->excluirLogin($_POST['excluir_id']);
}

$Logins = $LoginController->listarLogins();

?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD com MVC e PDO</title>
</head>
<body>
    <a href="index.php">Voltar</a>
    <h1>Logins</h1>
    <form method="post">
        <input type="text" name="nome_u" placeholder="Nome Usuário" required>
        <input type="text" name="email" placeholder="E-mail" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Adicionar Usuário</button>
    </form>

    <h2>Lista de Logins</h2>
    <ul>
        <?php foreach ($Logins as $Login): ?>
            <li><?php echo $Login['nome_u']; ?> - <?php echo $Login['email']; ?> - <?php echo $Login['senha']; ?></li>
        <?php endforeach; ?>
    </ul>

<?php
$LoginController->exibirListaLogins();
?>

<h2>Atualizar Login</h2>
    <form method="post">
        <select name="id_usuario">
        <?php foreach ($Logins as $Login): ?>
                                <option value="<?php echo $Login['id_usuario']; ?>"><?php echo $Login['id_usuario']; ?></option>
                                <?php endforeach; ?>
        </select>
                <input type="text" name="atualizar_nome" placeholder="Novo Nome" required>
                <input type="text" name="atualizar_email" placeholder="Nova E-mail" required>
                <input type="password" name="atualizar_senha" placeholder="Nova Senha" required>
        <button type="submit">Atualizar Login</button>
    </form>

    <h2>Excluir Login</h2>
    <form method="post">
        <select name="excluir_id">
            <?php foreach ($Logins as $Login): ?>
                <option value="<?php echo $Login['id_usuario']; ?>"><?php echo $Login['nome_u']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Login</button>
    </form>
</body>
</html>