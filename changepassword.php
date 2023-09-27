<?php
include_once "connection/config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger" id="msg"></div>
                    <div class="form-box">
                        <?php
                        if(isset($_POST['btn-submit'])){
                         if(isset($_GET['token'])){
                             $token=$_GET['token'];
                            $pass=mysqli_real_escape_string($connect,md5($_POST['pass']));
                            $cpass=mysqli_real_escape_string($connect,md5($_POST['cpass']));
                        
                            if($pass==$cpass){
                                $q="UPDATE register SET password='{$pass}' WHERE token='{$token}'";
                                $res=mysqli_query($connect,$q);
                                if($res){
                                    $_SESSION['msg']="Password Updated Successfully Now Login";
                                    header("location: https://yellowsols.com/saad/rf/login.php");
                                }
                                else{
                                    $_SESSION['p_update']="Password Not Updated Successfully";
                                     header("location: https://yellowsols.com/saad/rf/changepassword.php");
                                }
                            }else{
                                
                                echo "<div class='alert alert danger'>Password Not Matched</div>";
                            }
                        }
                        else{
                            echo "No token Found";
                        }
                        
                        }
                        ?>

                        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                            <p><?php echo $_SESSION['p_update']?></p>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">New Password:</label>
                                <input type="password" class="form-control" id="pass" placeholder="New password" name="pass">
                                <p id="pmsg"></p>
                            </div>
                            <div class="mb-3">
                                <label for="cpass" class="form-label">Confirm Password:</label>
                                <input type="password" class="form-control" id="cpass" placeholder="Confirm password" name="cpass">
                                <p id="cerror"></p>
                            </div>
                            <button type="submit" name="btn-submit" class="btn btn-primary">Change Password</button>
                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Javascript Files -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>