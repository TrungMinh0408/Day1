<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

                <h1 class="text-center">Login</h1>
                    <form action="" method="get">
                    <div>
                        <label for="name">UserName:</label>
                        <input name="name" id="name">
                        <br/>
                        <label for="name">Password:</label>
                        <input name="password" id="password">
                    </div>
                    <div>
                        <input type="submit" name="btnLogin" value="Login">
                    </div>
                    </form>

                <!-- <?php
                    // if(isset($_GET['btnLogin'])){
                    //     $name = $_GET['name'];
                    //     $password = $_GET['password'];
                    //     if($name == "Trung" && $password == "123")
                    //     // echo '<h2>welcome' . $name . '</h2>';
                    //     echo "<h2>welcome $name </h2>";
                    //     else if($name == "Trung" && $password != "123")
                    //     echo "<h2>wrong password </h2>";
                    //     else if($name != "Trung" && $password == "123")
                    //     echo "<h2>wrong username </h2>";
                    //     else
                    //     echo "<h2>wrong username and password </h2>";
                    // }
                ?> -->

                <?php
                    if(isset($_GET['btnLogin'])){
                        $name = $_GET['name'];
                        $password = $_GET['password'];
                        if($name == "Trung" && $password == "123"){
                        ?>
                        <!-- // echo '<h2>welcome' . $name . '</h2>'; -->
                        <h2 style="color:lightcoral;text-align:center">welcome Trung </h2>
                        <?php
                        // header("Location: welcome.php");
                        }
                        else if($name == "Trung" && $password != "123"){
                        ?>
                        <h2 style="color:lightcoral;text-align:center">wrong username and password </h2>
                        <?php
                        }
                        else if($name != "Trung" && $password == "123"){
                        ?>
                        <h2 style="color:lightcoral;text-align:center">wwrong username and password </h2>
                        <?php
                        }
                        else{
                        ?>
                        <h2 style="color:lightcoral;text-align:center">wrong username and password </h2>
                        <?php
                        }
                    }
                ?>


                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
     crossorigin="anonymous"></script>
</body>
</html>