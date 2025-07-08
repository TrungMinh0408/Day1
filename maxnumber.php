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
        <label for="AN">Aray of Numbers:</label>
        <input name="numbers" id="AN">
    </div>
    <div>
        <input type="submit" name="btnSend" value="Send">
    </div>
    </form>
    <?php
         if(isset($_GET['btnSend'])){
            $numbers = $_GET['numbers'];
            $num = explode(",",$numbers);
            $max = $num[0];
            for ($i = 1; $i < count($num);$i++){
                if($max< $num[$i]){
                    $max = $num[$i];
                }
            }
            
            echo "The max element is : $max ";
        }
    ?>
</body>
</html>