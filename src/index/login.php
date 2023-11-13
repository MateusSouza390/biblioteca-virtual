<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
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

	<form action="loginconfig.php" method="POST">
	<h2>Login</h2>
	<input type="text" name="email" placeholder="Email ou Usuário">
	<input type="password" name="senha" placeholder="Senha">					
	<button type="submit">
	Login
	</button>
	<a href="registro.php">
	Crie sua conta
	</a>				
</form>	
					
	
					
			

</body>
</html>