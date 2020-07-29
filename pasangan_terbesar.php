<?php
function pasangan_terbesar($angka){
// kode di sini

		$str   = $angka;
		$jml   = strlen($str)/1;
		$c   = 0;
		$tmp = array();
		for ($i=0; $i < $jml; $i++) { 
			$nilai = substr($str,$c, 2); //nampilkan dua karakter
			#ada 2 cara msukin ke array jay
			//$tmp[$i] = $nilai; //cara pertama
			array_push($tmp,$nilai); //cara kedua
			$c = $c + 1;
		}
		echo "Pasangan terbesar : ".max($tmp)."<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>