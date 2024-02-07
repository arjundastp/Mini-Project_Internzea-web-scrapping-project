<?php
include('config.php');
$query = "select * from summer   where name IS NOT NULL";
$result = mysqli_query($conn, $query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
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
                            <a href="index.html" class="nav-link">
                                </h2>LOG OUT
                            </a>
                            
                        </li>
    
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>
    <div class="main-content">
        <div class="search-controls">
            <a  href="search.php"   ><button class="btn btn-primary">Search Internships with Name</button></a>

        </div>

        <div class="card-controls">
        <div class="container">
            <?php
            while ($row = @mysqli_fetch_assoc($result)){

            ?>
            <div class="card col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card-details text-danger text-wrap">
                      <p class="pt-2 text-title"><?php echo $row['name']?></p>
                      <p style=""  class="text-danger  text-body "><b>scraped on: <?php echo $row['datetime']?> </p></b>
                </div>
                <a  href="https://www.coursera.org/courses?query=computer"   ><button class="card-button">Visit Website</button></a>
            </div>
            <?php
            }
            ?>

        </div>
        </div>

       
       










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>


<?php
        


        
        
      