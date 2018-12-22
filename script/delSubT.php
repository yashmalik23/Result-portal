<?php  
 $connect = mysqli_connect("localhost", "root", "", "resultdb");  
 session_start();
 $name = $_POST["name"];  
 $code = $_POST["sub"];   
 $sql = "DELETE FROM teacher_subject where Subject_Code='".$code."' AND Teacher_Name ='".$name."'";  
 mysqli_query($connect, $sql);
 
 ?>