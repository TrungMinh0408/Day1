<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Calculate age</h1>
    <form action="" method="get">
    <div>
        <label for="BY">Birth Year:</label>
        <input name="BY" id="BY">
        <br/>
        <!-- <label for="name">Current Year:</label>
        <input name="CY" id="CY"> -->
    </div>
    <div>
        <input type="submit" name="btnSubmit" value="Submit">
    </div>
    </form>
        <?php
        if(isset($_GET['btnSubmit'])){
            $BY = $_GET['BY'];
            // $CY = Date($_GET['CY']);
            // $CY = $_GET['CY'];
            $CY = Date('Y');

            $AGE = $CY - intVal($BY);
            // echo '<h2>welcome' . $name . '</h2>';

            echo "<h2>Your age is : $AGE years old  </h2>";
        }
    ?>
</body>
</html>