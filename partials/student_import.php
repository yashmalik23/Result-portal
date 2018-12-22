<!DOCTYPE html>
<html>
<script type="text/javascript" src="../js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script type="text/javascript">
	$(document).ready(function(){
		$('#submit').click(
			function()
			{   username=new Array();
             	roll=new Array();
             	reg=new Array();
             	 var i=0,check,j=0,k=0;
			$( "input" ).map(function() {
     		a=$(this).attr('name');
     		if(a=="username")
     		username[i++]=$( this ).val();
     		if(a=="roll")
     			roll[j++]=$( this ).val();
     		if(a=="reg")
     			reg[k++]=$( this ).val();
     		     }).get();

                var trade=$('input[name=trade]').val(),clas=$('input[name=clas]').val();                
         	//alert(username+roll+reg+trade+clas);
         		$.ajax({
					url:"student_import2.php",
					method:"post",
					data:{username:username,roll:roll,reg:reg,trade:trade,clas:clas},
					dataType:"text",
					success:function(response)
					{
                      $('#text').html(response);
					}
				});
			});
	  
	});

</script>
<script type="text/javascript">
	function rows() {
    var table = document.getElementById("myTable");
    var n=document.getElementById("rows").value;
    $('#myTable').empty();
    
    for(var i=0;i<n;i++)
   {
 table.innerHTML += "<tr><td><input type='text' name='username'></td><td><input type='text' name='roll'></td><td><input type='text' name='reg'></td><tr>";
    }
}
</script>
<body>
		trade:
		<input type="text" name="trade">
		<br>
		class:
		<input type="text" name="clas"><br>
		Number of Student:
		<input type="number" id="rows">
		<button onclick="rows()">Create</button><br>
			<table class="table table-bodered" style="width: 30%;" >
			<thead>
				<th>Student Name</th>
				<th>Roll Number</th>
				<th>Registration Number</th>
			</thead>	
			<tbody id="myTable">
			</tbody>
			</table>
		<button id="submit">Submit</button>
		<div id="text"></div>
	<body>
</html>