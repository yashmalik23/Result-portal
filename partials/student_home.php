	<!DOCTYPE html>
		<html>
		
		 <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">
		 <link rel="stylesheet" href="../css/bootstrap.min.css">
		 <script type="text/javascript" src="../js/jquery.js"></script>
		 <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
		 <script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<?php 
		require_once 'student_subject.php';
		?>
		<body>
	
       <div class="container" style="margin-top:300px; ">
	  <ul class="nav nav-tabs">
	    <li  class="active"><a data-toggle="tab" href="#minor1">Minor1</a></li>
	    <li><a data-toggle="tab" href="#minor2">Minor2</a></li>
	    <li><a data-toggle="tab" href="#major">Major</a></li>
	    <li><a data-toggle="tab" href="#quiz">Quiz</a></li>
	    <li><a data-toggle="tab" href="#practical">Practical</a></li>
	  <li><a data-toggle="tab" href="#total">Total</a></li>
	  </ul>

	  <div class="tab-content">
	    <div id="minor1" class="tab-pane fade in active">
	    <?php minor1(); ?>
	    </div>
	    <div id="minor2" class="tab-pane fade">
	     <?php minor2(); ?>
	    </div>
	    <div id="major" class="tab-pane fade">
	    <?php major(); ?>
	    </div>
	    <div id="quiz" class="tab-pane fade">
	      <?php quiz(); ?>
	     </div>
	     <div id="practical" class="tab-pane fade">
	      <?php practical(); ?>
	     </div>
	     <div id="total" class="tab-pane fade">
	      <?php total(); ?>
	     </div>
	  </div>
	</div>
	</body>
		</html>