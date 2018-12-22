<?php
session_start();
$conn = mysqli_connect("localhost","root","","resultdb");
  
$message="";
if(!empty($_POST["login"])) {
  $result = mysqli_query($conn,"SELECT * FROM users WHERE Username='" . $_POST["u"] . "' and Password = '". $_POST["p"]."'");
  $row  = mysqli_fetch_array($result);
  if(is_array($row)) {
  $_SESSION["user_id"] = $row["Username"];
  $_SESSION['login_type'] = $row['Acc_Type'];
  } else {
  $message = "Invalid Username or Password!";
  }
}
?>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>SLIET Results</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image" href="img/icon.png">
  <script type="text/javascript" src="js/index.js"></script>

</head>
<body>
<div>
<?php if(empty($_SESSION["user_id"])) { ?>
<div class="wrapper">
  <div class="login container" >
 <div class="logo">
  <center><img src="img/logo.jpg"></center>
</div>
  <h1>SLIET Longowal</h1><br>
    <form action="" method="POST" name="loginFirst">
      <input type="text" name="u" placeholder="Username" required="required" /><br>
        <input type="password" name="p" placeholder="Password" required="required" autocomplete="off" /><br>
        <input type="submit" name="login" value="Login" class="btn btn-primary btn-block btn-large"></input>
    <br>
    <div class="res"><center>Result portal for students and teacher</center></div>
    <br>
   <center> <div class="loginError"><?php if(isset($message)) { echo $message; } ?></div></center>
    </form>
    
    

 </div>
 </div>  
<?php 
} else
{
 if($_SESSION['login_type']==0) header('LOCATION:main_teacher.php');
 else if($_SESSION['login_type']==-1) header('LOCATION:main_admin.php');
 else if($_SESSION['login_type']==1) header('LOCATION:main_student.php');
}
 ?>




</body></html>