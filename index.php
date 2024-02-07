
<?php
session_start();
?>
<?php
if(isset($_POST['submit'])){
include "config.php";
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION["username"]=$username;
if(empty($username)&& empty($password)){
   echo ' <script>alert("Username and password cannot be empty !! :)")</script>';
   

}else if(empty($password)){
    echo ' <script>alert("password field cannot be empty !! :)")</script>';
    


}else if(empty($username)){
    echo ' <script>alert("Username  cannot be empty  !! :)")</script>';
    

}
$sql = "SELECT * FROM auth WHERE username='$username'and password='$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if ($num > 0) {
   header('location: dashboard.php');
} else if($num==0){

}
    
   
    
unset($num);
}


    ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <script language="javascript" type="text/javascript">
        window.history.forward();
        </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internzea</title>
    <link rel="stylesheet" href="index.css" type="text/css">
     <link rel="shortcut icon" href="data:image/png;base64,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" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 

</head>
<body>
    <header>
        <nav class="navbar fixed-top navabr-light navbar-expand-sm" style="background-color: #97c6ff">
            <div class="container">
                <a href="#" class="navbar-brand mb-0 h1 ">INTERNZEA</a>
                
                
                <button type="button" data-bs-target="#navbarNav" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNav"  data-bs-toggle="collapse" class="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="" class="nav-link active">
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
    <div class="main-body">
        <div class="section1 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <h1>INTERNZEA</h1>
            <br>
            



        </div>
        <div class="section2  col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="wrapper">
                <h1>Login</h1>
                <br>

                <form method="post" action="">
               
                  <input type="text" name="username" placeholder="Enter username">
                  
                  <input type="password" name="password" placeholder="Password">
                <closeform></closeform>
                <br>
                <input class="btn btn-primary" type="submit"  name="submit"   value="Sign in">
                
                </form>
                <div class="not-member">
                  Not a member? <a href="signup.php">Register Now</a>
                </div>
              </div>
        </div>





    </div>









    <script>
         function errormessage() {

       
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>