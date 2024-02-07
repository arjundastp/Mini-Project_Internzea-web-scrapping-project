<?php
include "config.php";
$sql = "SELECT * FROM internshala  ";
$sql2="SELECT * FROM summer  ";
$sql3="SELECT * FROM google  ";
$sql4="SELECT * FROM internships ";


$result = mysqli_query($conn, $sql);
$result4 = mysqli_query($conn, $sql4);
$num_user = mysqli_num_rows($result4);

$resultb = mysqli_query($conn, $sql2);
$resultc = mysqli_query($conn, $sql3);
$num = mysqli_num_rows($result);
$num_b = mysqli_num_rows($resultc);
$num_c=mysqli_num_rows($resultb);
if(isset($_POST['submit']))

{   if($num>0){ 

     $sql = "TRUNCATE internshala";
     $sql1 = "TRUNCATE summer";
     $sql5 = "TRUNCATE google";
    $result = mysqli_query($conn, $sql);
    $resulta = mysqli_query($conn, $sql1);
    $resultd= mysqli_query($conn, $sql5);
    
    if($result && $resulta && $resultd){
        echo'<script>alert("Deleted Succesfuly  !! :)")</script>';
        $num=0;
        $num_c=0;
        $num_b=0;
    }}else{
        echo'<script>alert("Nothing to Delete)")</script>';
    }
}


?>







<!DOCTYPE html>
<html lang="en">
<head>
<script language="javascript" type="text/javascript">
        window.history.forward();
        window.history.backward();
        </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internzea</title>
    <link rel="stylesheet" href="dashboard.css" type="text/css">
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
                        <li class="log-out nav-item active">
                            <a href="logout.php" class="nav-link">
                                </h2>LOG OUT
                            </a>
                            
                        </li>
                        <li class="nav-item active">
                            <a href="#" class="nav-link">
                                My profile   <span class="badge bg-danger">New</span>
                            </a>
    
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>
    <div class="main-content">
        <div class="search-controls">
        <a class="p-1"
        href="http://127.0.0.1:5001/"   ><button style=""  class=" p-2  btn btn-success">Go to Web scraping GUI
        </button></a>


            <form class="p-1" method="POST" action="">
            <input class="p-2 btn btn-success" type="submit"  name="submit"   value="Delete All scrapped Data">
            
            </form>
        </div>
        <div class="card-controls">
        <div class="container">
            <div class="card col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card-details">
                      <p class="text-title">Internshala</p>
                      <p class="text-body">Internships from Internshala websites</p>
                </div>
                <a  href="internshala.php"   ><button class="card-button">More info
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    

    <?php echo $num?> available
    <span class="visually-hidden">unread messages</span>
  </span>
                </button></a>
            </div>

            <div class="card col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card-details">
                      <p class="text-title">Coursera Website Internships</p>
                      <p class="text-body">Internships from silcon valley Institute</p>
                </div>
                <a  href="coursera.php"   ><button  class="card-button">More info

                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    

    <?php echo $num_c?> available
    <span class="visually-hidden">unread messages</span>
  </span>
                </button></a>
            </div>
            <div class="card col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card-details">
                      <p class="text-title">Internships From Google Careeers</p>
                      
                      <p class="text-body">Internship top oppurtunities from Google career
                        <span class="badge bg-danger">New</span></p>
                </div>
                <a  href="google.php"   ><button  class="card-button">More info

                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    

    <?php echo $num_b?> available
    <span class="visually-hidden">unread messages</span>
  </span>
                </button></a>
                
            </div>
            <div class="card col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card-details">
                      <p class="text-title">Feedback or Query</p>
                      <p class="text-body">Submit Query or feedback using this option </p>
                </div>
                <a  href="feedback.php"   ><button  class="card-button">Submit Now

                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    

    <?php echo 'New Feature'?> 
    <span class="visually-hidden">unread messages</span>
  </span>
                </button></a>
                
            </div>
            <div class="card col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card-details">
                      <p class="text-title">View User Added Internships</p>
                      <p class="text-body">Use this opton to view user added internships</p>
                </div>
                <a  href="userinternships.php"   ><button  class="card-button">View 

                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    

    <?php echo $num_user ?> 
    <span class="visually-hidden">unread messages</span>
  </span>
                </button></a>
            </div>
            <div class="card col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card-details">
                      <p class="text-title">Add Internship</p>
                      <p class="text-body">User can Add Internships</p>
                </div>
                <a  href="addinternship.php"   ><button  class="card-button">Add Now

                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    

    <?php echo 'New Feature'?> 
    <span class="visually-hidden">unread messages</span>
  </span>
                </button></a>
            </div>
            
        </div>

        </div>


    </div>
    











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>


