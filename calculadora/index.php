<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .calculator {
            border: 1px solid #ddd;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
        }
        .calculator input {
            margin: 5px 0;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        .calculator button {
            padding: 10px;
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .calculator button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Calculadora Básica</h2>
        <form method="post">
            <input type="number" name="num1" step="any" placeholder="Número 1" required>
            <input type="number" name="num2" step="any" placeholder="Número 2" required>
            <select name="operation">
                <option value="sum">Suma</option>
                <option value="subtract">Resta</option>
                <option value="multiply">Multiplicación</option>
                <option value="divide">División</option>
            </select>
            <button type="submit" name="calculate">Calcular</button>
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = '';

            switch ($operation) {
                case 'sum':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = 'No se puede dividir por cero.';
                    }
                    break;
                default:
                    $result = 'Operación no válida.';
                    break;
            }

            echo "<p>Resultado: $result</p>";
        }
        ?>
    </div>
</body>
</html>
