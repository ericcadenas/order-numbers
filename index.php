<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenador de Números</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
        }
        h1 {
            color: #009688;
        }
        form {
            margin-top: 20px;
        }
        input[type="number"] {
            width: 50px;
        }
    </style>
</head>
<body>
    <h1>Ordenador de Números</h1>
    <form action="" method="post">
        <label for="numbers">Ingrese 5 números separados por comas:</label><br>
        <input type="text" id="numbers" name="numbers" required><br><br>
        <button type="submit">Ordenar y Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los números ingresados
        $numbers = explode(",", $_POST["numbers"]);
        // Ordenar de menor a mayor
        sort($numbers);
        echo "<p>Números ordenados de menor a mayor: " . implode(", ", $numbers) . "</p>";
        // Ordenar de mayor a menor
        rsort($numbers);
        echo "<p>Números ordenados de mayor a menor: " . implode(", ", $numbers) . "</p>";
        // Calcular suma y media
        $sum = array_sum($numbers);
        $average = $sum / count($numbers);
        echo "<p>Suma de los números: $sum</p>";
        echo "<p>Media de los números: $average</p>";
    }
    ?>
</body>
</html>
