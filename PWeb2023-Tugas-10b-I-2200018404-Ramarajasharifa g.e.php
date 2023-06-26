<?php
	$tinggi = 5;
	$spaci = $tinggi - 1;
	$bintang = 1;

	for($i = 1; $i <= $tinggi; $i++){
		for ($j = 1; $j <= $spaci; $j++) { 
			echo "&nbsp;&nbsp;&nbsp;";
		}

		for($j = 1; $j <= $bintang; $j++){
			echo "* ";
		}

		echo "<br>";
		$spaci--;
		$bintang += 2;
	}
?>