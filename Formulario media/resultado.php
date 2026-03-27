<?php
    $media1 = floatval($_POST['media1']);
    $media2 = floatval($_POST['media2']);
    $media3 = floatval($_POST['media3']);
    $media4 = floatval($_POST['media4']);

    $mediaFinal = ($media1 + $media2 + $media3 + $media4) / 4;

    function calcular_conceito($media) {
        if ($media >= 9) {
            return 'A';
        } elseif ($media >= 7) {
            return 'B';
        } elseif ($media >= 4) {
            return 'C';
        } else {
            return 'D';
        }
    }

    $conceito = calcular_conceito($mediaFinal);
    $mensagem = "";

    switch ($conceito) {
        case 'A':
            $mensagem = "Aprovado com Louvor!";
            break;
        case 'B':
            $mensagem = "Aluno Aprovado.";
            break;
        case 'C':
            $mensagem = "Recuperação, sua chance de passar!";
            break;
        case 'D':
            $mensagem = "Poxa vida, vamos tentar novamente ano que vem.";
            break;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
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
        <h1 class="text-center">Resultado</h1>
        <p class="text-center">Média Final: <?php echo $mediaFinal; ?></p>
        <p class="text-center">Conceito: <?php echo $conceito; ?></p>
        <p class="text-center"><?php echo $mensagem; ?></p>

        <?php if ($conceito == 'C') { ?>
            <form action="recuperacao.php" method="POST">
                <div class="mb-3">
                    <label for="notaRecuperacao" class="form-label">Nota da Recuperação:</label>
                    <input type="number" step="0.1" class="form-control" name="notaRecuperacao" required>
                    <input type="hidden" name="mediaFinal" value="<?php echo $mediaFinal; ?>">
                </div>
                <button type="submit" class="btn btn-primary w-100">Verificar Aprovação</button>
            </form>
        <?php } ?>
    </div>
</body>
</html>
