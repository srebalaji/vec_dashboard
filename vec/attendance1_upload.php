<?php
session_start();
if(isset($_SESSION['name']))
{
	$name=$_SESSION['name'];
	$mastertable=$name."_master";
	$tablename=$name."_attendance";
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
    $data = new Spreadsheet_Excel_Reader("uploads/attendance1.xls");

echo "Total Sheets in this xls file: ".count($data->sheets)."<br /><br />";
$flag=count($data->sheets[0]['cells'][1]);
$counter=0;
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
				
				
				$html.="<td>";
				$html.=$data->sheets[$i]['cells'][$j][$k];
				
				$html.="</td>";
				$flag--;
				
			}
			$query="";
			//insert into mech_attendance(rollno,atten_1) select id,'88%' from mech_master where rollno=412811104092 union all select id,'88%' from mech_master where rollno=412811104093
			$ones= $data->sheets[$i]['cells'][$j][1];
			$two=$data->sheets[$i]['cells'][$j][2];
			$one=" select id,'".$two."' from ".$mastertable." where rollno=".$ones;
			$add.="".$one."";
			$add2.="rollno=values(rollno), atten_1=values(atten_1)";
						/*$eid = $eid = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][1]);
			$name = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][2]);
			$email = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][3]);
			$dob = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][4]);
			$query = "insert into excel(eid,name,email,dob) values('".$eid."','".$name."','".$email."','".$dob."')";
			*/
			//mysqli_query($connection,$query);
			$counter++;
			
			if(!($counter == $cc) )
			{

			$add.=" union all ";
			$add2.=",";
			}
			$html.="</tr>";
		}
		//echo $add;
		$query="insert into ".$tablename."(rollno,atten_1)".$add." on duplicate key update ".$add2;
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