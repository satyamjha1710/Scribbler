<?php
if(isset($_POST['signup']))
{
error_reporting(1);
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"facebook");
	
	$Email=$_POST['email'];

	$que1=mysqli_query($link,"select * from users where Email='$Email'");
	$count1=mysqli_num_rows($que1);

	if($count1>0)
	{
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
	}
	else
	{
		$Name=$_POST['first_name'].' '.$_POST['last_name'];
		$Password=$_POST['password'];
		$Gender=$_POST['sex'];
		$Birthday_Date=$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
		$Scribbler_Join_Date=$_POST['Scribbler_join_time'];
		
		$day=intval($_POST['day']);
		$month=intval($_POST['month']);
		$year=intval($_POST['year']);
		if(checkdate($month,$day,$year))
		{
			$que2=mysqli_query($link,"insert into users(Name,Email,Password,Gender,Birthday_Date,Scribbler_Join_Date) values('$Name','$Email','$Password','$Gender','$Birthday_Date','$Scribbler_Join_Date')");

			session_start();
			$_SESSION['tempScribbleruser']=$Email;
		
		
			if($Gender=="Male")
			{
				header("location:Scribbler_files/Scribbler_step/Scribbler_step1/Step1_Male.php");
			}
			else
			{
				header("location:Scribbler_files/Scribbler_step/Scribbler_step1/Step1_Female.php");
			}
		}
		else
		{
			echo "<script>
				alert('The selected date is not valid.');
			</script>";
		}
	}
}
?>
