<!DOCTYPE HTML>
<html>
<head>
	<meta content = "text/htm; charset=utf-8" http-equiv="Conent-Type" />
	<title>Search</title>
	<meta name = "viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="RAPP.css">
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<style type="text/css">
    
	</style>
</head>
<body>



</head>
<body>
<?php include '../includes/header.php';
echo('<div style="margin-top:100px"></div>'); ?>
<div style="font:20px">
<label for="searchType" ng-model="searchType"style="margin-top:40px" style="text-indent: 20px">     Search by: </label>
<form action="output.php" method="post" style=" margin-left:20px" >
<select name="searchType" id="searchType">
  <option value="keyword" title = "Search the description field">Keyword</option>
  <option value="professor" title = "Search the e-mail field">Advisor E-Mail</option>
  <option value="projectName" title = "Search the project name field">Project Name</option>
  <option value="projectID" title= "Search the project ID field">Project ID</option>
</select>

<br>
<p ng-bind="searchType" > </p>
<p> <input  id = "search" title = "Will search for ALL words present in the above category" type="text" name="search" placeholder ="enter search criteria"></p>
<p><input type="checkbox" value = "IncArch" name = "IncArch">Include archived projects?</p>
<input type="submit" value = "Search">
</form>
</div>





</body>
</html>