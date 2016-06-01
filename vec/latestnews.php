<?php
session_start();
if(!mysql_connect('localhost','root','') || !mysql_select_db('vec'))
{
die(mysql_error);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>VEC</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
   
    
    <!-- page script -->
 
    
  </head>
  
  <style>
  .mds{
    display: none;
  }

  #example_length{
        display: none;
    }
  </style> 



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	var click=0;
$('.plusbtn').click(function(){
	click++;
//$('.tftable tr:last').after('<td>add</td><td>before</td>');
$('.tftable').append('<tr><td><input type="text" name="title[]" placeholder="title"/></td><td><input type="text" name="body[]" placeholder="body"/></td></tr>');
$('#con').html(click+' row added');

});
});
</script>


	 <!-- <div class="content-wrapper" > -->
  <section class="content">
	
<?php




$rollno=array();
$ids=array();
$year=array();
$dept=array();
?>
 </br>

          <div class="row">
            <div class="col-xs-12">

              <div class="box box-info">
			  <br>
                <div class="box-header">
                  <input type="button" value="Add A Row" class="plusbtn btn btn-primary"  /></br><div id="con" style=""></div>

                  <h3 class="box-title"></h3>

                </div><!-- /.box-header -->

                <div class="box-body">

				<div class="table-responsive">

<form method="POST" action="latestnews.php">
 <table   id="example1" class="table table-bordered table-striped tftable" border="1">
<thead><tr><th>Title</th><th>Body</th></tr></thead>
<tbody>
<?php
if($query=mysql_query("select title,body from latestnews order by latestnewsid desc")) //first change
{
	//$_GET['numof']=mysql_num_rows($query);

	while($fetch=mysql_fetch_assoc($query))
	{
		
		$title=$fetch['title'];
		$body=$fetch['body'];
	?>
	<tr><td><?php echo '<input type="text" value="'.$title.'" name="title[]" placeholder="title"/>';?></td><td><?php echo '<input type="text" value="'.$body.'" name="body[]" placeholder="body"/>';?></td></tr>
	<?php
    }
    
    echo '</tbody></table>
              </div> ';
    
   // echo '<input type="hidden" value="'.$_GET['numof'].'" name="numof"/>';
    echo '<input type="submit" name="latest_news" value="update info..." class="btn btn-primary" />';
    
    echo '</form>';

}

?>

<!-- start here -->
<?php
if(isset($_REQUEST['latest_news']))
{
	$sql=array();
	$extra=array();
   
   if(isset($_REQUEST['title']) && isset($_REQUEST['body']))
   {
   	for($i=0;$i<count($_REQUEST['title']);$i++)
   	{
   		if(isset($_REQUEST['title'][$i]))
   		{
   		 $sql[]='("'.$_REQUEST['title'][$i].'", "'.$_REQUEST['body'][$i].'")'; //second
         $extra[]='title=values(title), body=values(body)';
        }
   	}
   	$main='insert into latestnews (title,body) values '.implode(',',$sql).'on duplicate key update '.implode(',',$extra);//third
	echo $main;

	if($insert=mysql_query($main))
	{
		//echo '<script> var up=" record(s) updated";</script>';
	//echo '<script>$("body").html("<center><div style=\"color:#2ecc71;font-size:24px\">"+up+"</div></center>");</script>';
    echo "<script>window.location.href='latestnews.php';</script>";
	}
	else
	{
		echo mysql_error();
	}
    
   }	
}
?>



  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          </div>
        </section><!-- /.content -->


      
      
     <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    <!-- </div> ./wrapper -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(function () {
        $("#example2").dataTable();
        $('#example1').dataTable({
          "bPaginate": true,
          "bLengthChange": true,
          "bFilter": false,
          "bSort": false,
          "bInfo": true,
          "bAutoWidth": false,
 
        });
      });
    </script>
</body>
</html>
