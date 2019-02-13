<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vbhaaglive";

	

    $conn = new mysqli($servername, $username, $password, $dbname);
	
	$sql = "select * from setlist";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
 	
 	foreach ($result as $value) {
 	echo "<center><br><table width='90%' style='border-spacing: 1px;border-bottom: 2px solid #ddd;'><tr><td  align='center'>";
            echo $value['track_no'];
            echo "</td><td  align='center'>";
            echo $value['track_name'];
            echo "</td>";
            echo "<td align='right'><input type='button' class='selBtn' value='SELECT' data-track_no='".$value['track_no']."' data-track_name='".$value['track_name']."'></td></tr></table></center>";	
 	}
?> 	