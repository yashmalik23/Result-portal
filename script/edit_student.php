<?php  
 $connect = mysqli_connect("localhost", "root", "", "resultdb");  
 $id = $_POST["regNo"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE main SET ".$column_name."='".$text."' WHERE Reg_No='".$id."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Updated';  
 }  
 ?>