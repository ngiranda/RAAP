<!DOCTYPE HTML>
<html>
<head>
	<meta content = "text/htm; charset=utf-8" http-equiv="Conent-Type" />
	<title>Register</title>
	<meta name = "viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="RAPP.css">
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<style type="text/css">
	</style>
</head>
<body>

<?php include '../includes/header.php';
?>
<div ng-app="">
<script type="text/javascript" language="javascript">
    function checkform()
    {
        var f = document.forms["regform"].elements;
        var cansubmit = true;

        for (var i = 0; i < 3; i++) {
            if (f[i].value.length == 0) cansubmit = false;
        }

        if (cansubmit) {
document.getElementById('submitbutton').disabled = !cansubmit;
document.getElementById('submitbutton').style.opacity=1;
        }
    }
</script>
<label for="register" ng-model="register" ></label>
<form name="regform" action="submit.php" method="post" style="margin-left: 30px">


<br>
<h1 style="margin:0">Register</h1>
<?php
$title="enter the title";
?>
<p> <input id = "Title" title = "Enter a title for your project" type="text" onKeyup="checkform()" name="Title" placeholder ="Enter a title" required><font color="red"> *</font></p>
<p> <input id = "Description" title = "Describe your project.  Only the first 100 characters will be displayed on the search page." type="text" onKeyup="checkform()" name="Description" placeholder ="Description" required> <font color="red"> *</font></p>
<p> <input id = "AdvisorEmail" title = "Enter your luc.edu e-mail address for students to contact you.  After security procedures are in place, the option to pick which is associated with your projects." type="email" onKeyup="checkform()" name="AdvisorEmail" placeholder =" E-mail" required><font color="red"> *</font></p>

<p> <input id = "Link" title = "If your project has an external website, enter the link here.  If you do not have an external website, leave this field blank and a project summary sheet will be created for you."type="text" name="Link" placeholder ="External Link"> </p>

<p> <input id = "Prereq" title = "Enter minimum prerequisites for a student to be a successful member of your project."type="text" name="Prereq" placeholder ="Prereqs"> </p>

<p> <input id = "Picture" title = "Enter the link to a web hosted jpg, png, bmp, or gif to be associated with your project.  If you need to upload a picture from your computer, use the TinyPic button at the bottom right of the page." type="text" name="Picture" placeholder ="URL of picture"></p>

<p> <input id = "Public" title = "All projects will be visible to the public by default" type="Radio" name="Public" value="true" checked style="margin-right: .5em" ><strong> Public</strong> </p>
<p> <input type="checkbox"  title = "Archived projects are completed and and ready to showcase." name="Archived" value="true" >Click if project is completed and ready to be archived </p>
<input type="submit" value = "Register" id="submitbutton" disabled="disabled"style="opacity:.2">
</form>


</div>
<div class="col-sm-4" align="left" ></div>
<div class="col-sm-4" align="left" ></div>
<div class="col-sm-4" align="right" >
<script type="text/javascript">
tinypic_layout = 'narrow';
tinypic_type = 'images';
tinypic_links = 'url';
tinypic_language = 'en';
tinypic_search = 'true';
tinypic_autoload = false;
</script>
<script src="http://plugin.tinypic.com/j/plugin.js" type="text/javascript"></script>
<input type="button" value="Use Tiny Pic to create a URL for your picture" onclick="javascript:showTinypicPlugin();"/>
</div>



</body>
</html>