<?php
    $conn = mysqli_connect("localhost","root","","tourhub");

    if(!$conn){
        die("Sorry we failed to connect. Please check the connection".mysqli_connect_error()); 
    }
?>