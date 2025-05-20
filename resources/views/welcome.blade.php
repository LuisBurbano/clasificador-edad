<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-primary text-white text-center d-flex flex-column justify-content-center align-items-center min-vh-100">
    <div class="container">
        <h1 class="display-4">Bienvenido al portal de salud</h1>
        <p class="lead">Te ayudaremos a encontrar la información adecuada para tu edad.</p>
        <a href="{{ route('formulario.edad') }}" class="btn btn-light btn-lg mt-4">Empezar</a>
    </div>
</body>
</html>
