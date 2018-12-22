<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";
$name = $_POST['class'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
        
        $sql = 'SELECT Subject FROM batch where Class="'.$name.'"';
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){
        	$sub = $row['Subject'];
        echo "<button title='remove ".$sub."' class='btn' style='margin:0px 2px 2px 0;' onclick=deleteSubjectTeacher('".$row['Subject']."','".$name."')>".$row['Subject']."</button><script>$('#newBtn').prop('disabled',false);</script>";}

?>