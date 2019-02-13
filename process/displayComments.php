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
 	echo "<center><table width='90%' style='border-spacing: 1px;border-bottom: 2px solid #ddd;'><tr><td align='left'>Comments :</td>";
 			echo "<th align='left'>".$value['comment']."</th></tr><tr><td align='left'></td></tr>";
            echo "<tr><td align='left' style='color:black;opacity:0.8;font-size:14px;'>Song Details :</td>";
            echo "<td align='left' style='color:black;opacity:0.8;font-size:14px;'>".$value['track_no'].". ".$value['track_name']."</td></tr></table></center>";
            
            }
?> 	