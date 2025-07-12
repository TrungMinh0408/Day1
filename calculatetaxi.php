<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="get">
    <div>
        <label for="Nk">Numbers of kilometers:</label>
        <input name="numbers" id="Nk">
    </div>
    <div>
        <input type="submit" name="btnSend" value="Calculateprice">
    </div>
    </form>
    <?php
         if(isset($_GET['btnSend'])){
            $numbers = $_GET['numbers'];
            $total;
            if($numbers <= 1)
            $total = 15000;
            else if($numbers > 1 && $numbers <= 5)
            $total = 15000 + ($numbers-1)*12000;
            else if($numbers > 5)
            $total = 15000 + 4 * 12000 + ($numbers-5) * 90000;
            else if($numbers > 140)
            $total = (15000 + 4 * 12000 + ($numbers-5) * 90000) * 0.88;

            echo "Total Price : $total  ";
        }
    ?>
</body>
</html>