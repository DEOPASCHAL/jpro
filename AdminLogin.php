<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'connection.php';


        $reg = $_POST['Username'];
        $pass = $_POST['Password'];

        if($reg==NULL){
            echo '<script>alert("Username Required");</script>';
        }

    elseif($pass==NULL){
        echo '<script>alert("Password Required");</script>';
    }

    else{

        $sq="SELECT * FROM `Admin` WHERE Username='$reg' AND Password='$pass'";

        $tr=mysqli_query($all,$sq);

        if($tr){
            $count=mysqli_num_rows($tr);
            if($count>0){
                echo '<script>window.location.href="admin.php"</script>';
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
        <form action="AdminLogin.php" method="POST">
        <center>
        <div class="container">
          <h1>Login Here</h1>
          <div class="input">
            <label>Username: </label>
            <br>
            <input type="text" name="Username" placeholder="Enter your Username">
          </div>

          <div class="input">
            <label>Password: </label>
            <br>
            <input type="password" name="Password" placeholder="Enter your Password">
          </div>

          <button type="submit">Login</button>
          <button class="reg">Cancel</button>
        </div>
    </center>
  </form>
       </body>
   </html>