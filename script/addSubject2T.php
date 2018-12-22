<?php  
 $connect = mysqli_connect("localhost", "root", "", "resultdb");  
 session_start();
 $sub = $_POST["sub"];  
 $name = $_POST["name"];  
 $code = $_POST['code'];

 
 $sql = 'INSERT into teacher_subject values("'.$code.'","'.$name.'","'.$sub.'")';  
 mysqli_query($connect, $sql);
 
 ?>