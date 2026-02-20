<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Amor</title>
    <link rel="stylesheet" href="CSS/Compatibilidad.css">
    <!-- Fuente para que el H1 se vea como en el estilo -->
    <link href="https://fonts.googleapis.com" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="stylesheet">
</head>
<body>
    <div class="card">
        <h1> Amor </h1>
        <div class="results">
            <?php
            $nombre1 = "Hernández";
            $nombre2 = "Calderon";
            $alias = "";
            $porcentaje = 0;

            $porcentaje += strlen($nombre1);
            $porcentaje += strlen($nombre2);

            if (str_contains(strtolower($nombre1), "o")) { $porcentaje += 100; }
            if (str_contains(strtolower($nombre2), "o")) { $porcentaje += 100; }

            $porcentaje += random_int(0, 30);
            $alias = substr($nombre1, 0, 2) . substr($nombre2, 0, 2);

            if ($porcentaje > 100) { $porcentaje = 100; }

            echo "<p>Nombre persona 1:" . $nombre1 . "</p>";
            echo "<p><span>Nombre persona 2:</span> " . $nombre2 . "</p>";
            echo "<p class='alias'><span>Alias de pareja:</span> " . $alias . "</p>";
            echo "<div class='percentage-container'>";
            echo "  <p>Compatibilidad</p>";
            echo "  <div class='score'>" . $porcentaje . "%</div>";
            echo "</div>";
            ?>
        </div>
    </div>
</body>
</html>