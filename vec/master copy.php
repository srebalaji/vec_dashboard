<html>
<head>
<style type="text/css">
*{font-size: 1.02em;}
.tftable {color:#333333;width:60%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;margin-left: 170px}
.tftable th {background-color:#b8b8b8;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	var click=0;
$('.plusbtn').click(function(){
	click++;
//$('.tftable tr:last').after('<td>add</td><td>before</td>');
$('.tftable').append('<tr><td><input type="text" name="rollno[]" placeholder="rollno"/></td><td><input type="text" name="year[]" placeholder="year"/></td></tr>');
$('#con').html(click+' row added');

});
});
</script>
</head>
<body>
<?php
session_start();
$name=$_SESSION['name'];
$table_name=$_SESSION['name'].'_master';
if(!mysql_connect('localhost','root','') || !mysql_select_db('vec'))
{
die(mysql_error);
}
$rollno=array();
$ids=array();
$year=array();
$dept=array();
?>
<input type="button" value="Add A Row" class="plusbtn" style="position:fixed;" /></br><div id="con" style="position:fixed;left=100px;"></div>
 </br>
<form method="get" action="master.php">
 <table class="tftable" border="1">
<tr><th>Register Number</th><th>Year</th></tr>

<?php
if($query=mysql_query("select rollno,year from master"))
{
	//$_GET['numof']=mysql_num_rows($query);
	while($fetch=mysql_fetch_assoc($query))
	{
		
		$rollno=$fetch['rollno'];
		$year=$fetch['year'];
	?>
	<tr><td><?php echo '<input type="text" value="'.$rollno.'" name="rollno[]" placeholder="rollno"/>';?></td><td><?php echo '<input type="text" value="'.$year.'" name="year[]" placeholder="year"/>';?></td></tr>
	<?php
    }
    echo '</table>';
   // echo '<input type="hidden" value="'.$_GET['numof'].'" name="numof"/>';
    echo '<input type="submit" name="master_update" value="update info..."/>';
    echo '</form>';

}
?>
<!-- start here -->
<?php
if(isset($_GET['master_update']))
{
	$sql=array();
	$extra=array();
   
   if(isset($_GET['rollno']) && isset($_GET['year']))
   {
   	for($i=0;$i<count($_GET['rollno']);$i++)
   	{
   		if(isset($_GET['rollno'][$i]) &&  isset($_GET['year'][$i]))
   		{
   		 $sql[]='('.$_GET['rollno'][$i].', "cse", '.$_GET['year'][$i].')';
         $extra[]='rollno=values(rollno), rollno=values(rollno), dept=values(dept), year=values(year)';
        }
   	}
   	$main='insert into master (rollno,dept,year) values '.implode(',',$sql).'on duplicate key update '.implode(',',$extra);
	echo $main;

	if($insert=mysql_query($main))
	{
		echo 'Success';
	}
	else
	{
		echo mysql_error();
	}
    
   }	
}
?>
</body>
</html>
