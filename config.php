<?php
$conn =  mysqli_connect("localhost", "root", "", "miniproject");
if(!$conn)
{
    echo '<script>alert("database error")</script>';
} 

?>