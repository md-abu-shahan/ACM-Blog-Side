<?php
    include("includes/header.php");
?>

    <div id="content"> <!-- #content Begin -->
        <div class="container"> <!-- container Begin -->
            <div class="col-md-12"> <!-- col-md-12 Begin -->

                <ul class="breadcrumb"> <!-- breadcrumb Begin -->
                    <li>

                        <a href="index.php">Home</a>

                    </li>
                    <li>
                        Register
                    </li>
                </ul> <!-- breadcrumb finish -->

            </div> <!-- col-md-12 finish -->

            <div class="col-md-12"> <!-- col-md-9 Begin -->

                <div class="box"> <!-- box Begin -->

                    <div class="box-header"> <!-- box-header Begin -->

                        <center> <!-- center Begin -->

                            <h2> Register a new account </h2>

                        </center> <!-- center finish -->

                        <form action="register.php" method="post" enctype="multipart/form-data"> <!-- form Begin -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Your Name</label>

                                <input type="text" class="form-control" name="name" required>

                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Your Email</label>

                                <input type="text" class="form-control" name="email" required>

                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Your Password</label>

                                <input type="password" class="form-control" name="pass" required>

                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Your Institute</label>

                                <input type="text" class="form-control" name="institution" required>

                            </div> <!-- form-group finish -->

                            <div class="text-center"> <!-- text-center Begin -->

                                <button type="submit" name="register" class="btn btn-primary">

                                    <i class="fa fa-user-md"></i> Register

                                </button>

                            </div> <!-- text-center finish -->

                        </form> <!-- form finish -->

                    </div> <!-- box-header finish -->

                </div> <!-- box finish -->

            </div> <!-- col-md-9 finish -->

        </div> <!-- container finish -->
    </div> <!-- #content finish -->

    <?php 

    include("includes/footer.php")

    ?>

    <script src = "js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

</body>
</html>  

<?php
    if(isset($_POST['register'])){
        
        $name = $_POST['name'];
        
        $email = $_POST['email'];
        
        $pass = $_POST['pass'];
        
        $institution = $_POST['institution'];
        
        $sel = "select * from registration where email = '$email'";
        
        $run = mysqli_query($con,$sel);
        
        $check = mysqli_num_rows($run);
        
        if($check>0){
        
            /// If register have items in cart ///
            
            $_SESSION['email']=$email;
            
            echo "<script>alert('Your email already register')</script>";
            
            echo "<script>window.open('checkout.php','_self')</script>";
        
        }else{
            $insert = "insert into registration (name,email,pass,institution) values ('$name','$email','$pass','$institution')";
        
            $run_customer = mysqli_query($con,$insert);
            echo "<script>alert('Your Registration Successfully done')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
        }
    
    }

?>