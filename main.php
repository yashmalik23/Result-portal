<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Admin - SLIET Results</title>
  <link rel="stylesheet" type="text/css" href="css/main_style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="icon" type="image" href="img/icon.png">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  

</head>
<?php
include 'script/conn.php';
?>
<body onload="admin_home()" >

<div class="wrapper">
	<div class="header navbar navbar-default navbar-fixed-top">
    <div class="name">
      Sant Longowal Institute of Engineering and<br> Technology
      <hr>
      <div>Deemed University <span> (Established By Govt. Of India)</span></div>
      
      <div class="pull-right" style="margin-right: 9%; font-size: 13px; padding:-2%;">Logged in  as <a  style=" cursor: pointer;"> <div style="display: inline-block; color: #999;border-radius: 5px; font-size: 15px; background: #fff; color: #000; padding:3px 7px;" id="loginUsername"> Rishabh Pratap Singh <i style="" class="fa fa-gear"></i></div></a></div>
    </div>
  </div>
  <div class="aside navbar navbar-default navbar-fixed-top"> 
		<div class="logo">
    <img src="img/logo.jpg"></div>
    <center class="h1">
		<div onclick='tabChange()' class="nav_tab active"><i onclick="admin_home()" id="home_ic" class="fa fa-home" aria-hidden="true"><span class="h2">Home</span></i></div>
    <div class="nav_tab" onclick='tabChange()'><i onclick="admin_teacher()" id="faculty_ic" class="fa fa-user" aria-hidden="true"><span class="h2">Faculty</span></i></div>
    <div class="nav_tab" onclick='tabChange()'><i onclick="admin_student()" id="student_ic" class="fa fa-users" aria-hidden="true"><span class="h2">Students</span></i></div>
    <div class="nav_tab" onclick='tabChange()'><i onclick="admin_subject()" id="sunject_ic" class="fa fa-book" aria-hidden="true"><span class="h2">Academics</span></i></div>
    <div class="nav_tab"><i onclick="logout()" id="logout_ic" class="fa fa-power-off" aria-hidden="true"><span class="h2">Logout</span></i></div>
    </center>
	</div>
  <div class="section">
    
  </div>
</div>

    

</body>
