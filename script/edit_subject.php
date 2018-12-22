<?php  
 $connect = mysqli_connect("localhost", "root", "", "resultdb");  
 $id = $_POST["Code"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = 'UPDATE subject SET '.$column_name.'="'.$text.'" WHERE Subject_Code="'.$id.'"';  
 if(mysqli_query($connect, $sql))  
 {  
    echo 'Data Updated';  
 }  
 ?>