<?php

// error_reporting(0); used to hide the error reason

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "employee";

$conn = mysqli_connect($servername ,$username,$password,$dbname );

if($conn){
    echo " connection OK";

}
else{
    echo "connection failed!".mysqli_connect_error();
}

?>
