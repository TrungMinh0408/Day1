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
        <label for="TC">Tail or Head:</label>
        <input name="numbers" id="TC">
    </div>
    <div>
        <input type="submit" name="btnSend" value="Toss A Coin">
    </div>
    </form>
     <?php
         if(isset($_GET['btnSend'])){
            $numbers = $_GET['numbers'];
            $coin = rand(0,1);
            if($coin == 0)
            echo "Coin : Tail";
            else
            echo "Coin : Head";
            ?>
            <br />
            <?php
            if(($coin == 0 && $numbers == "tail") || ($coin == 1 && $numbers == "head"))
            echo "win";
            else 
            echo "loss";
        }
    ?>
</body>
</html>