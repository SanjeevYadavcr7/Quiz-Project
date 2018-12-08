<?php include'database.php' ?>
<?php
$query="select * from regcode";
$res=mysql_query($query);

?>
<!doctype html>
<html>
<head>
	<title>ShowRegCan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style  type="text/css">
	.box{width:60%;height:80vh;border:1px solid steelblue;font-family:'Roboto', sans-serif;}
	.box table, th, td {border:1px solid steelblue;border-collapse: collapse;}
	.box table{width: 80%;}
	.box th, td{height:30px;}

	


		
	</style>
</head>
<body>
	<div class="box">
	<h1 style="color:green;" align="center">Show All Records</h1>
	<table align="center">
		
		<tr style="background: #E5E7E9;">
    		<th>S.NO</th><th>NAME</th><th>EMAIL</th><th>PASSWORD</th>
		</tr>
		<?php

		$a=1;
		while($row=mysql_fetch_array($res,MYSQL_BOTH))
		{
			?>
		
		<tr>
			<td><center><?php echo $a; ?></center></td>  <!-- can also use index od id-->
			<td style="text-transform: capitalize;"><center><?php echo $row['pname']; ?></center></td>
			<td><center><?php echo $row['pemail']; ?></center></td>
			<td><center><?php echo $row['ppass']; ?></center></td>
		</tr>
		
		<?php
		$a++;
		}
		?>
	</table>
</div>
</body>
</html>