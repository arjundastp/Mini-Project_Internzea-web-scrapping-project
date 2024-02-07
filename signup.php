
<?php

if(isset($_POST['submit'])){
include "config.php";
$username = $_POST['username'];
$pass= $_POST['password'];
$email=$_POST['email'];
$passwordc=$_POST['cpassword'];
$mobile=$_POST['mobile'];
$_SESSION["username"]=$username;

$sql = "SELECT * FROM  users WHERE username='$username'or email='$email'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if ($num > 0) {
    echo ' <script>alert("User with same username or email exist  !! :)")</script>';
   
} else if($pass==$passwordc){
        
       
        
        $insert = "INSERT INTO users(username,email,pass,mobile) VALUES('$username','$email','$pass','$mobile')";
        $auth= "INSERT INTO auth(username,password) VALUES('$username','$pass')";
        $resultb= mysqli_query($conn, $auth);
        $resulta = mysqli_query($conn, $insert);
        if ($resulta == true) {
            
            echo "<script>alert('sign up succesfully')</script>";
        }
    }else{
            echo ' <script>alert("Password Given Missmatch!! :)")</script>';}

}
 
   
    
unset($num);



    ?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internzea</title>
    <link rel="stylesheet" href="index.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 

</head>
<body>
    <header>
        <nav class="navbar fixed-top navabr-light navbar-expand-sm" style="background-color: #97c6ff">
            <div class="container">
                <a href="index.html" class="navbar-brand mb-0 h1 ">INTERNZEA</a>
                
                
                <button type="button" data-bs-target="#navbarNav" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNav"  data-bs-toggle="collapse" class="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="logout.php" class="nav-link active">
                                HOME
                            </a>
    
                        </li>
                        <li class="nav-item active">
                            <a href="contact.html" class="nav-link">
                                CONTACT
                            </a>
    
                        </li>
                        <li class="nav-item active">
                            <a href="about.html" class="nav-link">
                                ABOUT
                            </a>
    
                        </li>
    
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>
    <div class="sign-up-form">
        <div class="wrapper">
            <h1>Sign up</h1>
            <br>
            <form  method="POST" action=""  >
              <input type="text" name="username" placeholder="Enter username">
              <input type="email" name="email"  placeholder="Enter email">
              <input type="password" name="password" placeholder="Password">
              <input type="password" name="cpassword" placeholder="Confirm Password">
              <input type="text" name="mobile" placeholder="mobile Number">
            
            <br>

            <input class="btn btn-primary" type="submit"  name="submit"   value="Sign up">
            </form>
            
            <div class="not-member">
              Already have an account?  <a href="index.php">Login</a>
            </div>
          </div>
    </div>
    











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>