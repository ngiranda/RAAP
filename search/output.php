<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Search Output</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="RAPP.css">
	<style type="text/css">
	</style>
</head>
<body>


<?php
include '../includes/header.php';  
 echo('<div style="margin-top:100px"></div>'); 

$searchType = $_POST['searchType'];
$archType = $_POST['IncArch'];

switch ($searchType) {
    case "keyword":
        $searchType="Description";
       
        break;
    case "projectName":
        $searchType="Title";
        break;
        case "professor":
        $searchType = "AdvisorEmail";
        break;
    default:
   
        
}
$searchArray= explode(" ",$_POST["search"]); 
$count = count($searchArray);
$a = "select * from project";

if ($searchArray[0] != ""){
	$a= $a." where ";

}
else{
$count = 0;
}
for ($i=0;$i<$count; $i+=1){
	$a=$a.$searchType;
	$a=$a." like '%"; 
	$a = $a.$searchArray[$i]."%' ";
	if ($i <$count -1){
		$a=$a." and ";
		}
	}
if ($archType==false){
if ($searchArray[0] != ""){
$a = $a.' and archived = false';
}
else {
$a = $a.' where archived = false';
}
}


try {
   include '../includes/connect.php';
}catch(PDOException $e) {
   die('Error1');
}
 
$query = $a;
$sth = $dbh->prepare($a);
if(!$sth->execute()) {
   die('Error2');
}
 
 

$html_table = '<table border="1" cellspacing="0" cellpadding="2"><tr><th>ID</th><th>Name</th><th>Description</th><th>Contact Email</th></tr>';
foreach($sth as $row) {

$link=$row['Link'];
if (substr($link,0,18)!="projectsummary.php"){
}
else{
$link =$link."?var=".$row['ProjectID'];
}
	$html_table .= '<tr><td>' .$row['ProjectID']. '</td><td><a href='.$link.'>' .$row['Title']. '</td><td>' .substr($row['Description'],0,200). '</td><td>'.$row['AdvisorEmail'].'</td></tr>';
	}
  $conn = null;     

  $html_table .= '</table>';         

  echo $html_table;       

?>
</body>
</html>