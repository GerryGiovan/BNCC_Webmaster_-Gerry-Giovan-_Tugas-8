<?php
function skor_terbesar($arr){
//kode di sini
$class = array("Laravel","React Native","React JS");
$temp = array();
$laravel = array();
$native = array();
$js = array();
    for ($x=0; $x < count($arr); $x++) { 
        if ($arr[$x]["kelas"] == "Laravel"){
            array_push($laravel,$arr[$x]);            
        }
        else if ($arr[$x]["kelas"] == "React Native"){
            array_push($native,$arr[$x]);            
        }
        else if ($arr[$x]["kelas"] == "React JS"){
            array_push($js,$arr[$x]);            
        }
    }
for ($i=0; $i < count($laravel)-1; $i++) { 
    if ($laravel[$i]["nilai"]>$laravel[$i+1]["nilai"]) {
        array_push($temp,$laravel[$i]);
    }
    else{
        array_push($temp,$laravel[$i+1]);
    }
    if ($native[$i]["nilai"]>$native[$i+1]["nilai"]) {
        array_push($temp,$native[$i]);
    }
    else{
        array_push($temp,$native[$i+1]);
    }
    
}
array_push($temp, $js);

return $temp;
}

// TEST CASES
$skor = [
[
"nama" => "Bobby",
"kelas" => "Laravel",
"nilai" => 78
],
[
"nama" => "Regi",
"kelas" => "React Native",
"nilai" => 86
],
[
"nama" => "Aghnat",
"kelas" => "Laravel",
"nilai" => 90
],
[
"nama" => "Indra",
"kelas" => "React JS",
"nilai" => 85
],
[
"nama" => "Yoga",
"kelas" => "React Native",
"nilai" => 77
],
];

print_r(skor_terbesar($skor));
/* OUTPUT
Array (
[Laravel] => Array
(
[nama] => Aghnat
[kelas] => Laravel
[nilai] => 90
)
[React Native] => Array
(
[nama] => Regi
[kelas] => React Native
[nilai] => 86
)
[React JS] => Array
(
[nama] => Indra
[kelas] => React JS
[nilai] => 85
)
)
*/
?>