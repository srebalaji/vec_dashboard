<?php
session_start();
if(!mysql_connect('localhost','root','') || !mysql_select_db('vec'))
{
die(mysql_error);
}
if(isset($_SESSION['name']))
{
$name=$_SESSION['name'];
$table=$name."_master";

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


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
 
                               
        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-lg-3 ">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <?php
                  $viw=mysql_query("SELECT count(*) as book from $table where year=1");
                  while($row=mysql_fetch_assoc($viw))
                  {
                    ?>
                    <h3><?php echo $row['book']; ?></h3>
                    <?php
                  }
                    ?>
                  <p>First Year</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 ">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                 <?php
                  $viw=mysql_query("SELECT count(*) as book from $table where year=2");
                  while($row=mysql_fetch_assoc($viw))
                  {
                    ?>
                    <h3><?php echo $row['book']; ?></h3>
                    <?php
                  }
                    ?>
                  <p>Second Year</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 ">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                   <?php
                  $viw=mysql_query("SELECT count(*) as book from $table where year=3");
                  while($row=mysql_fetch_assoc($viw))
                  {
                    ?>
                    <h3><?php echo $row['book']; ?></h3>
                    <?php
                  }
                    ?>
                  <p>Third Year</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 ">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <?php
                  $viw=mysql_query("SELECT count(*) as book from $table where year=4");
                  while($row=mysql_fetch_assoc($viw))
                  {
                    ?>
                    <h3><?php echo $row['book']; ?></h3>
                    <?php
                  }
                    ?>
                  <p>Final Years</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                
              </div>
            </div><!-- ./col -->

            

          </div><!-- /.row -->

            

              
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 0.1
        </div>
        <strong>Copyright &copy; 2015 <a href="#">GoGoTruck</a>.</strong> All rights reserved.<br/><a href="www.jumpstartninja.com" target="_blank">JumpStartNinja</a>
      </footer>
      
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
   
    
    
     
    
  </body>
</html>
<?
}
else
{
    echo '<center><h3>You didnt login...go back to main page and login </br> <a href="index.php">Home page</a></h3></center>';    
}
?>
