<?php
if(!mysql_connect('localhost','root','') || !mysql_select_db('vec'))
{
die(mysql_error);
}
session_start();
if(isset($_SESSION['name']))
{
?>
<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="row" style="background-color:#e9e9e9">
    <div class="col-md-11" >
          <div id="log" style="float:right;display:no"><h3><a style="color:#2ecc71;" href="index.php?user=logout">Logout</a></h3></div>

    </div>
</div>

<div class="col-md-6">
	                     <div class="alert alert-danger fade in">
                            
                            <h4><b>students details</b></h4>
                            <p>Add or update student details</p>
                         <a href="master.php?years=1" target="_blank"> <button type="button" class="btn btn-sm btn-primary">1st year</button></a>
                          <a href="master.php?years=2" target="_blank"> <button type="button" class="btn btn-sm btn-primary">2nd year</button></a>
                           <a href="master.php?years=3" target="_blank"> <button type="button" class="btn btn-sm btn-primary">3th year</button></a>
                            <a href="master.php?years=4" target="_blank"> <button type="button" class="btn btn-sm btn-primary">4th year</button></a>
                        </div>
                        <div class="alert alert-info fade in">
                            
                            <h4><b>Attendance</b></h4>
                            <p>Update and students attendance </p>
                           <a href="test_db.php?years=1" target="_blank">  <button type="button" class="btn btn-sm btn-primary">1st year</button></a>
                          <a href="test_db.php?years=2" target="_blank"> <button type="button" class="btn btn-sm btn-primary">2nd year</button></a>
                           <a href="test_db.php?years=3" target="_blank"> <button type="button" class="btn btn-sm btn-primary">3th year</button></a>
                           <a href="test_db.php?years=4" target="_blank">  <button type="button" class="btn btn-sm btn-primary">4th year</button></a>
                        </div></br></br>
                         <div class="alert alert-success fade in">
                            
                            <h4><b>PT-1 Marks</b></h4>
                            <p>Add or update students Periodic test-1 results</p>
                           <a href="pt_results.php?years=1" target="_blank"> <button type="button" class="btn btn-sm btn-primary">1st year</button></a>
                           <a href="pt_results.php?years=2" target="_blank"> <button type="button" class="btn btn-sm btn-primary">2nd year</button></a>
                            <a href="pt_results.php?years=3" target="_blank"> <button type="button" class="btn btn-sm btn-primary">3th year</button></a>
                             <a href="pt_results.php?years=4" target="_blank"> <button type="button" class="btn btn-sm btn-primary">4th year</button></a>
                        </div>
                         <div class="alert alert-success fade in">
                            
                            <h4><b>Pt-3 Marks</b></h4>
                            <p>Add or update students Periodic test-3 results</p>
                           <a href="pt_results3.php?years=1" target="_blank"> <button type="button" class="btn btn-sm btn-primary">1st year</button></a>
                           <a href="pt_results3.php?years=2" target="_blank"> <button type="button" class="btn btn-sm btn-primary">2nd year</button></a>
                            <a href="pt_results3.php?years=3" target="_blank"> <button type="button" class="btn btn-sm btn-primary">3th year</button></a>
                             <a href="pt_results3.php?years=4" target="_blank"> <button type="button" class="btn btn-sm btn-primary">4th year</button></a>
                        </div></br></br>
                        <div class="alert alert-info fade in">
                            
                            <h4><b>University Results</b></h4>
                            <p>Add or update students University results</p>
                           <a href="univ_results.php?years=1" target="_blank"> <button type="button" class="btn btn-sm btn-primary">1st year</button></a>
                           <a href="univ_results.php?years=2" target="_blank"> <button type="button" class="btn btn-sm btn-primary">2nd year</button></a>
                            <a href="univ_results.php?years=3" target="_blank"> <button type="button" class="btn btn-sm btn-primary">3th year</button></a>
                             <a href="univ_results.php?years=4" target="_blank"> <button type="button" class="btn btn-sm btn-primary">4th year</button></a>
                        </div>
                       
                    </div>
<div class="col-md-6"></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
	                     <div class="alert alert-success fade in">
                            
                            <h4><b>PT-2 Marks</b></h4>
                            <p>Add or update students Periodic test-2 results</p>
                           <a href="pt_results2.php?years=1" target="_blank">  <button type="button" class="btn btn-sm btn-primary">1st year</button></a>
                           <a href="pt_results2.php?years=2" target="_blank"> <button type="button" class="btn btn-sm btn-primary">2nd year</button></a>
                           <a href="pt_results2.php?years=3" target="_blank">  <button type="button" class="btn  btn-sm btn-primary">3th year</button></a>
                           <a href="pt_results2.php?years=4" target="_blank">   <button type="button" class="btn btn-sm btn-primary">4th year</button></a>
                        </div>
                       
                       
                    </div>
                    <div class="col-md-6"></br></br></br></br></br></br></br></br></br>
	                     <div class="alert alert-info fade in">
                            
                            <h4><b>Fees Details</b></h4>
                            <p>Add or update students Fees details</p>
                            <a href="fees.php?years=1" target="_blank"> <button type="button" class="btn btn-sm btn-primary">1st year</button></a>
                          <a href="fees.php?years=2" target="_blank">  <button type="button" class="btn btn-sm btn-primary">2nd year</button></a>
                          <a href="fees.php?years=3" target="_blank">   <button type="button" class="btn btn-sm btn-primary">3th year</button></a>
                            <a href="fees.php?years=4" target="_blank">  <button type="button" class="btn btn-sm btn-primary">4th year</button></a>
                        </div>
                       
                       
                    </div>
</body>
</html>
<?php
}
else
{
    echo '<center><h3>You didnt login...go back to main page and login </br> <a href="index.php">Home page</a></h3></center>';    

}
?>
