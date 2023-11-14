<?php
session_start();
echo "Cheguei até aqui";
if (!isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit();
}
?>