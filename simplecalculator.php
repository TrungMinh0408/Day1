<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="get">
        <div>
            <label for="FN">First Number:</label>
            <input name="number1" id="FN" required>
        </div>
        <div>
            <label for="SN">Second Number:</label>
            <input name="number2" id="SN" required>
        </div>
        <div>
            <label for="operation">Operation:</label>
            <select name="operation" id="operation" required>
                <option value="+">Addition (+)</option>
                <option value="-">Subtraction (-)</option>
                <option value="*">Multiplication (*)</option>
                <option value="/">Division (/)</option>
                <option value="%">Modulus (%)</option>
            </select>
        </div>
        <div>
            <input type="submit" name="btnCalc" value="Calculate">
        </div>
    </form>

    <?php
    if (isset($_GET['btnCalc'])) {
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $op = $_GET['operation'];

        if (is_numeric($number1) && is_numeric($number2)) {
            switch ($op) {
                case '+':
                    $result = $number1 + $number2;
                    break;
                case '-':
                    $result = $number1 - $number2;
                    break;
                case '*':
                    $result = $number1 * $number2;
                    break;
                case '/':
                    if ($number2 != 0) {
                        $result = $number1 / $number2;
                    } else {
                        $result = "Cannot divide by zero!";
                    }
                    break;
                case '%':
                    if ($number2 != 0) {
                        $result = $number1 % $number2;
                    } else {
                        $result = "Cannot mod by zero!";
                    }
                    break;
                default:
                    $result = "Invalid operation";
            }

            echo "<h3>Result: $result</h3>";
        } else {
            echo "<h3 style='color:red'>❌ Please enter valid numbers.</h3>";
        }
    }
    ?>
</body>
</html>