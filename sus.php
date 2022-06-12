<?php
$myfile = fopen("numb.txt", "r") or die("Unable to open file!");
$re = fread($myfile,filesize("numb.txt"));
$mo = explode(" ", $re);
echo $mo[0];
fclose($myfile);
?>

<html>
	<form method="post">
		<input type="number" name="v"/>
		<input type="number" name="l"/>
		<input type="number" name="o"/>
		<input type="submit"/>
	</form>
</html>