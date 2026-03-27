<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Médias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #FFD700, #FFA500); /* Degrade amarelo para laranja */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background: linear-gradient(to bottom right, #007BFF, #6A0DAD); /* Degrade azul para roxo */
            padding: 20px;
            border-radius: 15px;
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1 class="text-center text-white">Formulário de Médias</h1>
        <form action="resultado.php" method="POST">
            <div class="mb-3">
                <label for="media1" class="form-label text-white">Média 1:</label>
                <input type="number" step="0.1" class="form-control" name="media1" required>
            </div>
            <div class="mb-3">
                <label for="media2" class="form-label text-white">Média 2:</label>
                <input type="number" step="0.1" class="form-control" name="media2" required>
            </div>
            <div class="mb-3">
                <label for="media3" class="form-label text-white">Média 3:</label>
                <input type="number" step="0.1" class="form-control" name="media3" required>
            </div>
            <div class="mb-3">
                <label for="media4" class="form-label text-white">Média 4:</label>
                <input type="number" step="0.1" class="form-control" name="media4" required>
            </div>
            <button type="submit" class="btn btn-danger btn-sm w-100">Calcular Média</button>
        </form>
    </div>
</body>
</html>

