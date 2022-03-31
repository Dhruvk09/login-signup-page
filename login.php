<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">

        <div class="box">
            <div class="b">
                <div class="title">
                    <h2 class="heading">Log in</h2>
                </div>
                <!-- <hr class="c"> -->
                <div class="info">
                    <form action="login.php" method="post">
                        <div class="data">
                            <div class="details">


                                <div class="a">
                                    <div class="lable">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="inp">
                                        <input type="email" name="email" id="email" placeholder="enter email here" required>

                                    </div>
                                </div>

                            </div>
                            <div class="a">
                                <div class="lable">
                                    <label for="password">Password</label>
                                </div>
                                <div class="inp">
                                    <input type="password" name="password" id="password" placeholder=" password " required>

                                </div>
                            </div>

                        </div>
                        <div class="a">
                            <div class="btn">
                                <input type="submit" value="Login" name="submit" id="btn">      
                            </div>

                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>


<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "form";

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con){
    echo "failed to connect database". mysqli_error($con);
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password']; 
$sel = "SELECT * FROM `data` where email = '$email' && password = '$pass'";
$res = mysqli_query($con, $sel);
$row = mysqli_num_rows($res);
if($row>0){ 
echo "log in successfully";


}
else{
    echo "please enter valid email or password";
}
}

        
?>