<!DOCTYPE html>

<head>
	<title>Calculate Electricity Bill</title>
</head>

<?php
$electricty = $elec = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $elec = calculate_bill($units);
        $electricty = 'Total Electricity Bill of ' . $units . ' >>>> ' . $elec;
    }
}

function calculate_bill($units) {
    $unit_cost_first = .50;
    $unit_cost_second = .75;
    $unit_cost_third = 1.20;
    $unit_cost_fourth = 1.50;

    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $calc_units = $units - 50;
        $bill = $temp + ($calc_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * .20) + (100 * $unit_cost_second);
        $calc_units = $units - 100;
        $bill = $temp + ($calc_units * $unit_cost_third);
    }
    else {
        $temp = (50 * .20) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $calc_units = $units - 250;
        $bill = $temp + ($calc_units * $unit_cost_fourth);
    }
    return number_format((float)$bill, 2, '.', '');
}
?>
<body>
	<div id="submit">
		<h1>Calculate Electricity Bill</h1>

		<form action="" method="post" id="quiz-form">
            	<input type="number" name="units" id="units" placeholder="Enter number of Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Calculate" />
		</form>

		<div>
		    <?php echo '<br />' . $electricty; ?>
		</div>
	</div>
</body>
</html>