<?php
$host="localhost";
$user="u422740238_rf";
$password='@Malik123';
$database="u422740238_rf";
$connect=mysqli_connect($host,$user,$password,$database) or die("Connection Failed");
if($connect){
    echo"";
}else{
    echo "Error in connection";
}

?>