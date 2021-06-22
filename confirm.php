<html>
<head>
	<title>Confirmation</title>
	<link rel="stylesheet" type="text/css" href="shopping_style.css">
	<style>
		body{
		min-height: 100vh;
		width: 100%;
		background-image: linear-gradient(rgba(4, 9, 30, 0.7),rgba( 4, 9, 30, 0.7)),url(stock.jpg);
		background-position: center;
		background-size: cover;
		color:white;
		font-size:24;
		font-weight:bold;
		}

		h2{
			color:white;
			font-size:40;
			font-family:cambria;
		}
		
		
		table,td,th{
			padding:10px;
			border-color:white;	
			background-color: black;
		}
		btn-search{
			width:500px;
			color:red;
		}
	</style>
</head>
<body>
<center>
<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("Unable to connect");
}
mysql_select_db("shopping_site");
$price=$_POST['ch'];
$total=0;
for($i=0;$i<count($price);$i++)
{
	$total=$total+$price[$i];
}
$_SESSION['bill']=$total;
echo "<form method=post action=generate_bill.php>";
echo "<h2>ORDER SAVED</h2><hr><br><br>";
echo "<table border=1>";
echo "<tr><th> Brand </th> <th> Product Name </th> <th> Price </th>";
  		if(in_array(27999,$price))
		{
			$sql="select * from electronics where price=27999";
			$r=mysql_query($sql);
			while($col=mysql_fetch_row($r))
			{
				echo "<tr><td> $col[1] </td><td> $col[2] </td><td> $col[4]</td></tr>";
			}	
		}
		if(in_array(21400,$price))
		{
			$sql="select * from electronics where price=21400";
			$r=mysql_query($sql);
			while($col=mysql_fetch_row($r))
			{
				echo "<tr><td>$col[1]</td><td>$col[2]</td><td>$col[4]</td></tr>";
			}	
		}
		if(in_array(12690,$price))
		{
			$sql="select * from electronics where price=12690";
			$r=mysql_query($sql);
			while($col=mysql_fetch_row($r))
			{
				echo "<tr><td>$col[1]</td><td>$col[2]</td><td>$col[4]</td></tr>";
			}	
		}
		if(in_array(44199,$price))
		{
			$sql="select * from electronics where price=44199";
			$r=mysql_query($sql);
			while($col=mysql_fetch_row($r))
			{
				echo "<tr><td>$col[1]</td><td>$col[2]</td><td>$col[4]</td></tr>";
			}	
		}
		else
		{
			echo "Select Option";
		}
$_SESSION['product']=$price;
echo "</table><br>";
echo "<input type='submit' value='Generate Bill'>";
mysql_close($con);
?>
</body>
</html>