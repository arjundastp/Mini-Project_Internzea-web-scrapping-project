<?php
if(isset($_POST['submit'])){
include "config.php";
$username = $_POST['username'];
$pass= $_POST['password'];
$email=$_POST['email'];
$passwordc=$_POST['cpassword'];
$mobile=$_POST['mobile'];
$_SESSION["username"]=$username;
if(empty($username)&& empty($password)){
   echo ' <script>alert("Username and password cannot be empty !! :)")</script>';
   

}else if(empty($password)){
    echo ' <script>alert("password field cannot be empty !! :)")</script>';
    


}else if(empty($username)|| empty($mobile)||empty($password)){
    echo ' <script>alert("Signup Fields cannot be empty  !! :)")</script>';
    

}
$sql = "SELECT * FROM  user WHERE username='$username'or email='$email'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if ($num > 0) {
    echo ' <script>alert("User with same username or email exist  !! :)")</script>';
   
} else if($password==$passwordc){
    $insert="INSERT INTO user(userid,username,email,password,mobile) VALUES('$','$username',
    '$email','$password','$passwordc','$mobile')";
}else{
    echo ' <script>alert("Password Given Missmatch!! :)")</script>';

}
    
   
    
unset($num);
}


    ?>
