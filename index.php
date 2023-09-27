<?php
include_once "connection/config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
                            $username=mysqli_real_escape_string($connect,$_POST['username']);
                            $number=mysqli_real_escape_string($connect,$_POST['number']);
                            $email=mysqli_real_escape_string($connect,$_POST['email']);
                            $pass=mysqli_real_escape_string($connect,md5($_POST['pass']));
                            $cpass=mysqli_real_escape_string($connect,md5($_POST['cpass']));
                            $token=bin2hex(random_bytes(15));
                            $q="SELECT name FROM register WHERE name='{$username}'";
                            $res=mysqli_query($connect,$q) or die("Username Select Query Failed");
                            if(mysqli_num_rows($res)>0){
                                echo "<div class='alert alert-danger'>Username Already Exist try another one</div>";
                                echo "<script>
                                            setTimeout(function(){
                                                window.location.href='https://yellowsols.com/saad/rf/';
                                            },3000)
            
                                    </script>";
                            }else{
                                if($pass==$cpass){
                                    $q1 = "INSERT INTO register(name,email,number,password,token,status)VALUES('{$username}','{$email}','{$number}','{$pass}','{$token}','inactive')";
                                    $res1 = mysqli_query($connect, $q1) or die("Insert Registration Data Query Failed");
                                    if ($res1) {
                            
                                        $subject = "Email Activation";
                                        $message = "Hi".$name."Click Here to Activate Your acount  
                                        https://yellowsols.com/saad/rf/activate.php?token={$token}";
                                        $headers = "From: muhammadsaad5758@gmail.com";
            
                                        if (mail($email, $subject, $message, $headers)) {
                                            $_SESSION['msg']="Check Your email To Activete your account {$email}";
                                            header("Location: https://yellowsols.com/saad/rf/login.php");
                                        } else {
                                            echo "Email delivery failed.";
                                        }
                                    } else {
                                        echo "<div class='alert alert-danger'>Data Not Inserted</div>";
                                        echo "<script>
                                            setTimeout(function(){
                                                window.location.href='https://yellowsols.com/saad/rf/index.php';
                                            },3000)
            
                                    </script>";
                                    }
                                }
                            }
                        }
                        
                        
                        ?>

                        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                        <div class="mb-3 mt-3">
                                <label for="username" class="form-label">User Name:</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
                                <p id="umsg"></p>
                            </div>
                        <div class="mb-3 mt-3">
                                <label for="number" class="form-label">Number:</label>
                                <input type="number" class="form-control" id="number" placeholder="Enter Number" name="number">
                                <p id="nmsg"></p>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                <p id="emsg"></p>
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
                                <p id="pmsg"></p>
                            </div>
                            <div class="mb-3">
                                <label for="cpass" class="form-label">Confirm Password:</label>
                                <input type="password" class="form-control" id="cpass" placeholder="Confirm password" name="cpass">
                                <p id="cerror"></p>
                            </div>
                            <div style="display:flex;justify-content:space-between;">
                            <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
                            <a href="login.php">Already Have an account</a>
                            </div>
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