<?php  
 $connect = mysqli_connect("localhost", "root", "", "resultdb");  
 session_start();
 $sub = $_POST["sub"];  
 $name = $_POST["batch"];
$code =$_POST["clas"];
 
 $sql = 'INSERT into batch values("'.$name.'","'.$code.'","'.$sub.'")';  
 mysqli_query($connect, $sql);
 
 ?>