<div class="article">
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
  li>a
  {
    border: 1px solid blue;
  }
</style>
<script type="text/javascript">
  
$('#subTable').bind("DOMSubtreeModified",function(){
  $("#subTable").DataTable({
    "bLengthChange": false
  });
  if($(".minor1.mark").html()!=0)
  {
    $('.minor1.mark').attr('contenteditable','false');
    $('.minor1.mark').css('background-color','#ccc');
  }
  if($(".minor2.mark").html()!=0)
  {
    $('.minor2.mark').attr('contenteditable','false');
    $('.minor2.mark').css('background-color','#ccc');
  }
  if($(".major.mark").html()!=0)
  {
    $('.major.mark').attr('contenteditable','false');
    $('.major.mark').css('background-color','#ccc');
  }
  if($(".quiz.mark").html()!=0)
  {
    $('.quiz.mark').attr('contenteditable','false');
    $('.quiz.mark').css('background-color','#ccc');
  }
  if($(".major.mark").html()!=0)
  {
    $('.major.mark').attr('contenteditable','false');
    $('.major.mark').css('background-color','#ccc');
  }
});

$(document).on('blur', '.minor1', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           if(text>20 || text<0)
            message_denial();
          else{
           $("input[name='saveChanges']").click( function() {
           edit_marks(id, text, "Minor1");  }); }
      });
$(document).on('blur', '.minor2', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           if(text>20 || text<0)
            message_denial();
          else{
           $("input[name='saveChanges']").click( function() {
           edit_marks(id, text, "Minor2");  });
}       });
$(document).on('blur', '.major', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           if(text>50 || text<0)
            message_denial();
          else{
           $("input[name='saveChanges']").click( function() {
           edit_marks(id, text, "Major");  });
     } });  
$(document).on('blur', '.quiz', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           if(text>10 || text<0)
            message_denial();
          else{
           $("input[name='saveChanges']").click( function() {
           edit_marks(id, text, "Quiz");  });
     } });
$(document).on('blur', '.practical', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           if(text>30 || text<0)
            message_denial();
          else{
           $("input[name='saveChanges']").click( function() {
           edit_marks(id, text, "Practical");  });
     } });

function message_denial()
 {
  $("#messageBox").html("INVALID INPUT");
 }

</script>
<?php
require_once 'teacher_functions.php';
?>
<h3>SELECT SUBJECT CODE :<span class="h5 pull-right" id="messageBox"></span></h3>
<input id="saveChangesButton" type="button" class="btn btn-primary pull-right" name="saveChanges" value="Save Changes">
<div>
      <?php updateTeacherSubject(); ?>
</div>  
<div id="studTable" >
  <center><h4>SELECT SUBJECT FIRST</h4></center>
</div>
</div>
