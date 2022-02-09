 <?php

$subject1 = "phisics";
$subject2 = "chemistry";
$subject3 = "mathematics";
$subject4 = "Biology";
$subject4 = "Computer";

?>
<html>
<title> Grade </title>
<body>
<h1> Display Grade of Student as per marks obtained</h1>
<form method="POST" action="perc.php">
Enter the Marks of the student </br>
<fieldset>
Physics:  <input type="number" name="phy"/></br></br>
Chemistry:<input type="number" name="chem"/></br></br>
Maths:    <input type="number" name="maths"/></br></br>
Biology:  <input type="number" name="bio"/></br></br>
Computer:  <input type="number" name="com"/></br></br>
<input type="submit" value="Calculate" name="subtn"/>
</fieldset>
</form>
</body>
</html>



