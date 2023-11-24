<?php
session_start()
?>

<!--<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Bookers©</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="public/assets/img/letter-b.png" type="image/x-icon">
	<link rel="stylesheet" href="public/css/01login-registro.css">
	
</head>
<body>

	
    
	<form action="loginconfig-adm.php" method="POST">
	
	<h2>Login-adm</h2>
   
	<input type="text" name="nome_u" placeholder="Usuário">
	<input type="password" name="senha" placeholder="Senha">
	<?php
    if (isset($_SESSION['senha_incorreta'])) {
        echo "<h2 class='error-message'>Usuário ou Senha incorretos</h2>";
        unset($_SESSION['senha_incorreta']);
    }
    ?>					
	<button type="submit">
	Login
	</button>
	
</form>	

					
			
</body>
</html>