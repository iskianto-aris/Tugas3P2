<?php
function isPalindrome($string){
	return strrev($string) == $string;
}
function palindrome_angka($angka){  
if(is_int($angka) == false){
	echo "parameter bukan integer";
	return null;
}
$angka++;
while(isPalindrome("$angka") == false){
	$angka++;
}

return $angka."<br>";
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>