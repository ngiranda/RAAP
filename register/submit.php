<!DOCTYPE html>
<html>
<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="RAPP.css">
  <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

</head>
<body>

<?php
include '../includes/header.php';

$Title= $_POST['Title']                 or    $Title ="Title";                  
$Description= $_POST['Description']     or    $Description="Description";
$Link= $_POST['Link']                   or    $Link="projectsummary.php";
if (substr( $Link, 0, 4 )==='http'){} else if (substr( $Link, 0, 18)=="projectsummary.php"){} else $Link= "http://".$Link;
$Public= $_POST['Public']               or    $Public="true";
$Prereq= $_POST['Prereq']               or    $Prereq="None";
$AdvisorEmail= $_POST['AdvisorEmail']   or    $AdvisorEmail="AdvisorEmail";
$ContactPref= $_POST['ContactPref']     or    $ContactPref="1";
$Status= $_POST['Status']               or    $Status="Status";
$Picture= $_POST['Picture']             or    $Picture="http://triplecrit.com/wp-content/themes/creativemag/images/default.png";
if (substr( $Picture, 0, 4 )==='http'){} else $Picture= "http://".$Picture;
$Archived= $_POST['Archived']           or    $Archived="false";
$LastUpdated="now()";


$myVar = "INSERT into project (Title, Description, Link, Public, Prereq, AdvisorEmail, ContactPref, Status, Picture, Archived,LastUpdated) values ('".$Title."','".$Description."','".$Link."',".$Public.",'".$Prereq."','".$AdvisorEmail."',".$ContactPref.",'".$Status."','".$Picture."',".$Archived.",".$LastUpdated.")";
$myVar2 = "delete from project where ProjectID=64";

include '../includes/connect.php';


echo" <br>"; 

?>
<h1 style = "margin:30"> SUCCESS</h1>
</body>
</html>