<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>php funsies</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>

	<?php

		include("directors.php");

		// ulozime hodnoty do premennych
		$item_count = 5;
		$item_price = 350;

		// vynasobime ich a vysledok ulozime do premennej $sum
		$sum = $item_count * $item_price;

		// premennu $sum vypiseme na stranku
		// cize na stranke sa objavi cislo
		echo $sum;
		echo "</br>";

		// porovnanie dvoch čísel
		$num_1 = 7;
		$num_2 = 7;

		if ($num_1 > $num_2) {
			echo "prvé číslo je väčšie";
		}
		elseif ($num_1 < $num_2) {
			echo "druhé číslo je väčšie";
		}
		else {
			echo "čísla sa rovnajú";
		}
		echo "</br>";

		// porovnanie dvoch stringov
		$string_1 = "hej?";
		$string_2 = "ano";

		if ($string_1 > $string_2) {
			echo "prvé číslo je väčšie";
		}
		elseif ($string_1 < $string_2) {
			echo "druhé číslo je väčšie";
		}
		else {
			echo "čísla sa rovnajú";
		}
		echo "</br>";

		// porovnanie dvoch premennych
		$number = 5;
		$min = 6;

		if ($number > $min) {
			echo "prvé číslo je väčšie";
		}
		elseif ($number < $min) {
			echo "druhé číslo je väčšie";
		}
		else {
			echo "čísla sa rovnajú";
		}
		echo "</br>";

		foreach ($directors as $director) {
			echo $director['first_name'].' '.$director['last_name'];
			echo "</br>";
		}

		for ($i = 0; $i < count($directors); $i++) {
			echo $directors[$i]['first_name'].' '.$directors[$i]['last_name'];
			echo "</br>";
		}

	?>
	<p>&nbsp;</p>
	<select name="choice">
	  <option value="first">First Value</option>
	  <option value="second" selected>Second Value</option>
	  <option value="third">Third Value</option>
	</select>

</body>
</html>
