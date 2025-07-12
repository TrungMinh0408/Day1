<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sum from 1 to n</title>
</head>
<body>
    <h2>Calculate the Sum:</h2>
    <form action="" method="get">
        <div>
            <label for="number">Enter a number (n):</label>
            <input type="number" name="number" id="number" required>
        </div>
        <div>
            <input type="submit" name="btnCalculate" value="Calculate">
        </div>
    </form>

    <?php
    if (isset($_GET['btnCalculate'])) {
        $n = intval($_GET['number']);
        $total = 0;
        for ($i = 1; $i <= $n; $i++) {
            $total += $i;
        }

        echo "<h3>Result:</h3>";
        echo "The result S = 1 + 2 + 3 + ... + $n is: <strong>$total</strong>";
    }
    ?>
</body>
</html>
