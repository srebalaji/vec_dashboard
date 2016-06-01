<?php
session_start();
if(isset($_SESSION['name']))
{
$name=$_SESSION['name'];

if(isset($_GET['years']))
{
	if($_GET['years']==1 || $_GET['years']==2 || $_GET['years']==3 ||$_GET['years']==4)
	{
	$years=$_GET['years'];

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
            
            <li class="treeview">
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

             <li class="treeview active">
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



<?php
$table_name=$_SESSION['name'].'_master';
$table_name1=$_SESSION['name'].'_attendance';

if(!mysql_connect('localhost','root','') || !mysql_select_db('vec'))
{
die(mysql_error);

}
$ids=array();
$atten_1=array();
$atten_2=array();
$atten_3=array();
?>
<div class="content-wrapper">
  <section class="content">
  	<div class="row">
  		<div class="col-sm-4">
<form action="attendance1_upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:(attendance for PT1)
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit" class="btn btn-primary">
</form>
</div><div class="col-sm-4">
<form action="attendance2_upload.php" method="post" enctype="multipart/form-data">
    Select file to upload: (attendance for PT2)
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit" class="btn btn-primary">
</form>
</div><div class="col-sm-4">
<form action="attendance3_upload.php" method="post" enctype="multipart/form-data">
    Select file to upload: (attendance for PT3)
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit" class="btn btn-primary">
</form></div>
</div>
</br></br>
<div class="row">
            <div class="col-xs-12">

              <div class="box box-info">
			  <br>                  <input type="button" value="Add A Row" class="plusbtn btn btn-primary" style="" /></br><div id="con" style="position:fixed;left=100px;"></div>

                <div class="box-header">

                  <h3 class="box-title"></h3>

                </div><!-- /.box-header -->

                <div class="box-body">

				<div class="table-responsive">
<form method="get" action="test_db.php">
 <table   id="example1" class="table table-bordered table-striped tftable" border="1">
 	<thead>
<tr><th>Register Number</th><th>Department</th><th>Year</th><th>PT-1</th><th>PT-2</th><th>PT-3</th></tr></thead>
<tbody>
<?php
if($query=mysql_query("select $table_name.id,$table_name.rollno,$table_name.dept,$table_name.year,$table_name1.atten_1 ,$table_name1.atten_2,$table_name1.atten_3 from $table_name left join $table_name1 on $table_name.id=$table_name1.rollno where $table_name.year=".$years))
{
	$_GET['numof']=mysql_num_rows($query);

	while($fetch=mysql_fetch_assoc($query))
	{
		$id=$fetch['id'];
		$rollno=$fetch['rollno'];
		$dept=$fetch['dept'];
		$year=$fetch['year'];
		$atten_1=$fetch['atten_1'];
		$atten_2=$fetch['atten_2'];
		$atten_3=$fetch['atten_3'];

		//echo $rollno.'<br>'.$dept.'<br>'.$year.'<br>'.$atten_1.'<br>'.$atten_2.'<br>'.$atten_3.'</br>';
		?>
		
<tr><td><?php echo $rollno;echo '<input type="hidden" value="'.$id.'" name="ids[]"';?></td><td><?php echo $dept;?></td><td><?php echo $year;?></td><td><?php echo '<input type="text" value="'.$atten_1.'" name="atten_1[]"';?></td><td><?php echo '<input type="text" value="'.$atten_2.'" name="atten_2[]"';?></td><td><?php echo '<input type="text" value="'.$atten_3.'" name="atten_3[]"';?></td></tr>


<?php
	}
	 echo '</tbody></table>
              </div> ';
	echo '<input type="hidden" value="'.$_GET['numof'].'" name="numof"/>';
	echo '<input type="hidden" name="years" value="'.$years.'"/>';
	echo '<input type="submit" name="atten_1_submit" value="update info for PT-1" class="btn btn-primary"/>';
	echo '<input type="submit" name="atten_2_submit" value="update info for PT-2" class="btn btn-primary" style="margin-left:50px"/>';
	echo '<input type="submit" name="atten_3_submit" value="update info for PT-3" class="btn btn-primary"  style="margin-left:50px"/>';
	echo '</form>';
	
}
//

if(isset($_GET['atten_1_submit']))
{
	$sql=array();
	$extra=array();

if(isset($_GET['atten_1']))
{
	
	for($i=0;$i<$_GET['numof'];$i++)
	{
		if(isset($_GET['atten_1'][$i]) && !empty($_GET['atten_1'][$i]))
		{
       $sql[]='('.$_GET['ids'][$i].', "'.$_GET['atten_1'][$i].'")';
       $extra[]='rollno=values(rollno), atten_1=values(atten_1)';
        }
	}
	$main='insert into '.$table_name1.' (rollno,atten_1) values '.implode(',',$sql).'on duplicate key update '.implode(',',$extra);
	//echo $main;

	if($insert=mysql_query($main))
	{
		echo "<script>window.location.href='test_db.php?years=".$years."';</script>";

	}
	else
	{
		echo mysql_error();
	}
	

}
}
//PT-2
if(isset($_GET['atten_2_submit']))
{
	$sql=array();
	$extra=array();

if(isset($_GET['atten_2']))
{
	
	for($i=0;$i<$_GET['numof'];$i++)
	{
		if(isset($_GET['atten_2'][$i]) && !empty($_GET['atten_2'][$i]))
		{
       $sql[]='('.$_GET['ids'][$i].', "'.$_GET['atten_2'][$i].'")';
       $extra[]='rollno=values(rollno), atten_2=values(atten_2)';
        }
	}
	$main='insert into '.$table_name1.' (rollno,atten_2) values '.implode(',',$sql).'on duplicate key update '.implode(',',$extra);
	//echo $main;

	if($insert=mysql_query($main))
	{
		
		echo "<script>window.location.href='test_db.php?years=".$years."';</script>";
	}
	else
	{
		echo mysql_error();
	}
	

}
}
//pt3
if(isset($_GET['atten_3_submit']))
{
	$sql=array();
	$extra=array();

if(isset($_GET['atten_3']))
{
	
	for($i=0;$i<$_GET['numof'];$i++)
	{
		if(isset($_GET['atten_3'][$i]) && !empty($_GET['atten_3'][$i]))
		{
       $sql[]='('.$_GET['ids'][$i].', "'.$_GET['atten_3'][$i].'")';
       $extra[]='rollno=values(rollno), atten_3=values(atten_3)';
        }
	}
	$main='insert into '.$table_name1.' (rollno,atten_3) values '.implode(',',$sql).'on duplicate key update '.implode(',',$extra);
	//echo $main;

	if($insert=mysql_query($main))
	{
		echo "<script>window.location.href='test_db.php?years=".$years."';</script>";
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
          "bFilter": true,
          "bSort": false,
          "bInfo": true,
          "bAutoWidth": false,
 
        });
      });
    </script>
</body>
</html>


