<div class="box">
   
    <div class="box-header">
        
        <center>
            <h1> Login </h1>
            <p class="lead"> Already have an account ? </p>
            
        </center>
        
    </div>
    
    <form method="post" action="checkout.php">
        
        <div class="form-group">
           
            <lavel> Email </lavel>
            
            <input name="email" type="text" class="form-control" required>
            
        </div>
        
        <div class="form-group">
           
            <lavel> Password </lavel>
            
            <input name="pass" type="password" class="form-control" required>
            
        </div>
        
        
        <div class="text-center">
            
            <button name="login" value="Login" class="btn btn-primary">
                
                <i class="fa fa-sign-in"></i> Login
                
            </button>
            
        </div>
        
    </form>
    
    <center>
        
        <a href="register.php">
            
            <h4> Create a new account </h4>
            
        </a>
        
    </center>
    
</div>
<?php

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $select = "select * from registration where email = '$email' AND pass = '$pass'";
    
    $run = mysqli_query($con,$select);
    
    $check = mysqli_num_rows($run);
   
    if($check==0){
        
        echo "<script>alert('Your Email or password is wrong') </script>";
        exit();
    }
    else
    {
        $_SESSION['email'] = $email;
        echo "<script>alert('You are logged in ') </script>";
        echo "<script>window.open('add_topic.php','_self') </script>";
    }
}

?>