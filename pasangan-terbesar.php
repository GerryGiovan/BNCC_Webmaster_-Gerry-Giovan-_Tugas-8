<?php
function pasangan_terbesar($angka){
// kode di sini
$temp = strval($angka);
$max = intval(substr($temp,0,2));
for ($i=0; $i < strlen($temp)-1; $i++) { 
    $num = intval(substr($temp,$i,2));
    if ($num > $max) {
        $max = $num;
        
    }
}
return $max;
}

// TEST CASES

echo pasangan_terbesar(641573)."<br>"; // 73
echo pasangan_terbesar(12783456)."<br>"; // 83
echo pasangan_terbesar(910233)."<br>"; // 91
echo pasangan_terbesar(71856421)."<br>"; // 85
echo pasangan_terbesar(79918293)."<br>"; // 99

?>