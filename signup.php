<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "form";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    echo "failed to connect database" . mysqli_error($con);
}

if (isset($_POST['name'])) {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['number'];
    $password = $_POST['password'];
    $c_pass = $_POST['c_pass'];

    $query = "INSERT INTO `data` (`name`, `email`, `mobile`, `password`, `c_pass`, `time`) VALUES ('$name', '$email', '$mobile', '$password', '$c_pass', current_timestamp())
    ";
    $sel = mysqli_query($con, $query);


  
    if ($password == $c_pass) {


        $ins = mysqli_query($con, $query);

        // echo "success";

    } else {
        echo "password and confirm password must be same";
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="signup.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    
</head>

<body>
    <div class="container">

        <div class="box">
            <div class="b">
                <div class="title">
                    <h2 class="heading">Sign in</h2>
                </div>
                <div class="info">
                    <form action="index1.php" method="post">
                        <div class="data">
                            <div class="details">
                                <div class="a">
                                    <div class="lable">
                                        <label for="name">Name</label>
                                    </div>

                                    <div class="inp">
                                        <input type="text" name="name" id="name" placeholder="enter name here" required>
                                    </div>
                                </div>
                                <div class="a">
                                    <div class="lable">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="inp">
                                        <input type="email" name="email" id="email" placeholder="enter email here" required>

                                    </div>
                                </div>
                                <div class="a">
                                    <div class="lable">
                                        <label for="mobile">Mobile No.</label>
                                    </div>
                                    <div class="inp">
                                        <input type="tel" name="number" id="mobile" placeholder="enter mobile number here" pattern="[0-9]{10}" required>

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
                                <div class="a">
                                    <div class="lable">
                                        <label for="c_pass">Confirm Password</label>
                                    </div>
                                    <div class="inp">
                                        <input type="password" name="c_pass" id="c_pass" placeholder=" confirm password " required>

                                    </div>
                                </div>
                                <div class="a">
                                    <div class="btn">
                                        <input type="submit" value="Signup" name="submit" id="btn">
        
                                        <!-- <script>
                                           console.log("welcome");
                                           
                                           a = document.getElementById("btn");
                                           console.log(a)

                                          document.getElementById("btn").addEventListener('click',function(){
                                                let d = document.getElementById('password');
                                                let e = document.getElementById('c_pass');
                                                console.log(e.value);

                                                if(d.value == e.value && d.value != ""){
                                                    alert("success");
                                                }
                                                
                                            }); -->
                                                    <!-- // let a= document.getElementById('password');

                                            //    a = document.getElementById('btn').addEventListener('click',function(){
                                            //         let a= document.getElementById('password');
                                                    
                                            // let b = document.getElementById('c_pass');
                                            // if(a==b){
                                            //         alert("success");

                                            //     }});
                                            //     console.log(a) -->

                                                
                                            

                                        <!-- </script> -->
                                    </div>



                                </div>
                                <div class="log" style="text-align:right;">
                                    already register <a href="login.php" style="text-decoration: none;">log in</a>

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