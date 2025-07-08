<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

</head>
<body>

    <h1>Welcome</h1>
    <form action="" method="get">
    <div>
        <label for="name">Your Name:</label>
        <input name="name" id="name">
    </div>
    <div>
        <input type="submit" name="btnSend" value="Send">
    </div>
    </form>
    <?php
        if(isset($_GET['btnSend'])){
            $name = $_GET['name'];
            // echo '<h2>welcome' . $name . '</h2>';
            echo "<h2>welcome  $name  </h2>";
            
        }
    ?>

    
</body>
</html>