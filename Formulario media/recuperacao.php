<?php
    $mediaFinal = floatval($_POST['mediaFinal']);
    $notaRecuperacao = floatval($_POST['notaRecuperacao']);
    $mediaComRecuperacao = $mediaFinal + $notaRecuperacao;

    $resultado = $mediaComRecuperacao >= 10 ? "Aprovado!" : "Reprovado!";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Recuperação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #FFD700, #FFA500);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .result-container {
            background: white;
            padding: 20px;
            border-radius: 15px;
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1 class="text-center">Resultado da Recuperação</h1>
        <p class="text-center">Média final com recuperação: <?php echo $mediaComRecuperacao; ?></p>
        <p class="text-center"><?php echo $resultado; ?></p>
    </div>
</body>
</html>
