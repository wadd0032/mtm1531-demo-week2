<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Query Strings</title>
</head>

<body>
	
<?php
	echo $_GET['name'];
	echo ' ';
	echo $_GET['lastname'];
?>
	
<a href="name.php?name=Deanna">Deanna</a>	
<a href="name.php?name=Thomas">Thomas</a>	
<a href="name.php?name=Vandal">Vandal</a>	
<a href="name.php?name=Mike">Mike</a>	
	
</body>

</html>