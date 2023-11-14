<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="public/assets/ico/book.png" type="image/x-icon">
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
	<input type="text" name="nome" placeholder="Email ou Usuário">
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
	<a href="registro.php">
	Crie sua conta
	</a>				
</form>	
<a class="adm-button" id="adminButton">
        <img src="public/assets/img/adm.png">
    </a>
	<div class="modal-background" id="modalBackground"></div>
    <div id="adminModal" class="modal">
        <button class="close-button" id="closeBtn">&times;</button>
        <p>Esta página é apenas para administradores.</p>
        <button class="understood-button" id="understoodBtn">Entendi</button>
    </div>
	<script>
	document.addEventListener('DOMContentLoaded', function() {
    var adminButton = document.getElementById('adminButton');
    var modal = document.getElementById('adminModal');
    var modalBackground = document.getElementById('modalBackground');

    adminButton.addEventListener('click', function() {
        modal.style.display = 'block';
        modalBackground.style.display = 'block';
    });

    document.getElementById('closeBtn').addEventListener('click', function() {
        modal.style.display = 'none';
        modalBackground.style.display = 'none';
    });

    document.getElementById('understoodBtn').addEventListener('click', function() {
        modal.style.display = 'none';
        modalBackground.style.display = 'none';
    });
});
</script>					
	
					
			

</body>
</html>