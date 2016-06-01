<?php
session_start();
if(isset($_SESSION['name']))
{
	$name=$_SESSION['name'];
	$mastertable=$name."_master";
	$tablename=$name."_pt_exams";
}
ini_set("display_errors",0);
require_once 'excel_reader2.php';
	$target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   echo $target_file;
   /* if($target_file=="master.xls")
    {

    }*/
    if(file_exists($target_file)) unlink($target_file);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

//displaying values from spreadsheet
    $data = new Spreadsheet_Excel_Reader("uploads/ptexams3.xls");

echo "Total Sheets in this xls file: ".count($data->sheets)."<br /><br />";
$flag=count($data->sheets[0]['cells'][1]);
$ff=$flag;

$counter=0;$zz=0;
$html="<table border='1'>";
for($i=0;$i<count($data->sheets);$i++) // Loop to get all sheets in a file.
{	
	if(count($data->sheets[$i]["cells"])>0) // checking sheet not empty
	{
		//echo "Sheet $i:<br /><br />Total rows in sheet $i  ".count($data->sheets[$i]['cells'])."<br />";
		$cc=count($data->sheets[$i]['cells']);
		for($j=1;$j<=count($data->sheets[$i]['cells']);$j++) // loop used to get each row of the sheet
		{ 
			
			$html.="<tr>";
			
			for($k=1;$k<=count($data->sheets[$i]['cells'][$j]);$k++) // This loop is created to get data in a table format.
			{
				
				if(!$flag)
				{
				$html.="<td>";
				$html.=$data->sheets[$i]['cells'][$j][$k];
				
				$html.="</td>";
				$abc=0;
				}
				else
					{
					$flag--;
					$abc=1;
					$sub[]=$data->sheets[$i]['cells'][$j][$k];
					
					}
				
			}

			

			if($abc==1)
				continue;
			for($z=1;$z<=$ff;$z++)
			{
				$ones[]= $data->sheets[$i]['cells'][$j][$z];
			}
			for($y=1;$y<$ff;$y++)
			{
			$one.="select id,'".$sub[$y]."','".$ones[$y]."' from ".$mastertable." where rollno=".$ones[0];
			$zz++;
			if(!((($ff-1)*($cc-1))==$zz))
			$one.=" union all ";
			}
			
			unset($ones);
			
			//$one=" select id,'".$two."' from mech_master where rollno=".$ones;
			//$add.="".$one."";
			$add2.="rollno=values(rollno),subject=values(subject),marks3=values(marks3)";
						/*$eid = $eid = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][1]);
			$name = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][2]);
			$email = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][3]);
			$dob = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][4]);
			$query = "insert into excel(eid,name,email,dob) values('".$eid."','".$name."','".$email."','".$dob."')";
			*/
			//mysqli_query($connection,$query);
			$counter++;
			
			if(!($counter == $cc-1) )
			{
			//$one.=" union all ";
			$add2.=",";
			}
			$html.="</tr>";
		}
		//echo $add;
		//echo $one;
		$query="insert into ".$tablename."(rollno,subject,marks3)".$one." on duplicate key update ".$add2;
		//echo $query;
		if(!mysql_connect('localhost','root','') || !mysql_select_db('vec'))
			{
			die(mysql_error);
			}
		if(mysql_query($query))
		{
			echo 'Data Inserted Successfully'.'</br>';
             echo '<input type="button" value="Back To Page" id="back" class="btn btn-success" style="color:blue;cursor:pointer;height:500px" onclick="goBack()">'.'</br></br>';

		}
		else
		{
			echo mysql_error();
		}
		
	}
	
}

$html.="</table>";
echo $html;
//echo "<br />Data Inserted in dababase";
?>
<script>
function goBack() {
    window.history.back()
}
</script>