<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'connection.php';


        $reg = $_POST['Registration_Number'];
        $male = $_POST['Male_Cr'];
        $female = $_POST['Female_Cr'];
        $reason = $_POST['Reason'];

        if($reg==NULL){
            echo '<script>alert("REGISTRATION NUMBER REQUIRED");</script>';
        }

    elseif($male==NULL){
        echo '<script>alert("MALE CR REQUIRED");</script>';
    }

    elseif($female==NULL){
        echo '<script>alert("FEMALE CR REQUIRED");</script>';
    }

    elseif($reason==NULL){
        echo '<script>alert("REASON REQUIRED");</script>';
    }

    else{

        $sq="SELECT * FROM VOTED WHERE Registration_Number='$reg'";

        $tr=mysqli_query($all,$sq);

        if($tr){
            $count=mysqli_num_rows($tr);
            if($count>0){
                echo '<script>alert("SORRY YOU CAN NOT VOTE TWICE");</script>';
            }

            else{
                $sql="INSERT INTO VOTED(Registration_Number,Male_Cr,Female_Cr,Reason)
        VALUES('$reg','$male','$female','$reason')";

        $true=mysqli_query($all,$sql);
               if($true){
                echo '<script>alert("VOTE REGISTERED SUCCESSFULLY");</script>';
               }
            }
        }
        
    }
}
?>


<!DOCTYPE html>
     <html>
        <head>
            <title>CR'S VOTE SYSTEM</title>
            <link rel="stylesheet" type="text/css" href="home.css">
        </head>

        <body>
            <div class="menu">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About-Us</a></li>
                    <li><a href="Login.php">Logout</a></li>
                </ul>
            </div>

            <center>
            <div class="contain">
<form action="home.php" method="POST">
                <h2>VOTE FOR </h2>
            <div class="registration">
                <label for="registration">Registration Number</label>
                <br>
                <input type="text" placeholder="Enter Your Registration Number" name="Registration_Number">
            </div>
            <div class="cr">
                <label>Male Cr's</label>
                <br>
                <select name="Male_Cr">
                    <option>List of Available Male Cr's</option>
                    <option value="Joshua Fred Kabanga">Joshua Fred Kabanga</option>
                    <option value="Dickson Mussa Thomas">Dickson Mussa Thomas</option>
                    <option value="Amiri Athuman Amiri">Amiri Athuman Amiri</option>
                </select>
            </div>

            <div class="cr">
                <label>Female Cr's</label>
                <br>
                <select name="Female_Cr">
                    <option>List of Available Female Cr's</option>
                    <option value="Monica Meshack">Monica Meshack</option>
                    <option value="Mergan Lian">Mergan Lian</option>
                    <option value="Lilian Mlasu">Lilian Mlasu</option>
                </select>
            </div>

            <div class="reason">
                <label>Reason to Choose</label>
                <br>
                <select name="Reason">
                    <option>What is the reason to choose</option>
                    <option value="Clarity">Clarity</option>
                    <option value="Brightness">Brightness</option>
                    <option value="Appearance">Appearance</option>
                    <option value="Determination">Determination</option>
                </select>
            </div>
        <button type="submit">Vote</button>
        <button class="reg">Cancel</button>
    </form>
    </div>
</center>
        </body>
     </html>