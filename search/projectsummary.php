<!DOCTYPE html>
<html>
<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="RAPP.css">

  <title>PORTAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>



<?php
include '../includes/header.php';
echo('<div style="margin-top:100px"></div>');
$var = $_GET['var'];
$query = "select * from project where ProjectID ='".$var."'";

include '../includes/connect.php';

foreach($result as $row) {
echo "<div id='disp'>";
echo "<strong><u>Project ID: </u></strong><br>  ".$row['ProjectID']."<br>";
echo "<strong><u>Title:      </u></strong><br>  ".$row['Title']."<br>";
echo" <strong><u>Description: </u></strong><br>   ".$row['Description']."<br>";
echo" <strong><u>Prerequisite: </u></strong><br> ".$row['Prereq']."<br>";
echo "<strong><u>AdvisorEmail: </u></strong><br> ".$row['AdvisorEmail']."<br>";
switch (substr($row['LastUpdated'],5,2)){
case ("01"):
	$date="January";
	break;
case ("02"):
	$date="February";
	break;
case ("03"):
	$date="March";
	break;
case ("04"):
	$date="April";
	break;
case ("05"):
	$date="May";
	break;
case ("06"):
	$date="June";
	break;
case ("07"):
	$date="July";
	break;
case ("08"):
	$date="August";
	break;
case ("09"):
	$date="September";
	break;
case ("10"):
	$date="October";
	break;
case ("11"):
	$date="November";
	break;
case ("12"):
	$date="December";
	break;
	default:
	$date="nope";
}

echo "<strong><u>LastUpdated: </u></strong> <br> ".$date." ".substr($row['LastUpdated'],-2).", ".substr($row['LastUpdated'],0,4)."<br>";
echo "</div>";
echo "<img src=".$row['Picture'].">";

echo" <br>";
}

?>
</body>
</html>