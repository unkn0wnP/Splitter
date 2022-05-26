<!DOCTYPE html>
<html>
    <head>
        
        <title>Sign up</title>

        <style>
            .error{
                color: red;
            }
        </style>

        <link rel="stylesheet" href="stylesheet.css" type="text/css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="registerstyle.css" type="text/css">
    
    </head>
    <body style="background-color:#cce6ff;">

        <header class="header" >
            <nav class="navbar navbar-style" style="background-color:white;">
                    <div class="container">
                        <div class="navbar-header">
    
                            <a href=""> <img src="logo.png" alt="logo" class="logo"></a>
    
                        </div>
                       
                        <ul class="nav">
    
                            <li class="nav-item"><a  class="nav-link" href="">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Features</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="">About Us</a></li>
    
                        </ul>
    
                    </div>
            </nav>
            
        </header>
        <br>
        

        <?php include "connection.php"?>
        <?php
            $nameerr=$emailerr=$unameerr=$mobileerr=$passerr=$cpasserr="";
            $name=$email=$uname=$mobile=$pass=$cpass="";
            $flag=0;

            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                if(empty($_POST["name"])){
                    $nameerr="Name is required.";
                    $name = "";
                }
                else if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"]))
                {
                    $nameerr="Name can contain only letter and whitespace.";
                    $name = "";
                }
                else
                {
                    $name = check($_POST["name"]);
                    $nameerr="";
                    $flag++;
                }
                
                if(empty($_POST["uname"])){
                    $unameerr="Username is required.";
                    $uname = "";
                }
                else if (!preg_match("/^[a-zA-Z0-9_.]{2,20}$/",$_POST["uname"]))
                {
                    $unameerr="Invalid username";
                    $uname = "";
                }
                else
                {
                    $uname = check($_POST["uname"]);
                    $query = "select * from register where UNAME='$uname'";
                    $rs = $conn->query($query);
                    $n = $rs->num_rows;
                    if($n!=0)
                    {
                        $unameerr="Username already in use.";
                        $uname="";
                    }
                    else
                    {
                        $unameerr="";
                        $flag++;
                    }   
                }

                if(empty($_POST["email"])){
                    $emailerr="Email is required.";
                    $email = "";
                }
                else{
                    $email = check($_POST["email"]);
                    $emailerr="";
                    $flag++;
                }

                if (!preg_match("/^\d{10}$/",$_POST["mo"])){
                    $mobileerr="Mobile No's length must be 10.";
                    $mobile = "";
                }
                else
                {
                    $mobile = check($_POST["mo"]);
                    $mobileerr="";
                    $flag++;
                }
                
                if(empty($_POST["pass1"])){
                    $passerr="Password is requried.";
                    $pass="";
                }
                else{
                    $passerr="";
                    $pass=check($_POST["pass1"]);
                    $flag++;
                }

                if(empty($_POST["pass2"])){
                    $cpasserr="Confirm password is requried.";
                    $cpass="";
                }
                else if($pass!=check($_POST["pass2"]))
                {
                    $cpasserr="Confirm password must be same as password.";
                    $cpass="";
                }
                else{
                    $cpasserr="";
                    $cpass=check($_POST["pass1"]);
                    $flag++;
                }

                if($flag==6)
                {
                    $query="INSERT INTO register values('$uname','$name','$email','$mobile','$pass')";
                    $friend = $uname."Friend";
                    $query1="CREATE TABLE $friend (`FNAME` VARCHAR(20) NOT NULL , PRIMARY KEY (`FNAME`(20)))";
                    $history = $uname."History";
                    $query2="CREATE TABLE $history (`DESCRIPTION` VARCHAR(200) NOT NULL ,`TIME` DATE NOT NULL)";
                    $rec = $uname."Record";
                    $query3="CREATE TABLE $rec (`FNAME` VARCHAR(20) NOT NULL, `AMOUNT` INT(10) NOT NULL, `DATE` DATE NOT NULL, `DISCRIPTION` VARCHAR(20) NOT NULL)";

                    if($conn->query($query) && $conn->query($query1) && $conn->query($query2) && $conn->query($query3)){
                        echo "<script>";
                        echo 'alert("Registered Successfully...");';
                        echo "</script>";
                        header("Location: login.php");
                    }
                }

            }
            
            function check($n)
            {
                $n = trim($n);
                $n = stripslashes($n);
                $n = htmlspecialchars($n);
                return $n;
            }
        ?>


        <div class="container p-5">

            <div class="container p-5" style="background-color:white;">

                <h2>Register</h2>
                <br><br>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">

                    <label for="name">Name</label><span class="error">* <?php echo $nameerr;?></span><br>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $name;?>">
                    <br>
                    
                    <label for="name">Username</label><span class="error">* <?php echo $unameerr;?></span><br>
                    <input type="text" name="uname" id="uname" class="form-control" value="<?php echo $uname;?>">
                    <br>

                    <label for="mail">E-mail</label><span class="error">* <?php echo $emailerr;?></span><br>
                    <input type="email" name="email" id="mail" class="form-control value="<?php echo $email;?>"">
                    <br>

                    <label for="mo">Mobile</label><span class="error">* <?php echo $mobileerr;?></span><br>
                    <input type="text" name="mo" id="mo" class="form-control" value="<?php echo $mobile;?>">
                    <br>
                    
                    <label for="pass1">Create Password</label><span class="error">* <?php echo $passerr;?></span>
                    <input type="password" name="pass1" id="pass1" class="form-control" value="<?php echo $pass;?>">
                    <br>

                    <label for="pass2">Confirm Password</label><span class="error">* <?php echo $cpasserr;?></span>
                    <input type="password" name="pass2" id="pass2" class="form-control" value="<?php echo $cpass;?>">

                    
                    <br><br>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Sign Up</button>
                    </div>
                    <br><br>
                    
                    <span>Already have an account? </span>
                    <a href="login.php" class="link-primary">sign in</a>

                </form>

            </div>


        </div>
    </body>
  </html>
