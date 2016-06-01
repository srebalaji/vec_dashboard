<?php
if(!mysql_connect('localhost','root','') || !mysql_select_db('vec'))
{
die(mysql_error());
}
session_start();
?>
<html>
<head>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">        
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="assets/css/form-elements.css">-->
        <link rel="stylesheet" href="assets/css/style.css">
         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link href='http://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>
<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
     <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>
<style>
body{background-color:rgb(54,65,80);background-image: none}
//rgb(254,203,8)
h1, input::-webkit-input-placeholder, button {
  font-family: 'roboto', sans-serif;
  -webkit-transition: all 0.3s ease-in-out;
          transition: all 0.3s ease-in-out;
}

h1 {
  height: 100px;
  width: 100%;
  font-size: 18px;
  background: #eceef1;
  color: white;
  line-height: 150%;
  border-radius: 3px 3px 0 0;
  box-shadow: 0 2px 5px 1px rgba(0, 0, 0, 0.2);
}

form {
  box-sizing: border-box;background-color: white;
  width: 260px;height: 400px;
  margin: 100px auto 0;margin-top:45px;
  box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
  padding-bottom: 40px;
  border-radius: 3px;
}
form h1 {
  box-sizing: border-box;
  padding: 20px;
}

input {
  margin: 40px 25px;
  width: 200px;
  display: block;
  border: none;
  padding: 10px 0;
  border-bottom: solid 1px #1abc9c;
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
          transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #1abc9c 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #1abc9c 4%);
  background-position: -200px 0;
  background-size: 200px 100%;
  background-repeat: no-repeat;
  color: #0e6252;
}
input:focus, input:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;font-size:22px;
}
input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {
  color: #1abc9c;
  font-size: 15px;
  -webkit-transform: translateY(-20px);
          transform: translateY(-20px);
  visibility: visible !important;
}

button {
  border: none;
  background: #1abc9c;
  cursor: pointer;
  border-radius: 3px;
  padding: 6px;
  width: 200px;
  color: white;
  margin-left: 0px;
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
}
button:hover {
  -webkit-transform: translateY(-3px);
      -ms-transform: translateY(-3px);
          transform: translateY(-3px);
  box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);
}

.follow {
  width: 42px;
  height: 42px;
  border-radius: 50px;
  background: #03A9F4;
  display: inline-block;
  margin: 50px calc(50% - 21px);
  white-space: nowrap;
  padding: 13px;
  box-sizing: border-box;
  color: white;
  -webkit-transition: all 0.2s ease;
          transition: all 0.2s ease;
  font-family: Roboto, sans-serif;
  text-decoration: none;
  box-shadow: 0 5px 6px 0 rgba(0, 0, 0, 0.2);
}
.follow i {
  margin-right: 20px;
  -webkit-transition: margin-right 0.2s ease;
          transition: margin-right 0.2s ease;
}
.follow:hover {
  width: 134px;
  -webkit-transform: translateX(-50px);
      -ms-transform: translateX(-50px);
          transform: translateX(-50px);
}
.follow:hover i {
  margin-right: 10px;
}


</style>
</head>
<body style="background-image: none"> 
  <div id="log" style="float:right;display:none"><h3><a style="color:#2ecc71;" href="index.php?user=logout">Logout</a></h3></div>
   <div class="inner-bg"> 
<div class="col-sm-6 col-sm-offset-3  "> 
  
   <form action="index.php" method="post">
                              <h1><img src="assets/img/VEC-LOGO.jpg" height="80" width="100" style="margin-top:-7px"></h1>
                              <input placeholder="Username" type="text" name="username" required="">
                              <input placeholder="Password" type="password" name="password" required="">
                              <button type="submit" name="submit">Login</button>
                            </form> 
</div>
</div>
</body>
<html>
<?php
if(isset($_SESSION['name']))
{
  echo '<script>document.getElementById("log").style.display = " block";</script>';
}
if(isset($_POST['username']) && isset($_POST['password']) )
{
  if (!preg_match("/^[a-zA-Z\s]*$/",$_POST['username']) || empty($_POST['username']) || empty($_POST['password']))
  {
    echo "<script>alert('login information not entered properly');</script>";
    die();
  }
	$username=$_POST['username'];
	$password=md5($_POST['password']);
    
	if($query=mysql_query("select username,password from users where username='$username' and password='$password'"))
	{
		
		if(mysql_num_rows($query))
		{
      $_SESSION['name']=$username;
      echo "<script>window.location.href = 'dashboard.php';</script>";
      
		}
    else
    {
      echo '<script>alert("username or password is wrong !!");</script>';
    }
	}
	else
	{
		echo '<script>alert("Something went wrong!!");</script>';
	}
}
if(isset($_GET['user']))
{
  if(strlen(($_GET['user']))==6)
  {
    session_destroy();
    echo "<script>window.location.href = 'index.php';</script>";
    
  }


}

?>