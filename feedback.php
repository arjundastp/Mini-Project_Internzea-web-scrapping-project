
<?php

if(isset($_POST['submit'])){
include "config.php";
$username = $_POST['username'];
$name = $_POST['name'];

$data = $_POST['data'];

$_SESSION["username"]=$username;

$sql = "SELECT * FROM  internships WHERE username='$username'and name='$name'";
$sql2= "SELECT * FROM  users WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$resultb = mysqli_query($conn, $sql2);
$num = mysqli_num_rows($result);
$num_u = mysqli_num_rows($resultb);

if ( $num_u==0 or $num>0) {
    echo ' <script>alert("Feedback with same data  or  user name doesnt exist exist  !! :)")</script>';
   
} else {
        
       
        
        $insert = "INSERT INTO feedback(username,name,data) VALUES('$username','$name','$data')";
        
      
        $resulta = mysqli_query($conn, $insert);
        if ($resulta == true) {
            
            echo "<script>alert('Added Succesfuly')</script>";
        }
    }
 
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
                            <a href="dashboard.php" class="nav-link active">
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
            <h3>Feed Back</h3>
            <p style="padding:1rem;" >Submit Your Feedback</p>
            <br>
            <form  method="POST" action=""  >
              <input type="text" name="username" placeholder="Enter username">
            
              <input type="text" name="name" placeholder=" Name">
              
              <input style="height:5rem" type="text" name="data" placeholder="Enter Feedback or Query">
            
            <br>

            <input class="btn btn-primary" type="submit"  name="submit"   value="Submit">
            </form>
            
            <div class="not-member">
              Home <a href="dashboard.php">Home</a>
            </div>
          </div>
    </div>
    











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>