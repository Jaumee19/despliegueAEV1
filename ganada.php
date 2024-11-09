<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Ganaste!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #dff0d8;
            color: #3c763d;
            text-align: center;
        }
        .mensaje {
            font-size: 2em;
            margin-top: 20px;
        }
        .boton {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .boton:hover {
            background-color: #4cae4c;
        }
    </style>
</head>

<body>
    <div class="mensaje">¡Enhorabuena! Has ganado :)</div>
    <a href="index.php"><button class="boton">Jugar de nuevo</button></a>
</body>
</html>
