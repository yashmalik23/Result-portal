<?php

include 'conn.php';

$currentUser = $_POST['u'];
$Password = $_POST['p'];

$sql = 'SELECT Teacher_Password,Acc_Type FROM teacher where Teacher_Code="'.$currentUser.'"';
$result = $conn->query($sql);
try
{
	while($row = $result->fetch_assoc())
	{
		if($row['Teacher_Password']==$Password){
		session_start();
		$_SESSION['login_user']=$currentUser;
		$_SESSION['login_type']=$row['Acc_Type'];
		header("Location: ../main_teacher.php");
		
	}
	else {
		echo "INVALID USER";
	}
	}
}
catch(Exeption $e)
{
	die('ERROR');
}
?>