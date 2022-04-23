<?php
$n = 8;
echo "masukan : $n <br/>";
while ($n % 2 == 0){
	$n = $n/2;
}
if ($n==1){
	echo "Keluaran : TRUE";
}else{
	echo "Keluaran : FALSE";
}
?>