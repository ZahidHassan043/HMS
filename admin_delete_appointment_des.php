<?php

	$host="localhost";
	$user="root";
	$pass="";
	$db="hms";
	$conn=mysqli_connect($host,$user,$pass,$db);
	if(mysqli_connect_errno())
	{
		die("connection failed.".mysqli_connect_errno());
	}
	else
	{
		echo "connection successful.<br />";
	}
?>
<html>
<head></head>

<body>

	<?php 
	   
	  $PHONE=$_POST['$PHONE'];
		$sql="DELETE FROM appointment  WHERE PHONE=$PHONE";
		$res=mysqli_query($conn,$sql);
		if(!$res)
		{
			die("query connection failed.");
		}

	   
	?>
</body>
<?php mysqli_close($conn);?>

</html>