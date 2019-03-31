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
	   
	  $PAT_ID=$_POST['$PAT_ID'];
	  $PAT_F_NAME=$_POST['$PAT_F_NAME'];
	  $PAT_L_NAME=$_POST['$PAT_L_NAME'];
	  $PAT_SEX=$_POST['$PAT_SEX'];
	  $PAT_SERVICE=$_POST['$PAT_SERVICE'];
	  $PAT_PHONE=$_POST['$PAT_PHONE'];
	  $PAT_DATE=$_POST['$PAT_DATE'];
	  $PAT_TIME=$_POST['$PAT_TIME'];
	  $PAT_WORD=$_POST['$PAT_WORD'];
	 
		$sql="insert into patient values($PAT_ID,'$PAT_F_NAME','$PAT_L_NAME','$PAT_SEX','$PAT_SERVICE','$PAT_PHONE','$PAT_DATE','$PAT_TIME','$PAT_WORD')";
		$res=mysqli_query($conn,$sql);
		if(!$res)
		{
			die("query connection failed.");
		}

	   
	?>
</body>
<?php mysqli_close($conn);?>

</html>