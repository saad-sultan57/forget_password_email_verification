<?php
include_once "connection/config.php";
session_start();
if(isset($_GET['token'])){
$token=$_GET['token'];
$q="UPDATE register set status='active' WHERE token='{$token}'";
$res=mysqli_query($connect,$q);
if($res){
    if(isset($_SESSION['msg'])){
            $_SESSION['msg']="Account Updated Successfully";
            header("Location: https://yellowsols.com/saad/rf/login.php");
        }else{
            $_SESSION['msg']="";
            header("Location: https://yellowsols.com/saad/rf/login.php");
        }
}else{
     $_SESSION['msg']="Account not activated";
            header("Location: https://yellowsols.com/saad/rf/register.php");
}
}

?>