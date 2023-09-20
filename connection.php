<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "responsiveform";
 
$conn = mysqli_connect("localhost","root","","responsiveform");

if($conn)
{
    echo "conection succesfull";
}
else{
    echo"faild connection";
}  


?>
