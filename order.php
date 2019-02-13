<!DOCTYPE html>
<html>
<head>
	<title>VBHAAG Live</title>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">
	body {
		background-image: url(BG.jpg);
		font-family: "Comic Sans MS", cursive, sans-serif;
		margin: 0;
	}
	h3{
		color: black;
	}
	.header {
		position: absolute;
		width: 100%;
		height: 10%;
		background-color: #040201;
		color: yellow;
		}
	.container {
		position: absolute;
		width: 50%;
		height: 90%;
		background-color: #fff;
		top:10%;
		left: 15%;
		box-shadow: 0px 0px 100px black;
		overflow: scroll;
		}
	.naveencontainer {
		position: absolute;
		width: 30%;
		height: 90%;
		background-color: #fff;
		top:10%;
		left: 70%;
		box-shadow: 0px 0px 60px black;
		}		
	input[type="button"] {
		background-color:#7D862D;
		border: none;
		color:white;
		width: 160px;
		height: 40px;
		font-size: 18px;
		border-radius: 6px; 
	}
	input[type="button"]:hover {
		background-color:#B6C144;
		border: none;
		color:white;
		width: 160px;
		height: 40px;
		font-size: 18px;
		border-radius: 6px; 
}	
</style>

</head>

<body>
<div class="header"><center><h2>VBHAAG Live</h2></center></div>
<div class="container">	
<center>
<form>
	<h2>NEXT SONG</h2>
	<table width='90%' style='border-spacing: 1px;border-bottom: 2px solid #ddd;'>
		<tr align='left'>
			<th>Song No</th><th>Song Name</th>
		</tr>
	</table>
	<div class="container2">	
	</div>
</form>
</center>
</div>
<div class="naveencontainer">
<center>
<form>
	<h4>Comments by Team Director (Naveen SG)</h4>
	<table width='90%' style='border-spacing: 1px;border-bottom: 2px solid #ddd;'>
		<tr align='left'>
			<th align="center">Current Song</th>
		</tr>

	</table>
	<div class="naveencontainer2">	
	</div>
</form>
</center>
</div>

</body>

<script type="text/javascript">


$(document).ready(function() {

  var repeater;

  function doWork() {

    $.ajax({
        url: 'process/displayTrack.php',
        type: 'GET',
                     
        success: function(data){
          $('.container2').html(data);
        } 

    });

   repeater = setTimeout(doWork, 1000);
  }

doWork();   
      

});
</script>

<script type="text/javascript">


$(document).ready(function() {

  var repeater2;

  function doWork2() {

    $.ajax({
        url: 'process/displayComments.php',
        type: 'GET',
                     
        success: function(data){
          $('.naveencontainer2').html(data);
        } 

    });

   repeater2 = setTimeout(doWork2, 1000);
  }

doWork2();   
      

});
</script>

</html>			

