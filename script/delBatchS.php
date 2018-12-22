<?php  
 $connect = mysqli_connect("localhost", "root", "", "resultdb");  
 session_start();
 $name = $_POST["name"];  
 $code = $_POST["sub"];   
 $sql = "DELETE FROM batch where Subject='".$code."' AND Class ='".$name."'";  
 mysqli_query($connect, $sql);
 
 ?>