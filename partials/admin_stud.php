<div class="article" id="stu" style="overflow: auto;">
<style>
  table
  {
    text-align: left;
    width: 100%;
  }
  form
  {
    text-align: left;
    width: 100%;
  }
  a:hover
  {
    cursor: pointer;
  }
  .article
  {
    top: -85px;
  }
</style>
<script type="text/javascript">
  $("#stu").ready(function () {
    $('#studentTable').DataTable({
      "aaSorting":[[2,'asc'],[3,'asc']],
      "bLengthChange": false,
      "pageLength": 7
    });
  });

$(document).on('blur', '.rollCol', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $("input[name='saveChanges']").click( function() {
           edit_data(id, text, "Roll_NO");  });
      });
$(document).on('blur', '.studNameCol', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $("input[name='saveChanges']").click( function() {
           edit_data(id, text, "Student_Name");  });
      });

  
function message()
 {
  alert('Data updated');
 }

$('.batchName').click(function(){
  var bname = $(this).attr('id');
  batchChange(bname);
});


</script>
<?php
require_once 'admin_functions.php';
?>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" class="batchName" id="All" href="#home">All</a></li>
  <?php availableBatch(); ?>
</ul>
<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <button id="singleStudentAdd" class="btn btn-seconday" type="button" data-toggle="modal" data-target="#newStudentModal">Add Single Student</button>
    <div style="display: inline; left:40%; ,margin-bottom: 10px; position: absolute; "><h3 style="display: inline;"><span id="messageBox" >Student Details </span></h3></div>
    <input id="saveChangesButton" type="button" style="margin-bottom: 10px;" class="btn btn-primary pull-right" name="saveChanges" value="Save Changes">
    <div id="spaceTable">  
           <?php
            updateStudentTable();
           ?> 
    </div>
    </div>
</div>
 


</div>
