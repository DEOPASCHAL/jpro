<?php
   include 'connection.php';
?>
<!DOCTYPE html>
     <html>
        <head>
            <title>CR'S VOTE SYSTEM</title>
            <link rel="stylesheet" type="text/css" href="adm.css">
        </head>

        <body>
            <div class="menu">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About-Us</a></li>
                    <li><a href="#" onclick="window.print()">Print</a></li>
                    <li><a href="AdminLogin.php">Logout</a></li>
                </ul>
            </div>

            <div class="interface">
				<div class="val-box">
					<h3 class="list">Total Votes</h3>
                    <?php
					$select="SELECT ID FROM voted ORDER BY ID";
                    $query=mysqli_query($all,$select);
                    $count=mysqli_num_rows($query);
                    echo '<span style="text-align: center; font-size: 30px; color: white;"><br> '.$count.'</span>';
					?>
			</div>
			
			
            <div class="val-box">
                <h3 class="list">Total Voters</h3>
                <span>
                <?php
					$select="SELECT ID FROM voted ORDER BY ID";
                    $query=mysqli_query($all,$select);
                    $count=mysqli_num_rows($query);
                    echo '<span style="text-align: center; font-size: 30px; color: white;"><br> '.$count.'</span>';
					?>
                </span>
        </div>
<br>
			<div class="val-box">
					<h3 class="list">Joshua Fred Kabanga</h3>
					<span>
                    <?php
					$select="SELECT Male_Cr FROM voted WHERE Male_Cr='Joshua Fred Kabanga'";
                    $query=mysqli_query($all,$select);
                    $count=mysqli_num_rows($query);
                    echo '<span style="text-align: center; font-size: 30px; color: white;"><br> '.$count.'</span>';
					?>
                    </span>
			</div>

            <div class="val-box">
					<h3 class="list">Dickson Mussa Thomas</h3>
					<span>
                    <?php
					$select="SELECT Male_Cr FROM voted WHERE Male_Cr='Dickson Mussa Thomas'";
                    $query=mysqli_query($all,$select);
                    $count=mysqli_num_rows($query);
                    echo '<span style="text-align: center; font-size: 30px; color: white;"><br> '.$count.'</span>';
					?>
                    </span>
			</div>
            <br>

            <div class="val-box">
					<h3 class="list">Amiri Athuman Amiri</h3>
					<span>
                    <?php
					$select="SELECT Male_Cr FROM voted WHERE Male_Cr='Amiri Athuman Amiri'";
                    $query=mysqli_query($all,$select);
                    $count=mysqli_num_rows($query);
                    echo '<span style="text-align: center; font-size: 30px; color: white;"><br> '.$count.'</span>';
					?>
                    </span>
			</div>

            <div class="val-box">
					<h3 class="list">Monica Meshack</h3>
					<span>
                    <?php
					$select="SELECT Female_Cr FROM voted WHERE Female_Cr='Monica Meshack'";
                    $query=mysqli_query($all,$select);
                    $count=mysqli_num_rows($query);
                    echo '<span style="text-align: center; font-size: 30px; color: white;"><br> '.$count.'</span>';
					?>
                    </span>
			</div>
<br>
            <div class="val-box">
            <h3 class="list">Mergan Lian</h3>
            <span>
            <?php
					$select="SELECT Female_Cr FROM voted WHERE Female_Cr='Mergan Lian'";
                    $query=mysqli_query($all,$select);
                    $count=mysqli_num_rows($query);
                    echo '<span style="text-align: center; font-size: 30px; color: white;"><br> '.$count.'</span>';
					?>
            </span>
    </div>

    <div class="val-box">
            <h3 class="list">Lilian Mlasu</h3>
            <span>
            <?php
					$select="SELECT Female_Cr FROM voted WHERE Female_Cr='Lilian Mlasu'";
                    $query=mysqli_query($all,$select);
                    $count=mysqli_num_rows($query);
                    echo '<span style="text-align: center; font-size: 30px; color: white;"><br> '.$count.'</span>';
					?>
            </span>
    </div>
        </body>
     </html>
        </body>
     </html>