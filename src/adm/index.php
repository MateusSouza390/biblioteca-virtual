<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        
    ?>
  <h2>Olá <?php //echo $_SESSION['user_u'] , "!"; ?> </h2><br> -
    <button onclick="logout()"><h6>Sair</h6></button><br>
    
    <a href="livro.php">Livros</a><br>
    <a href="usuario.php">Users</a><br>
</body>
</html>