<?php
   $conn=mysqli_connect("localhost","root","","resultdb");
   if(!$conn)
    {
      die("Connection failed" .mysqli_connect_error());
    }
    $trade= $_POST['newStudentDept'];
    $batch= $_POST['newStudentBatch'];
    $name= $_POST['newStudentName'];
    $reg= $_POST['newStudentReg'];
    $roll= $_POST['newStudentRoll'];
    $sql = "INSERT INTO main ". "(Trade,Batch,Reg_No,Roll_No,Student_Name) ". "VALUES('$trade','$batch','$reg','$roll','$name')";
    $result= $conn->query($sql);
    if(! $result) {
               die('Could not enter data: ' . mysql_error());
            }
?>
<div >
   <script>
   alert("Data updated");
   </script>
</div>
