<?php
require_once 'C:\xampp\htdocs\biblioteca\src\config\config.php';
require_once 'C:\xampp\htdocs\biblioteca\src\index\app\Controllers\LoginController.php';

$loginController = new LoginController($pdo);

if (isset($_POST['nome']) &&
    isset($_POST['email']) &&
    isset($_POST['senha']))
{
    $loginController->criarLogin($_POST['nome'], $_POST['email'], $_POST['senha']);
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Registre-se</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/css/01login-registro.css">
	<script src="public/js/background.js"></script>
</head>
<body>
	<?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                      
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

	<form  method="POST">
	<h2>Registro</h2>
	<input type="text" name="nome" placeholder="Nome" required>         
	<input type="email" name="email" placeholder="E-mail" required>
	<input type="password" name="senha" placeholder="Senha" required>
	<button>			
	Registrar		
	</button>					
							
	<a href="login.php">					
	Logue na sua conta				
	</a>
	</form>			
</body>
</html>