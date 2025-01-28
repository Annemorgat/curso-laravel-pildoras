<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso laravel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/base.css">
</head>
<body>
    <div class="cabecera">
        @yield(section: 'cabecera')
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="pie">
        @yield('pie')
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
