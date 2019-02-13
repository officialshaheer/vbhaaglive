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
		color: white;
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
		}
	.naveencontainer {
		position: absolute;
		width: 20%;
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
textarea::-webkit-input-placeholder {
color: white;
text-align: center;
opacity: 0.6;
line-height:300px;
}

</style>

</head>

<body>
<div class="header"><center><h2>VBHAAG Live</h2></center></div>
<div class="container">	
<center>
<form>
	<h3 style="color: black;">Crowd Pulse Review Handle - Naveen SG (Team Director)</h3>
	<table width='90%' style='border-spacing: 1px;border-bottom: 2px solid #ddd;'>
		<tr align='left'>
			<th align="center">Broadcast your comment to the members :</th>
		</tr>
		<tr>
			<td><textarea placeholder="Enter your comment here!" id="message" name="message" style="background-color:#B6C144;border: black;color:black;width: 100%;height: 300px;font-size: 18px;border-radius: 6px;font-weight: bold;" rows="4" cols="50"></textarea></td>
		</tr>
		<tr>
			<td align="center"><input type="button" class="addCommentBtn" name="addComment" value="Broadcast"></td>
		</tr>
	</table>
</form>
</center>
</div>

<div class="naveencontainer">
<center>
<form>
	<h4>Message from Ambadi Padmagireesh</h4>
	<table width='90%' style='border-spacing: 1px;border-bottom: 2px solid #ddd;'>
		<tr align='left'>
			<th>Song No</th><th align="left">Song Name</th><th align="right">Selection</th>
		</tr>

	</table>
</form>
</center>
</div>

</body>

<script type="text/javascript">
  
$(function(){
      $('.container').on('click', '.addCommentBtn', function(){  
      			var message = $('textarea#message').val();
                
                $.ajax({
                    url: 'process/addCommentByNaveen.php',
                    type: 'POST',
                    data: {
                        message: message
                        },
                success: function(data){
                      alert('Done Adding!');
                      // console.log(data);
                      // $('.displayCandidatesContentfromDB').html(data);                    
                    }
                  })
            });

   });
</script>

</html>

