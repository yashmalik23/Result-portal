<?php require_once 'teacher_functions.php'; ?>
<form method="post" action="teacher_student.php">
    <input list="Subjects" placeholder="Subject" name="subject" class="form-control" style="width: 120px;">
    <datalist id="Subjects">
      <?php
            updateSubjects();

      ?>
    </datalist>
    <?php if(isset($_POST['subject']) && !empty($_POST['subject'])){echo 'SUBJECT CODE ="'.$_POST['subject'].'"';} ?>
    <table>
    	<thead>
    		<tr>
    			<th>Registration Number</th>
    			<th>Minor 1</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php updateStudentMarksTable(); ?>
    	</tbody>
    </table>
</form>