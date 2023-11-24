<?php require_once 'C:\xampp\htdocs\biblioteca-virtual\src\config\config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livros</title>
    
</head>
<body>
<style>
          body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #3498db;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #fff;
            border-radius: 10px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ecf0f1;
        }

        th {
            background-color: #3498db;
            color: #fff;
            font-weight: bold;
        }

        tbody tr:hover {
            background-color: #ecf0f1;
            transition: background-color 0.3s;
        }

        a {
            text-decoration: none;
            color: #3498db;
            transition: color 0.3s;
        }

        a:hover {
            color: #2077b6;
        }

        button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #27ae60;
        }

        h1 {
        
        }
    </style>
    
    <?php
    $stmt = $pdo->query('SELECT * FROM livros ORDER BY id_livro');
    $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($livros) == 0) {
        echo '<p>Nenhum livro encontrado! </p>';
    } else {
        echo '<h1>livro</h1>';
        echo '<table border="1">';
        echo '<thead><tr><th>Nome</th><th>Preço</th><th>Capa</th><th colspan="2">Opções</th></tr></thead>';
        echo '<tbody>';

        foreach ($livros as $livro) {
            echo '<tr>';
            echo '<td>' . $livro['nome'] . '</td>';
            echo '<td>' . $livro['preco'] . '</td>';
            echo '<td><img src="' . $livro['imagem'] . '" alt="Capa do Livro"></td>';
            echo '<td><a style="color:black;" href="atualizar.php?id=' . $livro['id_livro'] . '">Atualizar</a></td>';
            echo '<td><a style="color:black;" href="../../deletar-livros.php?id=' . $livro['id_livro'] . '">Deletar</a></td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    }
    ?>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>
