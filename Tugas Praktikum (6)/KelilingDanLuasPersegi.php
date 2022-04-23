<?php
	$rumus_keliling ="(panjang x 2) + (lebar x 2) ";
	$rumus_luas = "panjang x lebar";
	$panjang =10;
	$lebar = 15;

	$keliling = ($panjang * 2) + ($lebar * 2) ; // Menghitung keliling
	$luas = $panjang * $lebar; // Menghitung luas

	echo "Rumus untuk menghitung keliling persegi panjang adalah : $rumus_keliling .<br>";
	echo "Rumus untuk menghitung luas persegi panjang adalah: $rumus_luas .<br><br>";
	echo "Persegi panjang yang memiliki lebar : $lebar, dan panjang: $panjang, maka: <br> " ;
	echo "Keliling: $keliling <br>";
	echo "Luas : $luas <br> ";
?>