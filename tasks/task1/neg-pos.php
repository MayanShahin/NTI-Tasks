check if number is positive or negative:
<html>
<head>
<title> neg-pos</title>
</head>
<body>
<form method="post">
<input type="text" name="num" value="" placeholder="Enter a number"/>
<input type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['submit']))
{
$number = $_POST['num'];
if($number >= 0)
{
echo " $number is a positive number ";
}
else
{
echo " $number is a negative number ";
}
return 0;
}
?>
</body>
</html>