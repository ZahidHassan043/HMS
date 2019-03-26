<?php
	$host="localhost";
	$dbuser="root";
	$pass="";
	$dbname="hms";
	$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
	if(mysqli_connect_errno())
	{
		die("connection failed." . mysqli_connect_error());
	}
?>

<html>
	<head>
		<title>appointment page</title>
	</head>
	
	<body>
		<?php
			if(isset($_POST['submit']))
			{
				$first=$_POST['first_name'];
				$last=$_POST['last_name'];
				$service=$_POST['service_name'];
				$phone=$_POST['phone'];
				$date=$_POST['date'];
				$time=$_POST['time'];
				$message=$_POST['message'];
			
				$sql="INSERT INTO appointment ".
				"VALUES ('$first','$last','$service','$phone','$date','$time','$message')";
				
				$res=mysqli_query($conn,$sql);
				if(!$res)
				{
					die("Query failed! ".mysqli_error($conn));
				}
				else
				{
					echo "Data inserted successfully. ";
				}
			}
		?>
	</body>
</html>