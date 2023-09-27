<?php
include_once "connection/config.php";
session_start();
if(isset($_SESSION['username'])){
    header("Location: https://yellowsols.com/saad/rf/home.php");
}
?>

<?php
include_once "connection/config.php"
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
                       <div class="alert alert-primary">
            <?php 
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
            }else{
                echo  $_SESSION['msg']="You are Loged Out";
            }
            
            ?>
        </div>
                    <div class="alert alert-danger" id="msg"></div>
                    <div class="form-box">
                      
                    <?php
        if (isset($_POST['btn-submit'])) {
            if (empty($_POST['email']) || empty($_POST['pass'])) {
                echo "<div class='alert alert-danger'>Plz Fill All fields First </div>";
            } else {
                
                $email = mysqli_real_escape_string($connect, $_POST['email']);
                $pass = mysqli_real_escape_string($connect,md5($_POST['pass']));
                $q = "SELECT * from register where email='{$email}' and status='active'";
               
                $res = mysqli_query($connect, $q) or die("Email checking query Failed");
                if (mysqli_num_rows($res) > 0) {
                        $row=mysqli_fetch_assoc($res);
                      
                        $_SESSION['username']=$row['name'];
                        if($row['password']==$pass){
                            header("Location: https://yellowsols.com/saad/rf/home.php");
                        }else{
                            echo "<div class='alert alert-danger'>Password Not Correct</div>";
                        }

                } else {
                    echo "<div class='alert alert-danger'>Invalid Email</div>";
                }
            }
        }

        ?>
                        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                      
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
                            <div class="mb-3 d" style="display:flex;justify-content:space-between;">
                            <a href='recover_email.php'>Forget Password</a>
                             <a href='index.php'>Create Account</a>
                            </div>
                            <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
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