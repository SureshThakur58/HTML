<?php
$servername="localhost";
$username="root";
$password="";
$dbname="my_crud";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connectiopn failed");
}

?>