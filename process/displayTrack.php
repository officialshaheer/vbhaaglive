<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vbhaaglive";

	

    $conn = new mysqli($servername, $username, $password, $dbname);
	
	$sql = "select * from next_track";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
 	
 	foreach ($result as $value) {
 	echo "<center><table width='90%' style='border-spacing: 1px;border-bottom: 2px solid #ddd;'><tr><td align='left'>";
            echo "<h4>".$value['track_no']."</h4>";
            echo "</td><td align='center'>";
            echo "<h4>".$value['track_name']."</h4>";
            echo "</td></table></center>";
            }
?> 	