<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>RAPP</title> <!-- title on top tab -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- sets initial scale -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> <!-- bootstrap css -->
	<style type="text/css">body {

}
<?php /* internal CSS */ ?>
body, h1, p {
  font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: normal;
  margin: 0;
  padding: 0;
  text-align: center;
 
}

.container {
  margin-left:  auto;
  margin-right:  auto;
  margin-top: 177px;
  max-width: 1170px;
  padding-right: 15px;
  padding-left: 15px;
}
.col-sm-4{
padding:20px 20px 20px 40px;
}

.row:before, .row:after {
  display: table;
  content: " ";
}

h1 {
  color:#000000;
  font-size: 48px;
  font-weight: 300;
  margin: 0 0 0 0;
}
h2 {
	color: #000000;
margin:0;
	}
p {
  margin: 0 0 10px;
}



a {
  color: #000000;
  text-decoration: none;
}
a:active {
    color: #000000;
}
a:hover {
    color:#FF0000;
}
.btn {
    margin: 10px;
}
	</style>
</head>

<!-- Start body -->
<body style = "background-color:#989898">

<!-- navigation bar -->

<?php
include './includes/header.php';
echo('<div style="margin-top:0px" style = "padding-bottom:100px"></div>');

?>
<section id="container-fluid pages">
<h2><strong><a href = "search" type="button" class="btn btn-lg btn=large btn-primary">Click here to search for a project</a></strong></h2><!--primary search button -->


<a href = "/search/"><img src="RappPic.png"  class = "span4-txt-center" width="400em" height="400em" class="img-responsive" style="padding:10px;"></a><!-- center picture -->
</section>

<div class = "row">
<div class="col-sm-2" align="left"> </div><!-- Cols divided into 12 sections (class cols must add to 12)  Buttons for register and view archive -->
<div class="col-sm-8" align="center"><strong><a type="button" class="btn  btn-lg btn=large btn-primary" style=" margin: 20px"href = "register">Register a Project</a>  
                <a href = "archive" type="button" class="btn  btn-lg btn=large btn-primary">View the archive </a></strong></div>
<div class="col-sm-2" align="left"> </div>
</div>

</div>
</div>
</div>
<script>document.getElementById("demo").innerHTML = echo $_POST["nextstep"]</script>
</body>
</html>