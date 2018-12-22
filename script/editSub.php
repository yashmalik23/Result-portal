<?php  
 $connect = mysqli_connect("localhost", "root", "", "resultdb");  
 $id = $_POST["Sub"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = 'UPDATE batch SET '.$column_name.'="'.$text.'" WHERE Class="'.$id.'"';  
 if(mysqli_query($connect, $sql))  
 {  
    echo 'Data Updated';  
 }  
 ?>