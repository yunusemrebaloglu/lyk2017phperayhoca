<?php

/*
function ekranaYaz($metin) {
	echo $metin;
}

ekranaYaz("LYK");
ekranaYaz("PHP");
*/

function rastgeleDizi($elemanSayisi, $benzersizMi = false) {
	$dizi = [];

	$max = 99;
	if($elemanSayisi > 99){
		$max = $elemanSayisi;
	}

	for($i=0; $i<$elemanSayisi; $i++) {
		if($benzersizMi){
			do {
				$sayi = rand(0,$max);
			} while(in_array($sayi, $dizi));
		} else {
			$sayi = rand(0, $max);
		}
		$dizi[] = $sayi;
	}

	return $dizi;
} 
?>
<form method="post">
	<input type="text" name="adet" />
	<input type="checkbox" name="benzersiz" />
	<button type="submit">Gönder</button>
</form>

<?php

if($_POST){
	$adet = $_POST["adet"];


	$benzersiz = isset($_POST["benzersiz"]);

	$sonuc = rastgeleDizi($adet, $benzersiz);

	foreach($sonuc as $sayi){
		echo "<h3>".$sayi."</h3>";
	}
}














