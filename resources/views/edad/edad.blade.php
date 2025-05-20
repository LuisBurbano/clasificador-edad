<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clasificador de Edad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info text-white d-flex flex-column justify-content-center align-items-center min-vh-100">
    <div class="card p-4 shadow" style="max-width: 400px;">
        <h2 class="text-center mb-4">Ingrese su edad</h2>
        <form method="POST" action="{{ route('procesar.edad') }}">
            @csrf
            <div class="mb-3">
                <input type="number" name="edad" class="form-control" placeholder="Edad" min="-10" max="120" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Continuar</button>
        </form>
    </div>
</body>
</html>
