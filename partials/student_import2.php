
<?php
$roll=$_POST['roll'];
$user=$_POST['username'];
$reg=$_POST['reg'];
$trade=$_POST['trade'];
$clas=$_POST['clas'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql4 = 'SELECT * from batch where Class="'.$clas.'"';
$result = $conn->query($sql4);
$row1= $result->fetch_assoc();
$sql = array(); 
$sql1=array();
$sql2=array();
$a=0;
foreach( $user as $row =>$user ) {
    $sql[] = '("'.$trade.'","'.$clas.'","","'.$reg[$row].'","'.$roll[$row].'","'.$user.'")';
    $sql1[] = '("'.$roll[$row].'","'.password().'",1)';
    $keys = array_keys($row1);
for($k=2; $k < count($keys); $k++) 
$sql2[]='("'.$reg[$row].'","'.$row1[$keys[$k]].'","'.$a.'","'.$a.'","'.$a.'","'.$a.'","'.$a.'")';
}
$sql3="INSERT INTO main (Trade,Class,Class_Group,Reg_No,Roll_No,Student_Name) VALUES ".implode(',',$sql);
$conn->query($sql3);
$sql3="INSERT INTO users (Username,Password,Acc_Type) VALUES ".implode(',',$sql1);/*password*/
$conn->query($sql3);
$sql3="INSERT INTO marks_theory (Reg_No,Subject_Code,Minor1,Minor2,Quiz,Major,Practical) VALUES ".implode(',',$sql2);
$conn->query($sql3);
 function password() {
$chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz';
$random= "";
for ($i=0; $i<4; $i++) {
$rnum = mt_rand(0,62);
$random .= substr($chars,$rnum,1);
}
return $random;
}
?>
