<?php
session_start();
if(!mysql_connect('localhost','root','') || !mysql_select_db('vec'))
{
die(mysql_error);
}
if(isset($_SESSION['name']))
{
$name=$_SESSION['name'];
$table_name=$_SESSION['name'].'_master';
if(isset($_GET['years']))
{
	if($_GET['years']==1 || $_GET['years']==2 || $_GET['years']==3 ||$_GET['years']==4)
	{
	$years=$_GET['years'];

?>
<?php
if(isset($_GET['delete']))
{
  $ro=$_GET['idea'];
  mysql_query("delete from $table_name where rollno = $ro ")or die(mysql_error());
 
  echo "<script>window.location.href='master.php?years=".$years."';</script>";
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
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="#" class="logo" style="background-color: white;
         height: 60px;">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b style="color:black;">VEC</b></span>
          <!-- logo for regular state and mobile devices -->
          <img src="assets/img/VEC-LOGO.jpg" style="max-width:50px;  margin-top: 2px;">
        </a>


        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <section style="    margin-top: 18px;">
         <h4 style="text-align:center;color:white;"><i class="fa fa-table"></i>Dashboard</h4>
        </section>

          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu" style="margin-top: -46px;">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="text-success hidden-xs" style="font-size:18px;color:white;">Welcome <?php echo $name; ?></span>
                </a>
              </li>
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar" style="z-index:2">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-table"></i> <span>Students Details</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li ><a href="master.php?years=1"><i class="fa fa-check"></i> First Year</a></li>
                <li><a href="master.php?years=2"><i class="fa fa-check"></i> Second Year</a></li>
                <li><a href="master.php?years=3"><i class="fa fa-check"></i>Third Year</a></li>
                <li><a href="master.php?years=4"><i class="fa fa-check"></i>Final Year</a></li>
               
                
               
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Attendance Management</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li ><a href="test_db.php?years=1"><i class="fa fa-check"></i> First Year</a></li>
                <li><a href="test_db.php?years=2"><i class="fa fa-check"></i> Second Year</a></li>
                <li><a href="test_db.php?years=3"><i class="fa fa-check"></i>Third Year</a></li>
                <li><a href="test_db.php?years=4"><i class="fa fa-check"></i>Final Year</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-trophy"></i> <span>Peridic Test - 1</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                 <li ><a href="pt_results.php?years=1"><i class="fa fa-check"></i> First Year</a></li>
                <li><a href="pt_results.php?years=2"><i class="fa fa-check"></i> Second Year</a></li>
                <li><a href="pt_results.php?years=3"><i class="fa fa-check"></i>Third Year</a></li>
                <li><a href="pt_results.php?years=4"><i class="fa fa-check"></i>Final Year</a></li>
              </ul>
            </li>

            <li class="treeview ">
              <a href="#">
                <i class="fa fa-trophy"></i> <span>Peridic Test - 2</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li ><a href="pt_results2.php?years=1"><i class="fa fa-check"></i> First Year</a></li>
                <li><a href="pt_results2.php?years=2"><i class="fa fa-check"></i> Second Year</a></li>
                <li><a href="pt_results2.php?years=3"><i class="fa fa-check"></i>Third Year</a></li>
                <li><a href="pt_results2.php?years=4"><i class="fa fa-check"></i>Final Year</a></li>
              </ul>
            </li>
            
            <li class="treeview ">
              <a href="#">
                <i class="fa fa-trophy"></i> <span>Peridic Test - 3</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li ><a href="pt_results3.php?years=1"><i class="fa fa-check"></i> First Year</a></li>
                <li><a href="pt_results3.php?years=2"><i class="fa fa-check"></i> Second Year</a></li>
                <li><a href="pt_results3.php?years=3"><i class="fa fa-check"></i>Third Year</a></li>
                <li><a href="pt_results3.php?years=4"><i class="fa fa-check"></i>Final Year</a></li>
              </ul>
            </li>
            <li class="treeview ">
              <a href="#">
                <i class="fa fa-graduation-cap"></i> <span>University Results</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li ><a href="univ_results.php?years=1"><i class="fa fa-check"></i> First Year</a></li>
                <li><a href="univ_results.php?years=2"><i class="fa fa-check"></i> Second Year</a></li>
                <li><a href="univ_results.php?years=3"><i class="fa fa-check"></i>Third Year</a></li>
                <li><a href="univ_results.php?years=4"><i class="fa fa-check"></i>Final Year</a></li>
              </ul>
            </li>
             <li class="treeview ">
              <a href="#">
                <i class="fa fa-fax"></i> <span>Fees Details</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li ><a href="fees.php?years=1"><i class="fa fa-check"></i> First Year</a></li>
                <li><a href="fees.php?years=2"><i class="fa fa-check"></i> Second Year</a></li>
                <li><a href="fees.php?years=3"><i class="fa fa-check"></i>Third Year</a></li>
                <li><a href="fees.php?years=4"><i class="fa fa-check"></i>Final Year</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-wrench"></i> <span>Setting Management</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li ><a href="settings.php"><i class="fa fa-check"></i>Settings</a></li>
				 
              </ul>
            </li>
		   <li >
            <a href="index.php?user=logout" >
              <i class="fa fa-sign-out"></i> <span>Logout</span>
             </a>
           </li>
          </ul>
            
        </section>
        <!-- /.sidebar -->
      </aside>
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
$('.tftable').append('<tr><td><input type="text" name="rollno[]" placeholder="rollno"/></td><td><input type="text" name="year[]" placeholder="year"/></td></tr>');
$('#con').html(click+' row added');

});
});
</script>


	 <div class="content-wrapper">
  <section class="content">
	<form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload: <input type="file" name="fileToUpload" id="fileToUpload" class="btn">
    <input type="submit" value="Upload File" name="submit" class="btn btn-primary">
</form>
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

<form method="get" action="master.php">
 <table   id="example1" class="table table-bordered table-striped tftable" border="1">
<thead><tr><th>Register Number</th><th>Year</th></tr></thead>
<tbody>
<?php
if($query=mysql_query("select rollno,year from $table_name where year=".$years)) //first change
{
	//$_GET['numof']=mysql_num_rows($query);

	while($fetch=mysql_fetch_assoc($query))
	{
		
		$rollno=$fetch['rollno'];
		$year=$fetch['year'];
	?>
	<tr><td><?php echo '<input type="text" value="'.$rollno.'" name="rollno[]" placeholder="rollno"/>';?></td><td><?php echo '<input type="text" value="'.$year.'" name="year[]" placeholder="year"/>';?></td><td><a class="text-danger" href="master.php?delete=yes&idea=<? echo $rollno ;?>&years=<? echo $years; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td></tr>
	<?php
    }
    
    echo '</tbody></table>
              </div> ';
    echo '<input type="hidden" name="years" value="'.$years.'"/>';
   // echo '<input type="hidden" value="'.$_GET['numof'].'" name="numof"/>';
    echo '<input type="submit" name="master_update" value="update info..." class="btn btn-primary" />';
    
    echo '</form>';

}

?>

<!-- start here -->
<?php
if(isset($_GET['master_update']) && isset($_GET['years']))
{
	$sql=array();
	$extra=array();
   
   if(isset($_GET['rollno']) && isset($_GET['year']))
   {
   	for($i=0;$i<count($_GET['rollno']);$i++)
   	{
   		if(isset($_GET['rollno'][$i]) &&  isset($_GET['year'][$i]))
   		{
   		 $sql[]='('.$_GET['rollno'][$i].', "'.$name.'", '.$_GET['year'][$i].')'; //second
         $extra[]='rollno=values(rollno),  dept=values(dept), year=values(year)';
        }
   	}
   	$main='insert into '.$table_name.' (rollno,dept,year) values '.implode(',',$sql).'on duplicate key update '.implode(',',$extra);//third
	//echo $main;

	if($insert=mysql_query($main))
	{
		//echo '<script> var up=" record(s) updated";</script>';
	//echo '<script>$("body").html("<center><div style=\"color:#2ecc71;font-size:24px\">"+up+"</div></center>");</script>';
    echo "<script>window.location.href='master.php?years=".$years."';</script>";
	}
	else
	{
		echo mysql_error();
	}
    
   }	
}
?>

<?php
}//checking
else{ echo '<center><h3>Year is not selected properly..go back to selection page </br> <a href="cate.php">Selection page</a></h3></center>';    
}
}
else {echo '<center><h3>Year is not selected properly...go back to selection page </br> <a href="cate.php">Selection page</a></h3></center>';  }
}
else
{
    echo '<center><h3>You didnt login...go back to main page and login </br> <a href="index.php">Home page</a></h3></center>';    
}
?>

  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          </div>
        </section><!-- /.content -->

<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 0.1
        </div>
        <strong>Copyright &copy; 2015 <a href="#">VEC</a>.</strong> All rights reserved.<br/>
      </footer>
      
      
     <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->
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
          "bPaginate": false,
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
