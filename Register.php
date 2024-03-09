<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'connection.php';


        $reg = $_POST['Registration_Number'];
        $pass = $_POST['Password'];

        if($reg==NULL){
            echo '<script>alert("Registration Number Required");</script>';
        }

    elseif($pass==NULL){
        echo '<script>alert("Password Required");</script>';
    }

    else{

        $sq="SELECT * FROM VOTERS WHERE Registration_Number='$reg' AND Password='$pass'";

        $tr=mysqli_query($all,$sq);

        if($tr){
            $count=mysqli_num_rows($tr);
            if($count>0){
                echo '<script>alert("Sorry this VOTER is Already exist");</script>';
            }

            else{
                $sql="INSERT INTO VOTERS(Registration_Number,Password)
        VALUES('$reg','$pass')";

        $true=mysqli_query($all,$sql);
               if($true){
                echo '<script>alert("VOTER Registered Successfully");</script>';
               }
            }
        }
        
    }
}
?>


<!DOCTYPE html>
   <html>
       <head>
        <title>Register Page</title>
        <link rel="stylesheet" type="text/css" href="Register.css">
       </head>

       <body>
        <form action="Register.php" method="POST">
        <center>
        <div class="container">
          <h1>Registration Form</h1>
          <div class="input">
            <label>Registration Number: </label>
            <br>
            <input type="text" name="Registration_Number" placeholder="Enter your Registration Number">
          </div>

          <div class="input">
            <label>Password: </label>
            <br>
            <input type="password" name="Password" placeholder="Enter your Password">
          </div>

          <button type="submit">Register</button>
          <br>
          Already a member?
          <a href="Login.php" style="text-decoration: none; color: green;">Login</a>
        </div>
    </center>
</form>
       </body>
   </html>