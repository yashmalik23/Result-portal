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
    $name1= $_POST['newStudentName1'];
    $reg1= $_POST['newStudentReg1'];
    $roll1= $_POST['newStudentRoll1'];
    $sql1 = "INSERT INTO main ". "(Trade,Batch,Reg_No,Roll_No,Student_Name) ". "VALUES('$trade','$batch','$reg1','$roll1','$name1')";
    $result1= $conn->query($sql1);
    if(! $result1) {
               die('Could not enter data: ' . mysql_error());
             }
    $name2= $_POST['newStudentName2'];
    $reg2= $_POST['newStudentReg2'];
    $roll2= $_POST['newStudentRoll2'];
    $sql2 = "INSERT INTO main ". "(Trade,Batch,Reg_No,Roll_No,Student_Name) ". "VALUES('$trade','$batch','$reg2','$roll2','$name2')";
    $result2= $conn->query($sql2);
    if(! $result2) {
               die('Could not enter data: ' . mysql_error());
}
    $name3= $_POST['newStudentName3'];
    $reg3= $_POST['newStudentReg3'];
    $roll3= $_POST['newStudentRoll3'];
    $sql3 = "INSERT INTO main ". "(Trade,Batch,Reg_No,Roll_No,Student_Name) ". "VALUES('$trade','$batch','$reg3','$roll3','$name3')";
    $result3= $conn->query($sql3);
    if(! $result3) {
               die('Could not enter data: ' . mysql_error());
 }   
    $name4= $_POST['newStudentName4'];
    $reg4= $_POST['newStudentReg4'];
    $roll4= $_POST['newStudentRoll4'];
    $sql4 = "INSERT INTO main ". "(Trade,Batch,Reg_No,Roll_No,Student_Name) ". "VALUES('$trade','$batch','$reg4','$roll4','$name4')";
    $result4= $conn->query($sql4);
    if(! $result4) {
               die('Could not enter data: ' . mysql_error() );
  }
    $name5= $_POST['newStudentName5'];
    $reg5= $_POST['newStudentReg5'];
    $roll5= $_POST['newStudentRoll5'];
    $sql5 = "INSERT INTO main ". "(Trade,Batch,Reg_No,Roll_No,Student_Name) ". "VALUES('$trade','$batch','$reg5','$roll5','$name5')";
    $result5= $conn->query($sql5);
    if(! $result5) {
               die('Could not enter data: ' . mysql_error() );
   }
    $name6= $_POST['newStudentName6'];
    $reg6= $_POST['newStudentReg6'];
    $roll6= $_POST['newStudentRoll6'];
    $sql6 = "INSERT INTO main ". "(Trade,Batch,Reg_No,Roll_No,Student_Name) ". "VALUES('$trade','$batch','$reg6','$roll6','$name6')";
    $result6= $conn->query($sql6);
    if(! $result6) {
               die('Could not enter data: ' . mysql_error() );
}
    $name7= $_POST['newStudentName7'];
    $reg7= $_POST['newStudentReg7'];
    $roll7= $_POST['newStudentRoll7'];
    $sql7 = "INSERT INTO main ". "(Trade,Batch,Reg_No,Roll_No,Student_Name) ". "VALUES('$trade','$batch','$reg7','$roll7','$name7')";
    $result7= $conn->query($sql7);
    if(! $result7) {
               die('Could not enter data: ' . mysql_error() );
 }
    $name8= $_POST['newStudentName8'];
    $reg8= $_POST['newStudentReg8'];
    $roll8= $_POST['newStudentRoll8'];
    $sql8 = "INSERT INTO main ". "(Trade,Batch,Reg_No,Roll_No,Student_Name) ". "VALUES('$trade','$batch','$reg8','$roll8','$name8')";
    $result8= $conn->query($sql8);
    if(! $result8) {
               die('Could not enter data: ' . mysql_error()); 
  }             ?>
<div> 
   <script>
   alert("Data updated");
   </script>
</div>