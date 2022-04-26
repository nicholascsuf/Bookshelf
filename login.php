// Author: Jin Lu
//Date Created: 04-20-2022
//Copyright © Jin Lu. All rights reserved. */
//Last modified by NicholasCSUF 4-25-2022


<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }

}

?>

<!DOCTYPE html>
<head>
    <title>Login to Bookshelf</title>
    <link rel="stylesheet" href="login_register.css">
</head>
<body>
    <div class="general">
        <div class="general-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="switch-btn" onclick="login()">Log In</button>
                <button type="button" class="switch-btn" onclick="register()">Sign Up</button>
            </div>
<div id="div_login">
            <form id="login" method="post" action="" class="input-box">
                <input type="text" id="txt_uname" name="txt_uname" class="input-field" placeholder="User ID/Email" required>
                <input type="text" id="txt_pwd" name="txt_pwd" class="input-field" placeholder="Password" required>
                <button type="submit" value="Submit" id="but_submit" name="but_submit" class="submit-btn">Log In</button>
 </div>           
 </form>
            <form id="register" class="input-box">
                <input type="text" class="input-field" placeholder="First Name" required>
                <input type="text" class="input-field" placeholder="Last Name" required>
                <input type="text" class="input-field" placeholder="Email" required>
                <input type="text" class="input-field" placeholder="Password" required>
                <button type="submit" value="Submit"  id="but_submit" class="submit-btn">Sign Up</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "100px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>
