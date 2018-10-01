<?php include("function.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>
</head>
<body>
	<div>
		<form action="" method="post">
			<input type="number" name="num1">
			<input type="number" name="num2">
			<input type="submit" name="calculate" value="Calculate">
		</form>
		<hr>
	</div>
</body>
</html>

<?php
	if(isset($_POST['calculate'])) {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		if($num1=='' || $num2=='') {
			echo "All fields are required!";
		} else {
			$calculate = new Calculate();
			$sum = $calculate->add($num1, $num2);
			$sub = $calculate->sub($num1, $num2);
			$mul = $calculate->mul($num1, $num2);
			$div = $calculate->div($num1, $num2);

			echo "Sum = ".$sum. "<br/>";
			echo "Sub = ".$sub. "<br/>";
			echo "Mul = ".$mul. "<br/>";
			echo "Div = ".$div. "<br/>";
		}
	}

 ?>