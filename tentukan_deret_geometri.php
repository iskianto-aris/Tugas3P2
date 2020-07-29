<?php
function tentukan_deret_geometri($arr) {
// kode di sini
	if (sizeof($arr) <= 1)
        return True;
    # Calculate ratio
    $ratio = $arr[1]/$arr[0];
   
    # Check the ratio of the remaining
    for($i=1; $i<sizeof($arr); $i++)
    {
        if (($arr[$i]/($arr[$i-1])) != $ratio)
        {
            return "false";
        }
    }        
  return "true";
}

//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81])."<br>"; // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32])."<br>"; // true
echo tentukan_deret_geometri([2, 4, 6, 8])."<br>"; // false
echo tentukan_deret_geometri([2, 6, 18, 54])."<br>"; // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9])."<br>"; //false
?>