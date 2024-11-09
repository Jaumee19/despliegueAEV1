<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perdiste</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2dede;
            color: #a94442;
            text-align: center;
        }
        .mensaje {
            font-size: 2em;
            margin-top: 20px;
        }
        .boton {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #d9534f;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .boton:hover {
            background-color: #c9302c;
        }
    </style>
</head>

<body>
    <div class="mensaje">Lo siento, has perdido :(</div>
    <a href="index.php"><button class="boton">Jugar de nuevo</button></a>
</body>
</html>
