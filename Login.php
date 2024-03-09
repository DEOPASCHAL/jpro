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
                echo '<script>window.location.href="home.php"</script>';
            }

            else{
                echo '<script>alert("Invalid Credentials");</script>';
            }
        }
    }
}
?>

<!DOCTYPE html>
   <html>
       <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="Login.css">
       </head>

       <body>
        <form action="Login.php" method="POST">
        <center>
        <div class="container">
          <h1>Login Here</h1>
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

          <button type="submit">Login</button>
          <br>
          Not yet a member?
          <a href="Register.php" style="text-decoration: none; color: blue;">Register</a>
        </div>
    </center>
  </form>
       </body>
   </html>