<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Mis Cursos Online</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif; /* Aplicar tu fuente personalizada */
            background-image: url('assets/img/inicio.jpg'); /* Rutas de las imágenes */
            background-size: cover; /* Cubrir toda el área */
            background-position: center center; /* Posiciones de la imagen de fondo */
            background-repeat: no-repeat; /* Evitar que la imagen de fondo se repita */
            height: 93vh; /* Ajustar la altura del cuerpo al 100% de la ventana gráfica */
            margin: 0; /* Eliminar márgenes predeterminados */
            padding: 0; /* Eliminar relleno predeterminado */
            position: relative; /* Establecer posición relativa para alinear imágenes absolutas */
        }

        .container {
            margin-top: 50px;
            text-align: center;
        }

        h1 {
            color: #333; /* Elegir un color que se ajuste a tu diseño */
        }

        .btn-info {
            margin-top: 20px;
        }

        /* Estilo para la imagen en la mitad */
        .inicio1 {
            position: absolute; /* Posición absoluta para que se superponga */
            top: 50%; /* Ajustar la posición vertical */
            right: 50%; /* Ajustar la posición horizontal */
            transform: translate(50%, -50%); /* Centrar la imagen */
            z-index: 1; /* Asegurar que la imagen esté encima de la imagen de fondo */
        }
    </style>
</head>
<body class="atialiased">
    <div class="container"> 
        <h1>Mis Cursos Online</h1>
        <a href="{{ route('login') }}" class="btn btn-info">Login</a>
        <a href="{{ route('register') }}" class="btn btn-info">Register</a>
    </div>
    <!-- Imagen inicio1 centrada -->
    <img src="assets/img/inicio1.jpg" class="inicio1" alt="Inicio 1">
</body>
</html>
