<html>
<head>
<title>Konversi Suhu</title>
</head>
<body bgcolor="#00FFFF">
<h1>MENGKONVERSI SUHU DENGAN PHP</h1>
<?php
$celcius=30;
$fahrenhit=1200;
$reamur=l50;

	//Rumus
	$reamurtofahrenhit=(2.25*$reamur)+32;
	$reamurtocelcius=1.25*$reamur;
	$celciustofahrenhit=$celcius*1.8+32;
	$celciustoreamur=0.8*$reamur;	
	$fahrenhittocelcius=($fahrenhit-32)/1.8;
	$fahrenhittoreamur=0.44*($fahrenhit-32);
	echo "Suhu $celcius C<br>";	
	echo "jika dikonfersikan ke Reamur=$celciustoreamur<br>";
	echo "jika dikonfersikan ke Fahrenhit=$celciustofahrenhit<p>"
	echo "Suhu $fahrenhit F<br>";
	echo "jika dikonfersikan ke Reamur=$fahrenhittoreamur<br>";
	echo "jika dikonfersikan ke Celcius=$fahrenhittocelcius<p>";
	echo "Suhu $reamur R<br>";
	echo "jika dikonfersikan ke Celcius=$reamurtocelcius <br>";
	echo "jika dikonfersikan ke Fahrenhit=$reamurtofahrenhit<p>";
?>
</body>
</html>