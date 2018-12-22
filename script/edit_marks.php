<?php  
 $connect = mysqli_connect("localhost", "root", "", "resultdb");  
 session_start();
 $id = $_POST["regNo"];  
 $text = $_POST["text"];  

 $column_name = $_POST["column_name"];  
 $sql = "UPDATE marks_theory SET ".$column_name."='".$text."' WHERE Reg_No='".$id."' && Subject_Code='".$_SESSION['subject']."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Updated';  
 }  
 ?>