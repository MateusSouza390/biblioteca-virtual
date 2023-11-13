<?php 
session_start();
include 'C:\xampp\htdocs\biblioteca\src\config\config.php';

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usuarios WHERE (email = :email or nome = :email) AND senha = :senha";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($resultado) {
        $_SESSION['usuarioId'] = $resultado['id_usuario'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
        $_SESSION['usuarioNomedeUsuario'] = $resultado['nome'];
        $_SESSION['usuarioNiveisAcessoId'] = $resultado['tipo_usuario'];

        
        if ($_SESSION['usuarioNiveisAcessoId'] == "1") {
            header("Location: ../login_adm/painel.php");
        } elseif ($_SESSION['usuarioNiveisAcessoId'] == "2") {
            header("Location: index.php");
        } else {
            header("Location: login.php");
        }
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: index.php');
        exit();
    }
} 
?>
