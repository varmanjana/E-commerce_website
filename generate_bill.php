<?php
session_start();
$tot=$_SESSION['bill'];
$price=$_SESSION['product'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("Unable to connect");
}
mysql_select_db("shopping_site");
	echo "<html>
	<head> 
		<title>Bill</title>
		<link rel='stylesheet' type='text/css' href='shopping_style.css'>
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
			font-family:magneto;
		}
		
		
		table,td,th{
			padding:10px;
			border-color:white;	
			background-color: black;
		}
		</style>	
	</head>
	<body><center>";
	echo "Bill For The Order";
	echo "<hr><br><br><br>";
	echo "<table border=1>";
	echo "<tr><th>BRAND</th><th>PARTICULARS</th><th>PRICE</th></tr>";
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
		}
	echo "<tr><td colspan='2' align='right'><b> TOTAL </b></td><td> $tot </td></tr>";
	echo "</table>
	</body>
	</html>";
?>