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
	 // if(isset($_POST['doctor_id']))
	   
	  $EMP_ID=$_POST['$EMP_ID'];
	  $EMP_VALUE=$_POST['$EMP_VALUE'];
	  $COL=$_POST['$column'];
		//var_dump($_POST);
		$sql="UPDATE employee SET $COL='$EMP_VALUE' WHERE e_id=$EMP_ID";
		$res=mysqli_query($conn,$sql);
		if(!$res)
		{
			die("query connection failed.");
		}

	   
	?>
</body>
<?php mysqli_close($conn);?>

</html>