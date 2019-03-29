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
	  $EMP_NAME=$_POST['$EMP_NAME'];
	  $EMP_SEX=$_POST['$EMP_SEX'];
	  $EMP_ADDRESS=$_POST['$EMP_ADDRESS'];
	  $EMP_SALARY=$_POST['$EMP_SALARY'];
	  $EMP_DESIGNATION=$_POST['$EMP_DESIGNATION'];
	  
	 
		$sql="insert into employee values($EMP_ID,'$EMP_NAME','$EMP_SEX','$EMP_ADDRESS',$EMP_SALARY,'$EMP_DESIGNATION')";
		$res=mysqli_query($conn,$sql);
		if(!$res)
		{
			die("query connection failed.");
		}

	   
	?>
</body>
<?php mysqli_close($conn);?>

</html>