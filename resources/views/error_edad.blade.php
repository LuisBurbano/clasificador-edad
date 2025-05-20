<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error de Edad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-danger text-white d-flex flex-column justify-content-center align-items-center min-vh-100">
    <div class="text-center">
        <h1>Edad inválida ingresada</h1>
        <p class="lead">Por favor, introduce un valor entre 0 y 120 años.</p>
        <a href="{{ route('formulario.edad') }}" class="btn btn-light mt-3">Volver</a>
    </div>
</body>
</html>
