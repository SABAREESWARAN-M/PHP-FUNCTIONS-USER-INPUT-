<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Getting Input From User using Functions in PHP</title>
</head>
<body>
<form action="functions.php"  method="POST">
	<h1>Getting Input From User using Functions in PHP</h1>
	<label>Enter your name</label>
	<input type="text" name="name"><br><br>
<input type="submit" name="submit">	
</form>
<?php
function display()
{
	echo "Your name is :".$_POST["name"];

}
if(isset($_POST['submit']))
{
	display();
}
?>
</body>
</html>