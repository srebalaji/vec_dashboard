<?php

$string='{"sub":[{"subject0":"digital signal processing digitalsesrdrdt  signal processing","subject1":"programming concepts"}],"mark":[{"mark0":"1413","mark1":"12"}]}';
echo $string;

/*
if(!mysql_connect('localhost','root','') || !mysql_select_db('vec'))
    {
    echo 'database error!!';
    die();

     }
     //pt exams
     if($_GET['q'] && $_GET['dept'])
     {
     	$pt=array();
     	$q=$_GET['q'];
     	$dept=$_GET['dept'];
         

     	if($query=mysql_query("select subject,marks from mech_pt_exams left join mech_master on mech_master.id=mech_pt_exams.rollno where mech_master.rollno='$q'"))
     	{
     		while($fetch=mysql_fetch_assoc($query))
     		{
     			$subject[]=$fetch['subject'];
     			$marks[]=$fetch['marks'];
                    

     		}
             
     		     $pt['sub']=array();
               $pt['mark']=array();
     			$sub=array();
                    $mark=array();

     		for($i=0;$i<sizeof($subject);$i++)
     		{
                    $sub['subject'.$i]=$subject[$i];


     		}
               for($i=0;$i<sizeof($marks);$i++)
               {
                    $mark['mark'.$i]=$marks[$i];


               }
              
               array_push($pt['sub'], $sub);
               array_push($pt['mark'], $mark);
               echo json_encode($pt);
     	

     	}
     	else
     	{
     		mysql_error();
     	}
     	

     }
     

//attendance...
if($_GET['q'] && $_GET['dept'])
{

	$q=$_GET['q'];
	$dept=$_GET['dept'];
	if($query=mysql_query("select atten_1,atten_2,atten_3 from mech_attendance left join mech_master on mech_master.id=mech_attendance.rollno where mech_master.rollno='$q'"))
	{
		
		while($fetch=mysql_fetch_assoc($query))
		{
			
			$atten_1=$fetch['atten_1'];
			$atten_2=$fetch['atten_2'];
			$atten_3=$fetch['atten_3'];

		}
		
		$arr=array("atten_1"=> $atten_1,"atten_2"=>$atten_2,"atten_3"=>$atten_3);
		echo json_encode($arr);

	}
	else
	{
		
	}
}
else
{
	echo 'tr';
}

/*
$ar=array("atten_1"=>23,"atten_2"=>"not updated","atten_3"=>54);
echo json_encode($ar); 
*/
?>