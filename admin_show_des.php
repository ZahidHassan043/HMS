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
		//var_dump($_POST);
		$sql="SELECT e_id,e_name,e_sex,e_address,e_salary,e_designation
              from employee
              where e_id= $EMP_ID";
		$res=mysqli_query($conn,$sql);
		if(!$res)
		{
			die("query connection failed.");
		}
		while($row=mysqli_fetch_assoc($res))
		{
			foreach($row as $key=>$val)
			{
				echo "$key: "."$val <br />";
			}
			echo "<br /><br />";
		}
		mysqli_free_result($res);
	   
	?>
</body>
<?php mysqli_close($conn);?>

</html>