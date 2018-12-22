<?php  
 $connect = mysqli_connect("localhost", "root", "", "resultdb");  
 $id = $_POST["Grad"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = 'UPDATE grades SET '.$column_name.'="'.$text.'" WHERE Grade="'.$id.'"';  
 if(mysqli_query($connect, $sql))  
 {  
    echo 'Data Updated';  
 }  
 ?>