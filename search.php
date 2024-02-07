<?php
include('config.php');
if(isset($_POST['sub'])){
    $search=$_POST['search'];
    $query = "select * from internshala where name LIKE '%$search%'   ";
    $result = mysqli_query($conn, $query);
}

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
        
        <div class="search-controls  ">
            <form class="form"  method="post"  >


              
                <input class="input" name="search" placeholder="Type your text" required="" type="text">
                <button class="reset" type="reset">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                </div>
                <div style="margin-top: 1rem;" class="text-center "  >
                <input  style="margin: left 5rem; " class="btn btn-primary" type="submit"  name="sub"   value="Search">
            </div>
            
            </form>

        
        <div class="card-controls">
        <div class="container">
        <?php
            if(isset($_POST['sub'])){
            $row = @mysqli_fetch_assoc($result)

            ?>
            <div class="card col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card-details text-danger">
                      <p class="text-title"><?php echo $row['name']?></p>
                      <p style=""  class="text-danger  text-body"><b>scraped on: <?php echo $row['datetime']?> </p></b>
                </div>
                <a  href="https://trainings.internshala.com/?utm_source=Google-Search&utm_campaign=CT-Search-Generic-Internship-Sep22&utm_adgroup=Students&utm_locationinterest=&utm_searchkeyword=internship%20for%20btech%20students&utm_keywordid=kwd-305177163109&gclid=Cj0KCQjw7uSkBhDGARIsAMCZNJtNR8RfDYLCjc1oSYgTv_NWpACCawGX06gAhZSh1eo5i3zJ-caUWfgaAnGbEALw_wcB"   ><button class="card-button">Visit Website</button></a>
            </div>
            <?php
            }
            ?>

        
            
            
            
        </div>

        </div>


    </div>
    











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>