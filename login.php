<!DOCTYPE html>
<html>
    <head>
        
        <title>Log in</title>

        <style>
            .error{
                color: red;
            }
        </style>

        <link rel="stylesheet" href="stylesheet.css" type="text/css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="loginstyle.css" type="text/css">
    
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
      

    <?php
      session_start(); 
      include "connection.php"
    ?>
    <?php
            $passerr=$unameerr="";
            $pass=$uname="";
            $flag=0;

            if(isset($_POST['submit1']))
            {
              if($_SERVER["REQUEST_METHOD"]=="POST")
            
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
                    if($n==0)
                    {
                        $unameerr="Username doesn't exists.";
                        $uname="";
                    }
                    else
                    {
                        $unameerr="";
                        $flag++;
                    }   
                }

                if(empty($_POST["pass1"])){
                    $passerr="Password is requried.";
                    $pass="";
                }
                else{
                    $passerr="";
                    $pass=check($_POST["pass1"]);
                    $query = "SELECT * FROM register WHERE UNAME='$uname'";
                    $n = $conn->query($query);
                    $rs = $n->fetch_assoc();
                    if($pass==$rs['PASSWORD'])
                    {
                      $flag++;
                    }
                    else{
                      $passerr="Wrong Password.";
                      $pass="";
                    }
                    
                }

                if($flag==2)
                {
                  $_SESSION['user'] = $uname;
                  header('Location: user.php');
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

    <br>
      <div class="container p-5">

        <div class="row">

          <div class="col" style="background-color:white;">

            <div class="container p-5">

              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
              <h2>Login</h2><br><br>
              <label for="name">Username</label><span class="error">* <?php echo $unameerr;?></span><br>
              <input type="text" name="uname" id="uname" class="form-control" value="<?php echo $uname;?>">
              <br>

              <label for="pass1">Password</label><span class="error">* <?php echo $passerr;?></span>
              <input type="password" name="pass1" id="pass1" class="form-control" value="<?php echo $pass;?>">
              <br>

              <br><br>
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" name="submit1">Sign In</button>
              </div>
              <br><br>
            
              <span>Don't have an account? </span>
              <a href="register.php" class="link-primary">sign up</a>
             

            </form>
            </div>

          </div>

          <div class="col g-0">
            <div class="container">
              <img src="i2.png"  alt="image" style="background-color:white;" width="500px" height="500px">
            </div>
            
          </div>

        </div>

      </div>

    </body>
  </html>
