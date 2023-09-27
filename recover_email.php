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
                    <div class="alert alert-success" id="msg"></div>
                    <div class="form-box">
                        <?php
                        if(isset($_POST['btn-submit'])){
                         
                            $email=mysqli_real_escape_string($connect,$_POST['email']);
                      
                          
                            $q="SELECT * FROM register WHERE email='{$email}'";
                            $res=mysqli_query($connect,$q) or die("Username Select Query Failed");
                            if(mysqli_num_rows($res)>0){
                                    $row=mysqli_fetch_assoc($res);
                                    $name=$row['name'];
                                    $token=$row['token'];
                                    $subject = "Password Reset";
                                        $message = "Hi" .$name." Click Here to Reset Your Password  
                                        https://yellowsols.com/saad/rf/changepassword.php?token={$token}";
                                        $headers = "From: muhammadsaad5758@gmail.com";
            
                                        if (mail($email, $subject, $message, $headers)) {
                                            $_SESSION['msg']="Check Your email  {$email}  To Rest Your Password";
                                            header("Location: https://yellowsols.com/saad/rf/login.php");
                                        } else {
                                            echo "Email delivery failed.";
                                        }
                               
                            }else{
                               
                                        echo "<div class='alert alert-danger'>Email Not Found</div>";
                                        
                                        
                                    } 
                                }
                        
                        
                        
                        ?>

                        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                     
                 
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Recover Your Account:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                <p id="emsg"></p>
                            </div>
                        
                        
                            <button type="submit" name="btn-submit" class="btn btn-primary">Send Mail</button>
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