<html>
<head>
	<title>Shopping Site</title>
	<link rel="stylesheet" type="text/css" href="shopping_style.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="http://fonts.googleapis.com/css2?
	family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<style>
		.col{
			max-width:1170px;
			width:100%;
			margin:0 auto;
			display: flex;
		}
	</style>
</head>
<body class="container">
<center>
<h2>ELECTRONICS ONLINE SHOPPING SITE</h2>
<hr color="white"><br><br>
<form method="post" action="confirm.php">
<div class="row">
	<?php
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die("Unable to connect");
	}
	mysql_select_db("shopping_site");
	$sql="select * from electronics";
	$r=mysql_query($sql);
	if($r)
		"Connection Successful";
	else
		echo "Connection Failed";
	while($col=mysql_fetch_row($r))
	{
		echo "<div class=col-lg-3>";
			echo "<div class=card>";
				echo "<h1 class='card-title'>$col[1]</h1>";
	
				echo "<div class='card-body'>";
					echo "<img src=$col[3] alt='mobile' class='img-fluid'>";
					echo "<h6 style='color:black;'>$col[4]</h6>";
					echo "<h6 style='color:black;'><input type='checkbox' value='$col[4]' name='ch[]'> $col[2]</h6>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}
	?>
</div>
		<br><br><center><input type='submit' id='purchase' value='PURCHASE'>
		<input type='reset' id='re-order' value='RE-ORDER'>
</form>
</body>
</html>