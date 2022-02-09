<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
</head>
<body>
<form method="post" attribute="post" action="disp.php">
<p>First Value:<br/>
<input type="value" id="one" name="one"></p>
<p>Second Value:<br/>
<input type="value" id="two" name="two"></p>
<input type="radio" name="group1" id="add" value="add" checked="true"><p>+</p><br/>
<input type="radio" name="group1" id="minus" value="minus"><p>-</p><br/>
<input type="radio" name="group1" id="for" value="for"><p>x</p><br/>
<input type="radio" name="group1" id="divide" value="divide"><p>/</p><br/>
<p></p>
<button type="submit" name="answer" id="answer" value="answer">Calculate</button>
</form>
</body>
</html>