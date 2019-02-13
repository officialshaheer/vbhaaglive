<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vbhaaglive";

    $conn = new mysqli($servername, $username, $password, $dbname);

    	$track_no = $_POST['track_no'];
    	$track_name = $_POST['track_name'];
    	
		$sql = "UPDATE next_track SET track_no = '$track_no' , track_name = '$track_name' ";
		if($conn->query($sql)) {
			echo "ADDING DONE!";
			} else {
			echo "ADDING ERROR!";
		}
	
?>