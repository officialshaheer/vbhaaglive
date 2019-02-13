<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vbhaaglive";

    $conn = new mysqli($servername, $username, $password, $dbname);

    	$comment = $_POST['message'];
    	    	
		$sql = "UPDATE next_track SET comment = '$comment' ";
		if($conn->query($sql)) {
			echo "ADDING DONE!";
			} else {
			echo "ADDING ERROR!";
		}
	
?>