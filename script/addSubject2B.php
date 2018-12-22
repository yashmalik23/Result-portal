<?php  
 $connect = mysqli_connect("localhost", "root", "", "resultdb");  
 session_start();
 $sub = $_POST["sub"];  
 $name = $_POST["name"];

 
 $sql = 'INSERT into batch values("'.$code.'","'.$name.'","'.$sub.'")';  
 mysqli_query($connect, $sql);
 
 ?>