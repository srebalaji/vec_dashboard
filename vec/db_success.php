<?php
session_start();
if(isset($_SESSION['name']))
$name=$_SESSION['name'];
$table_name=$name.'_attendance';
if(!mysql_connect('localhost','root','') || !mysql_select_db('vec'))
{
die(mysql_error);

}
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
	$main='insert into '.$table_name.' (rollno,atten_1) values '.implode(',',$sql).'on duplicate key update '.implode(',',$extra);
	//echo $main;

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
	$main='insert into '.$table_name.' (rollno,atten_2) values '.implode(',',$sql).'on duplicate key update '.implode(',',$extra);
	//echo $main;

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
	$main='insert into '.$table_name.' (rollno,atten_3) values '.implode(',',$sql).'on duplicate key update '.implode(',',$extra);
	//echo $main;

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